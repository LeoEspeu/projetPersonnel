<?php

namespace AppBundle\Controller;

use AppBundle\Entity\SynthPresse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Synthpresse controller.
 *
 * @Route("synthpresse")
 */
class SynthPresseController extends Controller
{
    /**
     * Lists all synthPresse entities.
     *
     * @Route("/", name="synthpresse_index")
     * @Method("GET")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function indexAction(Request $request)
    {
        $dateSynthSession = $request->getSession()->get('dateSynth');
        $em = $this->getDoctrine()->getManager();

        $currentDay = new \DateTime();

        $synthPresses = $this->container->get('synthpresse.manager')->storeSynthPresse($dateSynthSession != '' ? $dateSynthSession : $currentDay->format('Y-m-d'));

        $titreQuinte = '';
        if(count($synthPresses)){
            $titreQuinte .= $synthPresses[0]->getHippo().' - '.$synthPresses[0]->getNomCourse();
        }

        return $this->render('synthpresse/index.html.twig', array(
            'synthPresses' => $synthPresses,
            'dateSynth' => $dateSynthSession != '' ? $dateSynthSession : $currentDay->format('Y-m-d'),
            'titre' => $titreQuinte
        ));
    }

    /**
     * Displays a form to edit an existing synthPresse entity.
     *
     * @Route("/{dateCourse}/{posPresse}/{numcourse}/edit", name="synthpresse_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, SynthPresse $synthPresse)
    {
        $request->getSession()->set('dateSynth',$synthPresse->getDateCourse());
        $editForm = $this->createForm('AppBundle\Form\SynthPresseType', $synthPresse);
        $editForm->handleRequest($request);


        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('synthpresse_index');
        }

        return $this->render('synthpresse/edit.html.twig', array(
            'synthPresse' => $synthPresse,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * @Route("/synthpresse/ajx", name="synthPresseAjx")
     * @Method({"GET"})
     */
    public function ajxReunionAction(Request $request)
    {
        $response = new JsonResponse();

        try
        {
            $currentDay = new \DateTime($request->get('date',null));
            $synths = array();
            $synthJour = $this->container->get('synthpresse.manager')->storeSynthPresse($currentDay->format('Y-m-d'));
            foreach ($synthJour as $synth) {
                array_push($synths, array('dateCourse'=> $synth->getDateCourse(),'numCourse' => $synth->getNumcourse(),'posPresse'=>$synth->getPosPresse(),'hippo'=>$synth->getHippo(),'nomCourse'=>$synth->getNomCourse(),'numCheval'=>$synth->getNumCheval(),'place'=>$synth->getPlace(),'cote'=>$synth->getCote()));
            }
            $response->setStatusCode(200);
            $response->setContent(json_encode($synths));

        }catch(\Exception $e)
        {

            echo $e->getTraceAsString();
            $response->setStatusCode(500);
            $response->setContent(json_encode(array('message' => $e->getMessage())));
        }
        if($request->get('date',null))
        {
            $request->getSession()->set('dateSynth',$request->get('date',null));
        }
        return $response;
    }
}
