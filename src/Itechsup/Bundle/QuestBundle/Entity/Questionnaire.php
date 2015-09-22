<?php

namespace Itechsup\Bundle\QuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 */
class Questionnaire {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $titre;
    /**
     *
     * @ORM\OneToMany(targetEntity="Categorie", mappedBy="questionnaire")
     */
    protected $categories;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add category
     *
     * @param \Itechsup\Bundle\QuestBundle\Entity\categories $category
     *
     * @return Questionnaire
     */
    public function addCategory(\Itechsup\Bundle\QuestBundle\Entity\categories $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \Itechsup\Bundle\QuestBundle\Entity\categories $category
     */
    public function removeCategory(\Itechsup\Bundle\QuestBundle\Entity\categories $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
