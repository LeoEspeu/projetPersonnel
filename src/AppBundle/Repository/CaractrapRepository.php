<?php


namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class CaractrapRepository extends EntityRepository
{
    /**
     * @param $jour
     * @return int|mixed|string
     */
    public function reunByJour($jour)
    {
        $reuns = $this->createQueryBuilder('c')
            ->addSelect('c')
            ->where('c.jour = :j')
            ->orderBy('c.reun,c.heure')
            ->setParameter('j',$jour);
        return $reuns->getQuery()->getResult();
    }
}