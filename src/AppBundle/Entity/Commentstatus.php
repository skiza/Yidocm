<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentstatus
 *
 * @ORM\Table(name="CommentStatus")
 * @ORM\Entity
 */
class Commentstatus
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="commentStatus", type="string", length=30)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentstatus;



    /**
     * Set description
     *
     * @param string $description
     * @return Commentstatus
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
     * Get commentstatus
     *
     * @return string 
     */
    public function getCommentstatus()
    {
        return $this->commentstatus;
    }
}
