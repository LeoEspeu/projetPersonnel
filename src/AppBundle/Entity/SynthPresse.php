<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SynthPresse
 *
 * @ORM\Table(name="synth_presse", indexes={@ORM\Index(name="date_course", columns={"date_course", "numcourse", "pos_presse"})})
 * @ORM\Entity
 */
class SynthPresse
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_course", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dateCourse;

    /**
     * @var int
     *
     * @ORM\Column(name="pos_presse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $posPresse;

    /**
     * @var int
     *
     * @ORM\Column(name="numcourse", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcourse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hippo", type="string", length=30, nullable=true)
     */
    private $hippo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_course", type="string", length=100, nullable=true)
     */
    private $nomCourse;

    /**
     * @var int
     *
     * @ORM\Column(name="num_cheval", type="integer", nullable=false)
     */
    private $numCheval;

    /**
     * @var string|null
     *
     * @ORM\Column(name="place", type="string", length=3, nullable=true)
     */
    private $place;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cote", type="integer", nullable=true)
     */
    private $cote;


}
