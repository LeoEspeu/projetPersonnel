<?php


namespace AppBundle\Manager;

use Doctrine\ORM\EntityManagerInterface;

class CourseManager
{
    /**
     *
     * @var EntityManager $em
     */
    private $em;

    /**
     * CourseManager constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function clCourseOrdonnee($numCourse){
        $clCourse = $this->em->getRepository('AppBundle:Cachedate')
            ->clByCourse($numCourse);

        if(count($clCourse) == 0 || $clCourse[0]->getCl() == '' || $clCourse[0]->getCl() == '1er') {
            return $clCourse;
        }
        else{
            $addEnd = true;
            $addStart = false;
            $clCourseOrdEnd = array();
            $clCourseOrdStart = array();
            foreach ($clCourse as $index => $cl) {
                if($cl->getCl() == '1er'){
                    $addEnd = false;
                    $addStart = true;
                }
                if($addEnd){
                    $clCourseOrdEnd[$index] = $cl;
                }
                if($addStart){
                    $clCourseOrdStart[$index] = $cl;
                }
                if($cl->getCl() == '9e'){
                    $addEnd = true;
                    $addStart = false;
                }
            }
            $clCourse = array_merge($clCourseOrdStart,$clCourseOrdEnd);
        }
        return $clCourse;
    }
}