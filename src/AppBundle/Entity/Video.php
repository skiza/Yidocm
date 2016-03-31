<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="Video", indexes={@ORM\Index(name="fk_Video_User1_idx", columns={"User_alias"}), @ORM\Index(name="fk_Video_VideoStatus1_idx", columns={"VideoStatus_videoStatus"})})
 * @ORM\Entity
 */
class Video
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=45, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="filePath", type="string", length=100, nullable=true)
     */
    private $filepath;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="uploadDate", type="date", nullable=false)
     */
    private $uploaddate;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=60, nullable=true)
     */
    private $format;

    /**
     * @var integer
     *
     * @ORM\Column(name="idVideo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvideo;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User_alias", referencedColumnName="alias")
     * })
     */
    private $userAlias;

    /**
     * @var \AppBundle\Entity\Videostatus
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Videostatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="VideoStatus_videoStatus", referencedColumnName="videoStatus")
     * })
     */
    private $videostatusVideostatus;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Category", inversedBy="videovideo")
     * @ORM\JoinTable(name="video_has_category",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Video_idVideo", referencedColumnName="idVideo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Category_idCategory", referencedColumnName="idCategory")
     *   }
     * )
     */
    private $categorycategory;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categorycategory = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set title
     *
     * @param string $title
     * @return Video
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Video
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set filepath
     *
     * @param string $filepath
     * @return Video
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;

        return $this;
    }

    /**
     * Get filepath
     *
     * @return string 
     */
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * Set uploaddate
     *
     * @param \DateTime $uploaddate
     * @return Video
     */
    public function setUploaddate($uploaddate)
    {
        $this->uploaddate = $uploaddate;

        return $this;
    }

    /**
     * Get uploaddate
     *
     * @return \DateTime 
     */
    public function getUploaddate()
    {
        return $this->uploaddate;
    }

    /**
     * Set size
     *
     * @param string $size
     * @return Video
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set format
     *
     * @param string $format
     * @return Video
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Get idvideo
     *
     * @return integer 
     */
    public function getIdvideo()
    {
        return $this->idvideo;
    }

    /**
     * Set userAlias
     *
     * @param \AppBundle\Entity\User $userAlias
     * @return Video
     */
    public function setUserAlias(\AppBundle\Entity\User $userAlias = null)
    {
        $this->userAlias = $userAlias;

        return $this;
    }

    /**
     * Get userAlias
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUserAlias()
    {
        return $this->userAlias;
    }

    /**
     * Set videostatusVideostatus
     *
     * @param \AppBundle\Entity\Videostatus $videostatusVideostatus
     * @return Video
     */
    public function setVideostatusVideostatus(\AppBundle\Entity\Videostatus $videostatusVideostatus = null)
    {
        $this->videostatusVideostatus = $videostatusVideostatus;

        return $this;
    }

    /**
     * Get videostatusVideostatus
     *
     * @return \AppBundle\Entity\Videostatus 
     */
    public function getVideostatusVideostatus()
    {
        return $this->videostatusVideostatus;
    }

    /**
     * Add categorycategory
     *
     * @param \AppBundle\Entity\Category $categorycategory
     * @return Video
     */
    public function addCategorycategory(\AppBundle\Entity\Category $categorycategory)
    {
        $this->categorycategory[] = $categorycategory;

        return $this;
    }

    /**
     * Remove categorycategory
     *
     * @param \AppBundle\Entity\Category $categorycategory
     */
    public function removeCategorycategory(\AppBundle\Entity\Category $categorycategory)
    {
        $this->categorycategory->removeElement($categorycategory);
    }

    /**
     * Get categorycategory
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategorycategory()
    {
        return $this->categorycategory;
    }
}
