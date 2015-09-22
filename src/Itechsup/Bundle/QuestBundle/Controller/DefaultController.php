<?php

namespace Itechsup\Bundle\QuestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * default controller
 * 
 * @Route("/Accueil")
 */
class DefaultController extends Controller
{
    /**
     * Type d'accès
     *
     * @Route("/")
     * @Method("GET")
     * @Template("ItechsupQuestBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ItechsupQuestBundle:Questionnaire')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    
    /**
     * Type d'accès
     *
     * @Route("/utilisateur")
     * @Method("GET")
     * @Template("ItechsupQuestBundle:Questionnaire:index.html.twig")
     */
    public function accueilUtilisateur()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ItechsupQuestBundle:Questionnaire')->findAll();

        return array(
            'entities' => $entities,
        );
    }
            
}
