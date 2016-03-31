<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="Comment", indexes={@ORM\Index(name="fk_Comment_Video1_idx", columns={"Video_idVideo"}), @ORM\Index(name="fk_Comment_User1_idx", columns={"User_alias"}), @ORM\Index(name="fk_Comment_CommentStatus1_idx", columns={"CommentStatus_commentStatus"})})
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="string", length=100, nullable=true)
     */
    private $body;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="instant", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $instant;

    /**
     * @var integer
     *
     * @ORM\Column(name="idComment", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomment;

    /**
     * @var \AppBundle\Entity\Video
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Video")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Video_idVideo", referencedColumnName="idVideo")
     * })
     */
    private $videovideo;

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
     * @var \AppBundle\Entity\Commentstatus
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Commentstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CommentStatus_commentStatus", referencedColumnName="commentStatus")
     * })
     */
    private $commentstatusCommentstatus;



    /**
     * Set title
     *
     * @param string $title
     * @return Comment
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
     * Set body
     *
     * @param string $body
     * @return Comment
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Comment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set instant
     *
     * @param string $instant
     * @return Comment
     */
    public function setInstant($instant)
    {
        $this->instant = $instant;

        return $this;
    }

    /**
     * Get instant
     *
     * @return string 
     */
    public function getInstant()
    {
        return $this->instant;
    }

    /**
     * Get idcomment
     *
     * @return integer 
     */
    public function getIdcomment()
    {
        return $this->idcomment;
    }

    /**
     * Set videovideo
     *
     * @param \AppBundle\Entity\Video $videovideo
     * @return Comment
     */
    public function setVideovideo(\AppBundle\Entity\Video $videovideo = null)
    {
        $this->videovideo = $videovideo;

        return $this;
    }

    /**
     * Get videovideo
     *
     * @return \AppBundle\Entity\Video 
     */
    public function getVideovideo()
    {
        return $this->videovideo;
    }

    /**
     * Set userAlias
     *
     * @param \AppBundle\Entity\User $userAlias
     * @return Comment
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
     * Set commentstatusCommentstatus
     *
     * @param \AppBundle\Entity\Commentstatus $commentstatusCommentstatus
     * @return Comment
     */
    public function setCommentstatusCommentstatus(\AppBundle\Entity\Commentstatus $commentstatusCommentstatus = null)
    {
        $this->commentstatusCommentstatus = $commentstatusCommentstatus;

        return $this;
    }

    /**
     * Get commentstatusCommentstatus
     *
     * @return \AppBundle\Entity\Commentstatus 
     */
    public function getCommentstatusCommentstatus()
    {
        return $this->commentstatusCommentstatus;
    }
}
