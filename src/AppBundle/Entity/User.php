<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="User", indexes={@ORM\Index(name="fk_User_UserType_idx", columns={"UserType_userType"}), @ORM\Index(name="fk_User_UserStatus1_idx", columns={"UserStatus_userStatus"}), @ORM\Index(name="fk_User_Country1_idx", columns={"Country_initial"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=30, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime", nullable=false)
     */
    private $creationdate;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=1, nullable=false)
     */
    private $gender;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOfBirth", type="date", nullable=false)
     */
    private $dateofbirth;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=60, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=30)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $alias;

    /**
     * @var \AppBundle\Entity\Usertype
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usertype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UserType_userType", referencedColumnName="userType")
     * })
     */
    private $usertypeUsertype;

    /**
     * @var \AppBundle\Entity\Userstatus
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Userstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UserStatus_userStatus", referencedColumnName="userStatus")
     * })
     */
    private $userstatusUserstatus;

    /**
     * @var \AppBundle\Entity\Country
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Country_initial", referencedColumnName="initial")
     * })
     */
    private $countryInitial;



    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     * @return User
     */
    public function setCreationdate($creationdate)
    {
        $this->creationdate = $creationdate;

        return $this;
    }

    /**
     * Get creationdate
     *
     * @return \DateTime 
     */
    public function getCreationdate()
    {
        return $this->creationdate;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set dateofbirth
     *
     * @param \DateTime $dateofbirth
     * @return User
     */
    public function setDateofbirth($dateofbirth)
    {
        $this->dateofbirth = $dateofbirth;

        return $this;
    }

    /**
     * Get dateofbirth
     *
     * @return \DateTime 
     */
    public function getDateofbirth()
    {
        return $this->dateofbirth;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }
    
    /**
     * Set alias
     *
     * @param string $alias
     * @return User
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Set usertypeUsertype
     *
     * @param \AppBundle\Entity\Usertype $usertypeUsertype
     * @return User
     */
    public function setUsertypeUsertype(\AppBundle\Entity\Usertype $usertypeUsertype = null)
    {
        $this->usertypeUsertype = $usertypeUsertype;

        return $this;
    }

    /**
     * Get usertypeUsertype
     *
     * @return \AppBundle\Entity\Usertype 
     */
    public function getUsertypeUsertype()
    {
        return $this->usertypeUsertype;
    }

    /**
     * Set userstatusUserstatus
     *
     * @param \AppBundle\Entity\Userstatus $userstatusUserstatus
     * @return User
     */
    public function setUserstatusUserstatus(\AppBundle\Entity\Userstatus $userstatusUserstatus = null)
    {
        $this->userstatusUserstatus = $userstatusUserstatus;

        return $this;
    }

    /**
     * Get userstatusUserstatus
     *
     * @return \AppBundle\Entity\Userstatus 
     */
    public function getUserstatusUserstatus()
    {
        return $this->userstatusUserstatus;
    }

    /**
     * Set countryInitial
     *
     * @param \AppBundle\Entity\Country $countryInitial
     * @return User
     */
    public function setCountryInitial(\AppBundle\Entity\Country $countryInitial = null)
    {
        $this->countryInitial = $countryInitial;

        return $this;
    }

    /**
     * Get countryInitial
     *
     * @return \AppBundle\Entity\Country 
     */
    public function getCountryInitial()
    {
        return $this->countryInitial;
    }
}
