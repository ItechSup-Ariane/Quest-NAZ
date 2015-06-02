<?php

namespace Itechsup\Bundle\QuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Categorie
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
     * @ORM\Column(name="libelle", type="string", length=35)
     */
    private $libelle;

    /**
     *
     * @var Questionnaire
     * 
     * @ORM\ManyToOne(targetEntity="Questionnaire", inversedBy="categories")
     * @ORM\JoinColumn(name="questionnaire_id", referencedColumnName="id")
     */
    private $questionnaire;
    
    
    /**
     *
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Question", mappedBy="categorie")
     */
    private $questions;
    

    public function __construct() {
        $this->questions = new ArrayCollection();
    }
      
    public function addQuestion($key, $question){
        $this->questions[$key] = $question;
        
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
     * Set questionnaire
     *
     * @param \Itechsup\Bundle\QuestBundle\Entity\Questionnaire $questionnaire
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

    /**
     * Remove questions
     *
     * @param \Itechsup\Bundle\QuestBundle\Entity\Question $questions
     */
    public function removeQuestion(\Itechsup\Bundle\QuestBundle\Entity\Question $questions)
    {
        $this->questions->removeElement($questions);
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
     * Remove commentaires
     *
     * @param \Itechsup\Bundle\QuestBundle\Entity\Commentaire $commentaires
     */
    public function removeCommentaire(\Itechsup\Bundle\QuestBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires->removeElement($commentaires);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }
}
