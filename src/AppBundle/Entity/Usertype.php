<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usertype
 *
 * @ORM\Table(name="UserType")
 * @ORM\Entity
 */
class Usertype
{
    /**
     * @var string
     *
     * @ORM\Column(name="userType", type="string", length=30)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usertype;



    /**
     * Get usertype
     *
     * @return string 
     */
    public function getUsertype()
    {
        return $this->usertype;
    }
}
