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
            ->orderBy('c.cl,c.numero')
            ->setParameter('n',$idCourse);
        return $course->getQuery()->getResult();
    }
}