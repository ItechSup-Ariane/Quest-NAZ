<?php

namespace Itechsup\Bundle\QuestBundle\Controller;

use Itechsup\Bundle\QuestBundle\Entity\Questionnaire;
use Itechsup\Bundle\QuestBundle\Entity\Question;
use Itechsup\Bundle\QuestBundle\Form\Type\Categorie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuestionnaireController extends Controller
{
    public function newAction(Request $request)
    {
        $questionnaire = new Questionnaire();

        // code de test - le code ci-dessous est simplement là pour que la
        // Task ait quelques tags, sinon, l'exemple ne serait pas intéressant
        $question1 = new Question();
        $question1->texte = 'question1';
        $questionnaire->getQuestions()->add($question1);
        $question2 = new Question();
        $question2->texte = 'question2';
        $questionnaire->getQuestions()->add($question2);
        // fin du code de test

        $form = $this->createForm(new Categorie(), $questionnaire);

        // analyse le formulaire quand on reçoit une requête POST
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                // ici vous pouvez par exemple sauvegarder la Task et ses objets Tag
            }
        }

        return $this->render('ItechsupQuestBundle:Questionnaire:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}