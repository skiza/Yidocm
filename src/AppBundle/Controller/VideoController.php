<?php

/*
	Modificar el campo id video para que sea autoincrement	
	ALTER TABLE video MODIFY COLUMN idVideo INT(11) auto_increment;

	SET FOREIGN_KEY_CHECKS=0;	
	SET FOREIGN_KEY_CHECKS=1;

*/

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\File\UploadedFile;

use Symfony\Component\Validator\Constraints\Date;

use AppBundle\Entity\Video;
use AppBundle\Form\VideoType;


/**
 * Video controller.
 *
 * @Route("/video")
 */
class VideoController extends Controller
{
    /**
     * Lists all Video entities.
     *
     * @Route("/", name="video_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $videos = $em->getRepository('AppBundle:Video')->findAll();

        return $this->render('video/index.html.twig', array(
            'videos' => $videos,
        ));
    }

    /**
     * Creates a new Video entity.
     *
     * @Route("/new", name="video_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $video = new Video();
        $form = $this->createForm('AppBundle\Form\VideoType', $video);
		//var_dump($form);
        $form->handleRequest($request);		
		//var_dump($request);
		
        if ($form->isSubmitted() && $form->isValid()) {					
			/*
				Recuperar usuario de la bbdd
				Buscar por el alias que es unique
			*/
			$userSesion = 'abc';
			$usuario = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(array('alias' => $userSesion));						
			//var_dump($usuario);			
			$video->setUserAlias($usuario);
		
			/*
				UploadedDate
			*/
			$time = date('Y-m-d');			
			$video->setUploaddate(new \DateTime($time));
			
			/*
				VideoStatus
			*/
			$videoStatus = $this->getDoctrine()->getRepository('AppBundle:Videostatus')->findOneBy(array('videostatus' => 'open'));	
			$video->setVideostatusVideostatus($videoStatus);
			
			//
			
			if(($video->getFile() instanceof UploadedFile) && ($video->getFile()->getError() == '0')){			
			/*	Myme Type
			
				activar en php.ini -----> php_fileinfo
			*/
				$mimeType = $video->getFile()->getMimeType();
				//validation of the mime type
				if($mimeType == 'video/mp4' || $mimeType == 'video/webm' || $mimeType == 'video/ogg') {				
					$video->setFormat($mimeType);
					/*
						Size
					*/
					//getClientSize()  It is extracted from the request from which the file has been uploaded. Then is should not be considered as a safe value.
					$size = $video->getFile()->getClientSize(); // give you the size in bytes 
					$video->setSize($size/(1024*1024));					
					
					try{						
						$em = $this->getDoctrine()->getManager();
						$em->persist($video);
						$em->flush();
						
						$filepath = $video->getIdvideo().'_' . $video->getTitle() . '.';
						if($mimeType == 'video/mp4')
							$filepath .= 'mp4';
						elseif($mimeType == 'video/webm')
							$filepath .= 'webm';
						elseif($mimeType == 'video/ogg')
							$filepath .= 'ogg';						

						// FilePath						
						$video->setFilepath($filepath);	
						
						$em->flush();
						
						$video->processFile($usuario->getAlias(),$filepath);
						
						print_r('video was uploaded successfully <b> '.$video->getFilepath() . '</b>');
						
					}catch(FileException $e){
						print_r('cannot move the file');
					}catch(Exception $e){
						print_r('Exception');
					}
			
				}else{
					print_r("Format file invalid");				
				}
				
				//var_dump($video);				
				
			}else{
				print_r('File error');
				die();
			}
           //return $this->redirectToRoute('video_show', array('id' => $video->getId()));			
			
			die();
        }

        return $this->render('video/new.html.twig', array(
            'video' => $video,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Video entity.
     *
     * @Route("/{id}", name="video_show")
     * @Method("GET")
     */
    public function showAction($id)
    {
       	$em = $this->getDoctrine()->getManager();
        $video = $em->getRepository('AppBundle:Video')->findOneBy(array('idvideo' => $id));		
		
        var_dump($video);

        return $this->render('video/show.html.twig', array(
            'video' => $video,
         ));
    }
	
	  /**
     * DOWNLOAD
     *
     * @Route("/download/{name}", name="video_download")
     * @Method("GET")
     */
    public function downloadAction($name)
    {
        $em = $this->getDoctrine()->getManager();
        $video = $em->getRepository('AppBundle:Video')->findOneBy(array('filepath' => $name)); 
       	$path = $this->get('kernel')->getRootDir(). "/../web/uploads/" . $video->getUserAlias()->getAlias() ."/" . $name;  
		
     if (!file_exists($path)) {  
       throw $this->createNotFoundException();  
     }  
	 
		// Generate response
		$response = new Response();

		// Set headers
		$response->headers->set('Cache-Control', 'private');
		$response->headers->set('Content-type', mime_content_type($path));
		$response->headers->set('Content-Disposition', 'attachment; filename="' . basename($path) . '";');
		$response->headers->set('Content-length', filesize($path));

		// Send headers before outputting anything
		/*
			sendHeader doesn't work in Chrome
		*/
		//$response->sendHeaders();

		$response->setContent(file_get_contents($path));
		
		return $response;
    }

    /**
     * Displays a form to edit an existing Video entity.
     *
     * @Route("/{id}/edit", name="video_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Video $video)
    {
        $deleteForm = $this->createDeleteForm($video);
        $editForm = $this->createForm('AppBundle\Form\VideoType', $video);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($video);
            $em->flush();

            return $this->redirectToRoute('video_edit', array('id' => $video->getId()));
        }

        return $this->render('video/edit.html.twig', array(
            'video' => $video,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Video entity.
     *
     * @Route("/{id}", name="video_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Video $video)
    {
        $form = $this->createDeleteForm($video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($video);
            $em->flush();
        }

        return $this->redirectToRoute('video_index');
    }

    /**
     * Creates a form to delete a Video entity.
     *
     * @param Video $video The Video entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Video $video)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('video_delete', array('id' => $video->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
