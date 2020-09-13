<?php


namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class CachedateRepository extends EntityRepository
{

    /**
     * @param $idCourse
     * @return int|mixed|string
     */
    public function clByCourse($idCourse)
    {
        $course = $this->createQueryBuilder('c')
            ->addSelect('c')
            ->where('c.numcourse = :n')
            ->orderBy("c.tempstot,c.cl")
            ->setParameter('n',$idCourse);
        return $course->getQuery()->getResult();
    }

    public function infoCheval($idCheval)
    {
        $cheval = $this->createQueryBuilder('i')
            ->addSelect('i')
            ->where('i.idche = :c')
            ->orderBy("i.id", 'DESC')
            ->setParameter('c',$idCheval)
            ->setMaxResults(1);
        return $cheval->getQuery()->getResult();
    }

    public function reussiteParJockey($idCheval)
    {
        $chevalJockey = $this->createQueryBuilder('i')
            ->addSelect('i.jockey')
            ->addSelect('i.coursesjockey')
            ->addSelect('i.victoiresjockey')
            ->addSelect('i.placejockey')
            ->addSelect('i.victoiresjockey / i.coursesjockey * 100')
            ->addSelect('i.placejockey / i.coursesjockey * 100')
            ->where('i.idche = :c')
            ->orderBy("i.id", 'DESC')
            ->setParameter('c', $idCheval);
        return $chevalJockey->getQuery()->getResult();
    }

}