<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="Category")
 * @ORM\Entity
 */
class Category
{
    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=60, nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCategory", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategory;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Video", mappedBy="categorycategory")
     */
    private $videovideo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->videovideo = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set category
     *
     * @param string $category
     * @return Category
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Category
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
     * Get idcategory
     *
     * @return integer 
     */
    public function getIdcategory()
    {
        return $this->idcategory;
    }

    /**
     * Add videovideo
     *
     * @param \AppBundle\Entity\Video $videovideo
     * @return Category
     */
    public function addVideovideo(\AppBundle\Entity\Video $videovideo)
    {
        $this->videovideo[] = $videovideo;

        return $this;
    }

    /**
     * Remove videovideo
     *
     * @param \AppBundle\Entity\Video $videovideo
     */
    public function removeVideovideo(\AppBundle\Entity\Video $videovideo)
    {
        $this->videovideo->removeElement($videovideo);
    }

    /**
     * Get videovideo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVideovideo()
    {
        return $this->videovideo;
    }
}
