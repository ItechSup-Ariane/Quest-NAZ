<?php

namespace Itechsup\Bundle\QuestBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Questionnaire {
    protected $titre;

    protected $questions;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getQuestions()
    {
        return $this->questions;
    }

    public function setQuestions(ArrayCollection $questions)
    {
        $this->questions = $questions;
    }
}