<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cachedate;
use AppBundle\Entity\Caractrap;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class CourseController
 * @package AppBundle\Controller
 * @Route("/course")
 */
class CourseController extends Controller
{
    /**
     * @Route("/{reunion}", name="CourseIndex")
     */
    public function indexAction(Caractrap $reunion)
    {
        $clCourse = $this->container->get('course.manager')->clCourseOrdonnee($reunion->getId());

        return $this->render("AppBundle:Course:course.html.twig", array(
            'course' => $reunion,
            'clCourse' => $clCourse
        ));
    }

    /**
     * @Route("/course/ajx", name="courseAjx")
     * @Method({"GET"})
     */
    public function ajxCourseAction(Request $request)
    {
        $response = new JsonResponse();

        try
        {
            $idCourse = $request->get('id',null);
            $cl = array();
            $clBrut = $this
                ->getDoctrine()
                ->getRepository('AppBundle:Cachedate')
                ->clByCourse($idCourse);
            foreach ($clBrut as $position) {
                array_push($cl, array(
                        'id' => $position->getId(),
                        'cl' => $position->getCl(),
                        'numero' => $position->getNumero(),
                        'cheval' => $position->getCheval(),
                        'recense' => $position->getRecence(),
                        'rapport' => $position->getCoteprob(),
                        'defoeil' => $position->getDefoeil(),
                        'jockey' => $position->getJockey(),
                        'entraineur' => $position->getEntraineur(),
                        'sexe' => $position->getSexe(),
                        'age' =>$position->getAge(),
                        'corde' => $position->getCorde(),
                        'poidmont' => $position->getPoidmont(),
                        'ecart' => $position->getEcar(),
                        'dist' => $position->getDist(),
                        'redkm' => $position->getRedkm(),
                        'tempstot' => $position->getTempstot(),
                        'txreclam' => $position->getTxreclam(),
                        'musiqueche' => $position->getMusiqueche(),
                        'cc' => $position->getNumcourse(),
                        'cg' => $position->getVictoirescheval(),
                        'cp' => $position->getPlacescheval(),
                        'pourccgh' => $position->getPourcvictchevalhippo(),
                        'pourccph' => $position->getPourcplacechevalhippo(),
                        'cch' => $position->getNbrcoursechevalhippo(),
                        'gc' => $position->getGainscarriere(),
                        'gv' => $position->getGainsvictoires(),
                        'gp' => $position->getGainsplace(),
                        'ga' => $position->getGainsanneeencours(),
                        'gap' => $position->getGainsanneeprecedente(),
                        'jp' => $position->getJumentpleine(),
                        'in' => $position->getIndicateurinedit(),
                        'rg' => $position->getRecordgint(),
                        'hd' => $position->getHandicapdistance(),
                        'hp' => $position->getHandicappoids(),
                        'pere' => $position->getPere(),
                        'mere' => $position->getMere(),
                        'jc' => $position->getCoursesjockey(),
                        'jv' => $position->getVictoiresjockey(),
                        'jp' => $position->getPlacejockey(),
                        'pourcjg' => $position->getPourcvictjock(),
                        'pourcjp' => $position->getPourcplacejock(),
                        'pourcjgh' => $position->getPourcvictjockhippo(),
                        'pourcjph' => $position->getPourcplacejockhippo(),
                        'jch' => $position->getNbrcoursejockhippo(),
                        'jmj' => $position->getMontesdujockeyjour(),
                        'jcj' => $position->getCouruejockeyjour(),
                        'jvj' => $position->getVictoirejockeyjour(),
                        'jmusique' => $position->getMusiquejoc(),
                        'ncc' => $position->getNbcoursecouple(),
                        'txvc' => $position->getTxvictcouple(),
                        'txpc' => $position->getTxplacecouple(),
                        'nvc' => $position->getNbvictcouple(),
                        'npc' => $position->getNbplacecouple(),
                        'ncch' => $position->getNbcoursecouplehippo(),
                        'txvch' => $position->getTxvictcouplehippo(),
                        'txpch' => $position->getTxplacecouplehippo(),
                        'nvch' => $position->getNbvictcouplehippo(),
                        'npch' => $position->getNbplacecouplehippo(),
                        'ecc' => $position->getCoursesentraineur(),
                        'ev' => $position->getVictoiresentraineur(),
                        'ep' => $position->getPlaceentraineur(),
                        'txevh' => $position->getPourcvictenthippo(),
                        'txeph' => $position->getPourcplaceenthippo(),
                        'ech' => $position->getNbrcourseenthippo(),
                        'emj' => $position->getMonteentraineurjour(),
                        'ecj' => $position->getCourueentraineurjour(),
                        'evj' => $position->getVictoireentraineurjour(),
                        'emusique' => $position->getMusiqueent()
                    )
                );
            }
            $response->setStatusCode(200);
            $response->setContent(json_encode($cl));

        }catch(\Exception $e)
        {

            echo $e->getTraceAsString();
            $response->setStatusCode(500);
            $response->setContent(json_encode(array('message' => $e->getMessage())));
        }
        return $response;
    }
}
