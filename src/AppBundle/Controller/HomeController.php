<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/", name="HomeIndex")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function indexAction(Request $request)
    {
        $dateCourseSession = $request->getSession()->get('dateCourse');
        $currentDay = new \DateTime();
        $reunsCurrentDay = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Caractrap')
            ->reunByJour($dateCourseSession != '' ? $dateCourseSession : $currentDay->format('Y-m-d'));
        return $this->render('AppBundle:Home:index.html.twig', array(
            'reunions' => $reunsCurrentDay,
            'currentDate' => $dateCourseSession != '' ? $dateCourseSession : $currentDay->format('Y-m-d')
        ));
    }

    /**
     * @Route("/reunions/ajx", name="reunsAjx")
     * @Method({"GET"})
     */
    public function ajxReunionAction(Request $request)
    {
        $response = new JsonResponse();

        try
        {
            $currentDay = new \DateTime($request->get('date',null));
            $request->getSession()->set('dateCourse',$request->get('date',null));
            $reuns = array();
            $reunsBrut = $this
                ->getDoctrine()
                ->getRepository('AppBundle:Caractrap')
                ->reunByJour($currentDay->format('Y-m-d'));
            foreach ($reunsBrut as $reun) {
                array_push($reuns, array('reun'=>$reun->getReun(),'hippo'=>$reun->getHippo()->getHippo(),'prixnom'=>$reun->getPrixnom(),'prix'=>$reun->getPrix(),'typec'=>$reun->getTypec(),'cheque'=>$reun->getCheque(),'id'=>$reun->getId(),'quinte'=>$reun->getQuinte(),'paysHippo'=>$reun->getHippo()->getPays()->getPays()));
            }
            $response->setStatusCode(200);
            $response->setContent(json_encode($reuns));

        }catch(\Exception $e)
        {

            echo $e->getTraceAsString();
            $response->setStatusCode(500);
            $response->setContent(json_encode(array('message' => $e->getMessage())));
        }
        return $response;
    }

}
