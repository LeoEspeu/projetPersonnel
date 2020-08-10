<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Laprintaniere
 *
 * @ORM\Table(name="LaPrintaniere")
 * @ORM\Entity
 */
class Laprintaniere
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
     * @var int
     *
     * @ORM\Column(name="b1", type="integer", nullable=false)
     */
    private $b1;

    /**
     * @var int
     *
     * @ORM\Column(name="b2", type="integer", nullable=false)
     */
    private $b2;

    /**
     * @var int
     *
     * @ORM\Column(name="b3", type="integer", nullable=false)
     */
    private $b3;

    /**
     * @var int
     *
     * @ORM\Column(name="s1", type="integer", nullable=false)
     */
    private $s1;

    /**
     * @var int
     *
     * @ORM\Column(name="s2", type="integer", nullable=false)
     */
    private $s2;

    /**
     * @var int
     *
     * @ORM\Column(name="s3", type="integer", nullable=false)
     */
    private $s3;

    /**
     * @var int
     *
     * @ORM\Column(name="s4", type="integer", nullable=false)
     */
    private $s4;

    /**
     * @var int
     *
     * @ORM\Column(name="o1", type="integer", nullable=false)
     */
    private $o1;

    /**
     * @var int
     *
     * @ORM\Column(name="o2", type="integer", nullable=false)
     */
    private $o2;

    /**
     * @var int
     *
     * @ORM\Column(name="o3", type="integer", nullable=false)
     */
    private $o3;

    /**
     * @var int
     *
     * @ORM\Column(name="o4", type="integer", nullable=false)
     */
    private $o4;

    /**
     * @var int
     *
     * @ORM\Column(name="o5", type="integer", nullable=false)
     */
    private $o5;

    /**
     * @var int
     *
     * @ORM\Column(name="o6", type="integer", nullable=false)
     */
    private $o6;

    /**
     * @var int
     *
     * @ORM\Column(name="o7", type="integer", nullable=false)
     */
    private $o7;

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
    private $stat;


}
