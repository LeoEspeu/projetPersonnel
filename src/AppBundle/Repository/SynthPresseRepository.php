<?php


namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class SynthPresseRepository extends EntityRepository
{
    /**
     * @param $jour
     * @return int|mixed|string
     */
    public function synthByJour($jour)
    {
        $synth = $this->createQueryBuilder('s')
            ->addSelect('s')
            ->where('s.dateCourse = :j')
            ->setParameter('j',$jour);
        return $synth->getQuery()->getResult();
    }
}