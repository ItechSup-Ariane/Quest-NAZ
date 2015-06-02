<?php

namespace Itechsup\Bundle\QuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Questionnaire
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Questionnaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50)
     */
    private $titre;


    /**
     *
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Categorie", mappedBy="questionnaire")
     */
    private $categories;
    
    public function __construct() {
        $this->categories = new ArrayCollection();
    }
    
    public function addCategorie($key, $categorie){
        $this->categories[$key] = $categorie;
        
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
     * Set titre
     *
     * @param string $titre
     * @return Questionnaire
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Add categories
     *
     * @param \Itechsup\Bundle\QuestBundle\Entity\Categorie $categories
     * @return Questionnaire
     */
    public function addCategory(\Itechsup\Bundle\QuestBundle\Entity\Categorie $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Itechsup\Bundle\QuestBundle\Entity\Categorie $categories
     */
    public function removeCategory(\Itechsup\Bundle\QuestBundle\Entity\Categorie $categories)
    {
        $this->categories->removeElement($categories);
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
