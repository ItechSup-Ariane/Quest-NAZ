<?php

namespace Itechsup\Bundle\QuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Reponse
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
     * @var integer
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;

    /**
     *
     * @var Question
     * 
     * @ORM\ManyToOne(targetEntity="Question", inversedBy="reponses")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     */
    private $question;

    public function __construct() {
        
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
     * Set note
     *
     * @param integer $note
     * @return Reponse
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }
    
    /**
    * Set question
    *
    * @param \Itechsup\Bundle\QuestBundle\Entity\Question $question
    * @return Question
    */
    public function setQuestion(\Itechsup\Bundle\QuestBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }
    
    /**
    * Get question
    *
    * @return \Itechsup\Bundle\QuestBundle\Entity\Question 
    */
    public function getQuestion()
    {
        return $this->question;
    }
}
