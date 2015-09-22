<?php
namespace Itechsup\Bundle\QuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 */
class Categorie{
    
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $libelle;
    /**
     *
     * @ORM\OneToMany(targetEntity="Question", mappedBy="categorie")
     */
    private $questions;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Questionnaire", inversedBy="categories")
     */
    private $questionnaire;
    
    
    public function __construct() {
        $this->questions = new ArrayCollection();
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Categorie
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Add question
     *
     * @param \Itechsup\Bundle\QuestBundle\Entity\Question $question
     *
     * @return Categorie
     */
    public function addQuestion(\Itechsup\Bundle\QuestBundle\Entity\Question $question)
    {
        $this->questions[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \Itechsup\Bundle\QuestBundle\Entity\Question $question
     */
    public function removeQuestion(\Itechsup\Bundle\QuestBundle\Entity\Question $question)
    {
        $this->questions->removeElement($question);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set questionnaire
     *
     * @param \Itechsup\Bundle\QuestBundle\Entity\Questionnaire $questionnaire
     *
     * @return Categorie
     */
    public function setQuestionnaire(\Itechsup\Bundle\QuestBundle\Entity\Questionnaire $questionnaire = null)
    {
        $this->questionnaire = $questionnaire;

        return $this;
    }

    /**
     * Get questionnaire
     *
     * @return \Itechsup\Bundle\QuestBundle\Entity\Questionnaire
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }
}
