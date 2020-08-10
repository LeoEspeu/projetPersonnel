<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gainslaterminale
 *
 * @ORM\Table(name="GainsLaTerminale")
 * @ORM\Entity
 */
class Gainslaterminale
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="jour", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $jour;

    /**
     * @var int
     *
     * @ORM\Column(name="comp", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $comp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="joue", type="integer", nullable=true)
     */
    private $joue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gains", type="integer", nullable=true)
     */
    private $gains;


}
