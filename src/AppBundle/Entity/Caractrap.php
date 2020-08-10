<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caractrap
 *
 * @ORM\Table(name="caractrap", indexes={@ORM\Index(name="comp", columns={"comp"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CaractrapRepository")
 */
class Caractrap
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="comp", type="integer", nullable=false)
     */
    private $comp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="jour", type="string", length=255, nullable=true)
     */
    private $jour;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure", type="time", nullable=true)
     */
    private $heure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hippo", type="string", length=255, nullable=true)
     */
    private $hippo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reun", type="string", length=255, nullable=true)
     */
    private $reun;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=true)
     */
    private $prix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prixnom", type="string", length=255, nullable=true)
     */
    private $prixnom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="meteo", type="string", length=255, nullable=true)
     */
    private $meteo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="typec", type="string", length=255, nullable=true)
     */
    private $typec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partant", type="string", length=255, nullable=true)
     */
    private $partant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="handi", type="string", length=255, nullable=true)
     */
    private $handi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reclam", type="string", length=255, nullable=true)
     */
    private $reclam;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dist", type="string", length=255, nullable=true)
     */
    private $dist;

    /**
     * @var string|null
     *
     * @ORM\Column(name="groupe", type="string", length=255, nullable=true)
     */
    private $groupe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sex", type="string", length=255, nullable=true)
     */
    private $sex;

    /**
     * @var string|null
     *
     * @ORM\Column(name="corde", type="string", length=255, nullable=true)
     */
    private $corde;

    /**
     * @var string|null
     *
     * @ORM\Column(name="age", type="string", length=255, nullable=true)
     */
    private $age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="autos", type="string", length=255, nullable=true)
     */
    private $autos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cheque", type="string", length=255, nullable=true)
     */
    private $cheque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="europ", type="string", length=255, nullable=true)
     */
    private $europ;

    /**
     * @var float|null
     *
     * @ORM\Column(name="quinte", type="float", precision=10, scale=0, nullable=true)
     */
    private $quinte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="natpis", type="string", length=255, nullable=true)
     */
    private $natpis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amat", type="string", length=255, nullable=true)
     */
    private $amat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="courseabc", type="string", length=255, nullable=true)
     */
    private $courseabc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pistegp", type="string", length=255, nullable=true)
     */
    private $pistegp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="arriv", type="string", length=255, nullable=true)
     */
    private $arriv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lice", type="string", length=255, nullable=true)
     */
    private $lice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="temperature", type="integer", nullable=true)
     */
    private $temperature;

    /**
     * @var int|null
     *
     * @ORM\Column(name="forceVent", type="integer", nullable=true)
     */
    private $forcevent;

    /**
     * @var string
     *
     * @ORM\Column(name="directionVent", type="string", length=6, nullable=false)
     */
    private $directionvent;

    /**
     * @var string
     *
     * @ORM\Column(name="nebulositeLibelleCourt", type="text", length=16777215, nullable=false)
     */
    private $nebulositelibellecourt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condi", type="string", length=255, nullable=true)
     */
    private $condi;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", length=16777215, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="tempscourse", type="text", length=16777215, nullable=false)
     */
    private $tempscourse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=true)
     */
    private $updatedat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdat = 'CURRENT_TIMESTAMP';


}
