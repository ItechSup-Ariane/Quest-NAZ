<?php

namespace Itechsup\Bundle\QuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Question
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
     * @ORM\Column(name="texte", type="string", length=255)
     */
    private $texte;

    /**
     *
     * @var Categorie
     * 
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="questions")
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     */
    private $categorie;
    
    /**
     *
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Reponse", mappedBy="question")
     */
    private $reponses;
    
    
    public function __construct() {
        $this->reponses = new ArrayCollection();
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
     * Set texte
     *
     * @param string $texte
     * @return Question
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set categorie
     *
     * @param \Itechsup\Bundle\QuestBundle\Entity\Categorie $categorie
     * @return Question
     */
    public function setCategorie(\Itechsup\Bundle\QuestBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Itechsup\Bundle\QuestBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set reponse
     *
     * @param \Itechsup\Bundle\QuestBundle\Entity\Reponse $reponse
     * @return Question
     */
    public function setReponse(\Itechsup\Bundle\QuestBundle\Entity\Reponse $reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return \Itechsup\Bundle\QuestBundle\Entity\Reponse 
     */
    public function getReponse()
    {
        return $this->reponse;
    }
}
