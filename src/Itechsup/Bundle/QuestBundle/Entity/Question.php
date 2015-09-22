<?php
namespace Itechsup\Bundle\QuestBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Question {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $texte;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="questions")
     */
    private $categorie;
    /**
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
     *
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
     *
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
     * Add reponse
     *
     * @param \Itechsup\Bundle\QuestBundle\Entity\Reponse $reponse
     *
     * @return Question
     */
    public function addReponse(\Itechsup\Bundle\QuestBundle\Entity\Reponse $reponse)
    {
        $this->reponses[] = $reponse;

        return $this;
    }

    /**
     * Remove reponse
     *
     * @param \Itechsup\Bundle\QuestBundle\Entity\Reponse $reponse
     */
    public function removeReponse(\Itechsup\Bundle\QuestBundle\Entity\Reponse $reponse)
    {
        $this->reponses->removeElement($reponse);
    }

    /**
     * Get reponses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReponses()
    {
        return $this->reponses;
    }
}
