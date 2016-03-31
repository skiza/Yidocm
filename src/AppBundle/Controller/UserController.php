<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\User;
use AppBundle\Entity\Users;
use AppBundle\Form\UserType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;  // campo selección: select, checkbox o radio
use Symfony\Bridge\Doctrine\Form\Type\EntityType;  // permite cargar opciones desde una entidad Doctrine
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Intl\Intl;  // 
/**
 * User controller.
 *
 * @Route("/user")
 */
class UserController extends Controller
{
    /**
     * Lists all User entities.
     *
     * @Route("/", name="user_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findAll();

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new User entity.
     *
     * @Route("/new", name="user_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = new User();
		$form = $this->createFormBuilder($user)
            ->add('email', EmailType::class)
            ->add('password', PasswordType::class)
            ->add('alias')
            ->add('gender', 
		ChoiceType::class, 
		array('choices' => array('F' => 'Female',
				        'M'  => 'Male'),
			'data' => 'F',
			'multiple' => false,
			'expanded' => true))
            ->add('dateofbirth', BirthdayType::class)
            ->add('city')
	->add('countryInitial', 
		EntityType::class, 
		array('class' => 'AppBundle:Country',
			'choice_label' => 'country',
			'placeholder' => 'Choose your country'))
			->getForm();
        ;
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $userStatus = $this->getDoctrine()->getRepository('AppBundle:Userstatus')->find('open');
            $user->setUserstatusUserstatus($userStatus);
			
			$userType = $this->getDoctrine()->getRepository('AppBundle:Usertype')->find('basic');
            $user->setUsertypeUsertype($userType);
			$user->setCreationdate(new \DateTime("Now"));
            $em->persist($user);
            $em->flush();

           return $this->redirectToRoute('login_form');
            
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }
	/**
     * @Route("/login", name="login_form")
     */		
	public function loginAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $user = new User();

		
        $form = $this->createFormBuilder($user)
            ->add('email', TextType::class)
            ->add('password', PasswordType::class)
            ->add('save', SubmitType::class, array('label' => 'Log in'))
            ->getForm();
			
		$form->handleRequest($request);
	
		if ($form->isSubmitted() && $form->isValid()) {
			$query = $this->getDoctrine()->getManager()
			->createQuery('SELECT count(u) as num
						   FROM AppBundle:User u
						   WHERE u.email = :email and u.password = :password'
							
			)->setParameter('email', $user->getEmail())->setParameter('password', $user->getPassword());
				$num = $query->getSingleResult();
				if($num['num']==0){
					return $this->render('default/new.html.twig', array('form' => $form->createView(),'error'=>'User or Password incorrect'));
				}
				else{
					
					$session = $request->getSession();
					$session->start();
					// guarda un atributo para reutilizarlo durante una
					// petición posterior del usuario
					//$session->set('email',$usuario->getEmail());

					$session->set('email',$user->getEmail());
					$query = $this->getDoctrine()->getManager()
					->createQuery('SELECT u.alias
						   FROM AppBundle:User u
						   WHERE u.email = :email'
							
					)->setParameter('email', $session->get('email'));
					$alias = $query->getResult();
					 return $this->render('inbox/inbox.html.twig',['alias'=> $alias]);
				}

				
		}
		        return $this->render('login/login.html.twig', array(
            'form' => $form->createView(),'error'=>''
        ));
    }
	/**
     * @Route("/cerrar", name="cerrar")
     */	
	public function cerrarAction(Request $request)
    {
				$session = $request->getSession();
				$session->start();
				$session->invalidate();
		        return $this->redirectToRoute('login_form');
    }
    /**
     * Finds and displays a User entity.
     *
     * @Route("/{id}", name="user_show")
     * @Method("GET")
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     * @Route("/{id}/edit", name="user_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('AppBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_edit', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a User entity.
     *
     * @Route("/{id}", name="user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a User entity.
     *
     * @param User $user The User entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
