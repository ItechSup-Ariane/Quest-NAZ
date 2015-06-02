<?php

namespace Itechsup\Bundle\QuestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $questionnaire = $this->getDoctrine()->getRepository('ItechsupQuestBundle:Questionnaire')->find(2);
        
        return array('questionnaire' => $questionnaire);
    }
}
