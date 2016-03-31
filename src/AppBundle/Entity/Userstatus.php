<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userstatus
 *
 * @ORM\Table(name="UserStatus")
 * @ORM\Entity
 */
class Userstatus
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
     * @ORM\Column(name="userStatus", type="string", length=30)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userstatus;



    /**
     * Set description
     *
     * @param string $description
     * @return Userstatus
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
     * Get userstatus
     *
     * @return string 
     */
    public function getUserstatus()
    {
        return $this->userstatus;
    }
}
