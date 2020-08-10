<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infospmu
 *
 * @ORM\Table(name="InfosPmu")
 * @ORM\Entity
 */
class Infospmu
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="id", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="reunion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $reunion;

    /**
     * @var int
     *
     * @ORM\Column(name="course", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $course;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="daterecup", type="date", nullable=true)
     */
    private $daterecup;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="insere", type="boolean", nullable=true)
     */
    private $insere;


}
