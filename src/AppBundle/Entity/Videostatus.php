<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Videostatus
 *
 * @ORM\Table(name="VideoStatus")
 * @ORM\Entity
 */
class Videostatus
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
     * @ORM\Column(name="videoStatus", type="string", length=30)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $videostatus;



    /**
     * Set description
     *
     * @param string $description
     * @return Videostatus
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
     * Get videostatus
     *
     * @return string 
     */
    public function getVideostatus()
    {
        return $this->videostatus;
    }
}
