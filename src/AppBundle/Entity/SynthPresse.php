<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SynthPresse
 *
 * @ORM\Table(name="synth_presse", indexes={@ORM\Index(name="date_course", columns={"date_course", "numcourse", "pos_presse"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SynthPresseRepository")
 */
class SynthPresse
{
    /**
     * @var String
     *
     * @ORM\Column(name="date_course", type="string", nullable=false)
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
     * @Assert\Range(min=1)
     */
    private $cote;



    /**
     * Set dateCourse.
     *
     * @param \DateTime $dateCourse
     *
     * @return SynthPresse
     */
    public function setDateCourse($dateCourse)
    {
        $this->dateCourse = $dateCourse;

        return $this;
    }

    /**
     * Get dateCourse.
     *
     * @return \DateTime
     */
    public function getDateCourse()
    {
        return $this->dateCourse;
    }

    /**
     * Set posPresse.
     *
     * @param int $posPresse
     *
     * @return SynthPresse
     */
    public function setPosPresse($posPresse)
    {
        $this->posPresse = $posPresse;

        return $this;
    }

    /**
     * Get posPresse.
     *
     * @return int
     */
    public function getPosPresse()
    {
        return $this->posPresse;
    }

    /**
     * Set numcourse.
     *
     * @param int $numcourse
     *
     * @return SynthPresse
     */
    public function setNumcourse($numcourse)
    {
        $this->numcourse = $numcourse;

        return $this;
    }

    /**
     * Get numcourse.
     *
     * @return int
     */
    public function getNumcourse()
    {
        return $this->numcourse;
    }

    /**
     * Set hippo.
     *
     * @param string|null $hippo
     *
     * @return SynthPresse
     */
    public function setHippo($hippo = null)
    {
        $this->hippo = $hippo;

        return $this;
    }

    /**
     * Get hippo.
     *
     * @return string|null
     */
    public function getHippo()
    {
        return $this->hippo;
    }

    /**
     * Set nomCourse.
     *
     * @param string|null $nomCourse
     *
     * @return SynthPresse
     */
    public function setNomCourse($nomCourse = null)
    {
        $this->nomCourse = $nomCourse;

        return $this;
    }

    /**
     * Get nomCourse.
     *
     * @return string|null
     */
    public function getNomCourse()
    {
        return $this->nomCourse;
    }

    /**
     * Set numCheval.
     *
     * @param int $numCheval
     *
     * @return SynthPresse
     */
    public function setNumCheval($numCheval)
    {
        $this->numCheval = $numCheval;

        return $this;
    }

    /**
     * Get numCheval.
     *
     * @return int
     */
    public function getNumCheval()
    {
        return $this->numCheval;
    }

    /**
     * Set place.
     *
     * @param string|null $place
     *
     * @return SynthPresse
     */
    public function setPlace($place = null)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place.
     *
     * @return string|null
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set cote.
     *
     * @param int|null $cote
     *
     * @return SynthPresse
     */
    public function setCote($cote = null)
    {
        $this->cote = $cote;

        return $this;
    }

    /**
     * Get cote.
     *
     * @return int|null
     */
    public function getCote()
    {
        return $this->cote;
    }
}
