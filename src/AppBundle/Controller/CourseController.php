<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Caractrap;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
        $clCourse = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Cachedate')
            ->clByCourse($reunion->getId());

        return $this->render("AppBundle:Course:course.html.twig", array(
            'course' => $reunion,
            'clCourse' => $clCourse
        ));
    }
}
