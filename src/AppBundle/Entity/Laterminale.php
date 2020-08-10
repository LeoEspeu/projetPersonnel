<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Laterminale
 *
 * @ORM\Table(name="laterminale")
 * @ORM\Entity
 */
class Laterminale
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
     * @ORM\Column(name="a1", type="integer", nullable=true)
     */
    private $a1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="a2", type="integer", nullable=true)
     */
    private $a2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="a3", type="integer", nullable=true)
     */
    private $a3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="a4", type="integer", nullable=true)
     */
    private $a4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="a5", type="integer", nullable=true)
     */
    private $a5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="a6", type="integer", nullable=true)
     */
    private $a6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="a7", type="integer", nullable=true)
     */
    private $a7;

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

    /**
     * @var bool|null
     *
     * @ORM\Column(name="stat", type="boolean", nullable=true)
     */
    private $stat = '0';


}
