<?php


namespace AppBundle\Manager;


use AppBundle\Entity\Cachedate;
use AppBundle\Entity\Caractrap;
use AppBundle\Entity\SynthPresse;
use Doctrine\ORM\EntityManagerInterface;

class SynthPresseManager
{
    /**
     *
     * @var EntityManager $em
     */
    private $em;

    /**
     * @var CourseManager
     */
    private $cm;

    /**
     * CourseManager constructor.
     * @param EntityManagerInterface $em
     * @param CourseManager $cm
     */
    public function __construct(CourseManager $cm,EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->cm = $cm;
    }

    public function storeSynthPresse($jour)
    {
        $quinte = $this->em->getRepository('AppBundle:Caractrap')->getQuinteByJour($jour);
        if(count($quinte)){
            $synthPresses = $this->em->getRepository('AppBundle:SynthPresse')->synthByJour($jour);
            $quinte = $quinte[0];
            $numQuinte = $quinte->getComp();
            $clQuinte = $this->cm->clCourseOrdonnee($numQuinte);
            if(count($synthPresses))
            {
                if(!$synthPresses[0]->getPlace() && $clQuinte[0]->getCl()){
                    foreach ($synthPresses as $synth) {
                        foreach ($clQuinte as $key => $cl) {
                            if(intval($cl->getNumero()) == $synth->getNumCheval() && !$synth->getPlace())
                            {
                                $synth->setPlace(preg_match('~[0-9]~', $cl->getCl()) ? $key + 1 : null);
                            }
                        }
                    }
                    $this->em->flush();
                }
                return $synthPresses;
            }

            foreach ($clQuinte as $key => $cl) {
                $synth = new SynthPresse();
                $synth->setDateCourse($jour);
                $synth->setHippo($cl->getHippo());
                $synth->setNomCourse($quinte->getPrixnom());
                $synth->setNumCheval(intval($cl->getNumero()));
                $synth->setNumcourse(intval($cl->getNumcourse()));
                //$synth->setPosPresse($key + 1);
                $synth->setPlace(preg_match('~[0-9]~', $cl->getCl()) ? $key + 1 : null);


                $this->em->persist($synth);
            }
            $this->em->flush();
        }

        return $this->em->getRepository('AppBundle:SynthPresse')->synthByJour($jour);
    }

}