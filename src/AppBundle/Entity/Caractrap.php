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
     * @var Hippo
     *
     * @ORM\ManyToOne (targetEntity="AppBundle\Entity\Hippo")
     * @ORM\JoinColumn(name="hippo", nullable=true,referencedColumnName="hippo")
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



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set comp.
     *
     * @param int $comp
     *
     * @return Caractrap
     */
    public function setComp($comp)
    {
        $this->comp = $comp;

        return $this;
    }

    /**
     * Get comp.
     *
     * @return int
     */
    public function getComp()
    {
        return $this->comp;
    }

    /**
     * Set jour.
     *
     * @param string|null $jour
     *
     * @return Caractrap
     */
    public function setJour($jour = null)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour.
     *
     * @return string|null
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set heure.
     *
     * @param \DateTime|null $heure
     *
     * @return Caractrap
     */
    public function setHeure($heure = null)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure.
     *
     * @return \DateTime|null
     */
    public function getHeure()
    {
        return $this->heure;
    }


    /**
     * Set reun.
     *
     * @param string|null $reun
     *
     * @return Caractrap
     */
    public function setReun($reun = null)
    {
        $this->reun = $reun;

        return $this;
    }

    /**
     * Get reun.
     *
     * @return string|null
     */
    public function getReun()
    {
        return $this->reun;
    }

    /**
     * Set prix.
     *
     * @param float|null $prix
     *
     * @return Caractrap
     */
    public function setPrix($prix = null)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix.
     *
     * @return float|null
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set prixnom.
     *
     * @param string|null $prixnom
     *
     * @return Caractrap
     */
    public function setPrixnom($prixnom = null)
    {
        $this->prixnom = $prixnom;

        return $this;
    }

    /**
     * Get prixnom.
     *
     * @return string|null
     */
    public function getPrixnom()
    {
        return $this->prixnom;
    }

    /**
     * Set meteo.
     *
     * @param string|null $meteo
     *
     * @return Caractrap
     */
    public function setMeteo($meteo = null)
    {
        $this->meteo = $meteo;

        return $this;
    }

    /**
     * Get meteo.
     *
     * @return string|null
     */
    public function getMeteo()
    {
        return $this->meteo;
    }

    /**
     * Set typec.
     *
     * @param string|null $typec
     *
     * @return Caractrap
     */
    public function setTypec($typec = null)
    {
        $this->typec = $typec;

        return $this;
    }

    /**
     * Get typec.
     *
     * @return string|null
     */
    public function getTypec()
    {
        return $this->typec;
    }

    /**
     * Set partant.
     *
     * @param string|null $partant
     *
     * @return Caractrap
     */
    public function setPartant($partant = null)
    {
        $this->partant = $partant;

        return $this;
    }

    /**
     * Get partant.
     *
     * @return string|null
     */
    public function getPartant()
    {
        return $this->partant;
    }

    /**
     * Set handi.
     *
     * @param string|null $handi
     *
     * @return Caractrap
     */
    public function setHandi($handi = null)
    {
        $this->handi = $handi;

        return $this;
    }

    /**
     * Get handi.
     *
     * @return string|null
     */
    public function getHandi()
    {
        return $this->handi;
    }

    /**
     * Set reclam.
     *
     * @param string|null $reclam
     *
     * @return Caractrap
     */
    public function setReclam($reclam = null)
    {
        $this->reclam = $reclam;

        return $this;
    }

    /**
     * Get reclam.
     *
     * @return string|null
     */
    public function getReclam()
    {
        return $this->reclam;
    }

    /**
     * Set dist.
     *
     * @param string|null $dist
     *
     * @return Caractrap
     */
    public function setDist($dist = null)
    {
        $this->dist = $dist;

        return $this;
    }

    /**
     * Get dist.
     *
     * @return string|null
     */
    public function getDist()
    {
        return $this->dist;
    }

    /**
     * Set groupe.
     *
     * @param string|null $groupe
     *
     * @return Caractrap
     */
    public function setGroupe($groupe = null)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe.
     *
     * @return string|null
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set sex.
     *
     * @param string|null $sex
     *
     * @return Caractrap
     */
    public function setSex($sex = null)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex.
     *
     * @return string|null
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set corde.
     *
     * @param string|null $corde
     *
     * @return Caractrap
     */
    public function setCorde($corde = null)
    {
        $this->corde = $corde;

        return $this;
    }

    /**
     * Get corde.
     *
     * @return string|null
     */
    public function getCorde()
    {
        return $this->corde;
    }

    /**
     * Set age.
     *
     * @param string|null $age
     *
     * @return Caractrap
     */
    public function setAge($age = null)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age.
     *
     * @return string|null
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set autos.
     *
     * @param string|null $autos
     *
     * @return Caractrap
     */
    public function setAutos($autos = null)
    {
        $this->autos = $autos;

        return $this;
    }

    /**
     * Get autos.
     *
     * @return string|null
     */
    public function getAutos()
    {
        return $this->autos;
    }

    /**
     * Set cheque.
     *
     * @param string|null $cheque
     *
     * @return Caractrap
     */
    public function setCheque($cheque = null)
    {
        $this->cheque = $cheque;

        return $this;
    }

    /**
     * Get cheque.
     *
     * @return string|null
     */
    public function getCheque()
    {
        return $this->cheque;
    }

    /**
     * Set europ.
     *
     * @param string|null $europ
     *
     * @return Caractrap
     */
    public function setEurop($europ = null)
    {
        $this->europ = $europ;

        return $this;
    }

    /**
     * Get europ.
     *
     * @return string|null
     */
    public function getEurop()
    {
        return $this->europ;
    }

    /**
     * Set quinte.
     *
     * @param float|null $quinte
     *
     * @return Caractrap
     */
    public function setQuinte($quinte = null)
    {
        $this->quinte = $quinte;

        return $this;
    }

    /**
     * Get quinte.
     *
     * @return float|null
     */
    public function getQuinte()
    {
        return $this->quinte;
    }

    /**
     * Set natpis.
     *
     * @param string|null $natpis
     *
     * @return Caractrap
     */
    public function setNatpis($natpis = null)
    {
        $this->natpis = $natpis;

        return $this;
    }

    /**
     * Get natpis.
     *
     * @return string|null
     */
    public function getNatpis()
    {
        return $this->natpis;
    }

    /**
     * Set amat.
     *
     * @param string|null $amat
     *
     * @return Caractrap
     */
    public function setAmat($amat = null)
    {
        $this->amat = $amat;

        return $this;
    }

    /**
     * Get amat.
     *
     * @return string|null
     */
    public function getAmat()
    {
        return $this->amat;
    }

    /**
     * Set courseabc.
     *
     * @param string|null $courseabc
     *
     * @return Caractrap
     */
    public function setCourseabc($courseabc = null)
    {
        $this->courseabc = $courseabc;

        return $this;
    }

    /**
     * Get courseabc.
     *
     * @return string|null
     */
    public function getCourseabc()
    {
        return $this->courseabc;
    }

    /**
     * Set pistegp.
     *
     * @param string|null $pistegp
     *
     * @return Caractrap
     */
    public function setPistegp($pistegp = null)
    {
        $this->pistegp = $pistegp;

        return $this;
    }

    /**
     * Get pistegp.
     *
     * @return string|null
     */
    public function getPistegp()
    {
        return $this->pistegp;
    }

    /**
     * Set arriv.
     *
     * @param string|null $arriv
     *
     * @return Caractrap
     */
    public function setArriv($arriv = null)
    {
        $this->arriv = $arriv;

        return $this;
    }

    /**
     * Get arriv.
     *
     * @return string|null
     */
    public function getArriv()
    {
        return $this->arriv;
    }

    /**
     * Set lice.
     *
     * @param string|null $lice
     *
     * @return Caractrap
     */
    public function setLice($lice = null)
    {
        $this->lice = $lice;

        return $this;
    }

    /**
     * Get lice.
     *
     * @return string|null
     */
    public function getLice()
    {
        return $this->lice;
    }

    /**
     * Set temperature.
     *
     * @param int|null $temperature
     *
     * @return Caractrap
     */
    public function setTemperature($temperature = null)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature.
     *
     * @return int|null
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set forcevent.
     *
     * @param int|null $forcevent
     *
     * @return Caractrap
     */
    public function setForcevent($forcevent = null)
    {
        $this->forcevent = $forcevent;

        return $this;
    }

    /**
     * Get forcevent.
     *
     * @return int|null
     */
    public function getForcevent()
    {
        return $this->forcevent;
    }

    /**
     * Set directionvent.
     *
     * @param string $directionvent
     *
     * @return Caractrap
     */
    public function setDirectionvent($directionvent)
    {
        $this->directionvent = $directionvent;

        return $this;
    }

    /**
     * Get directionvent.
     *
     * @return string
     */
    public function getDirectionvent()
    {
        return $this->directionvent;
    }

    /**
     * Set nebulositelibellecourt.
     *
     * @param string $nebulositelibellecourt
     *
     * @return Caractrap
     */
    public function setNebulositelibellecourt($nebulositelibellecourt)
    {
        $this->nebulositelibellecourt = $nebulositelibellecourt;

        return $this;
    }

    /**
     * Get nebulositelibellecourt.
     *
     * @return string
     */
    public function getNebulositelibellecourt()
    {
        return $this->nebulositelibellecourt;
    }

    /**
     * Set condi.
     *
     * @param string|null $condi
     *
     * @return Caractrap
     */
    public function setCondi($condi = null)
    {
        $this->condi = $condi;

        return $this;
    }

    /**
     * Get condi.
     *
     * @return string|null
     */
    public function getCondi()
    {
        return $this->condi;
    }

    /**
     * Set url.
     *
     * @param string $url
     *
     * @return Caractrap
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set tempscourse.
     *
     * @param string $tempscourse
     *
     * @return Caractrap
     */
    public function setTempscourse($tempscourse)
    {
        $this->tempscourse = $tempscourse;

        return $this;
    }

    /**
     * Get tempscourse.
     *
     * @return string
     */
    public function getTempscourse()
    {
        return $this->tempscourse;
    }

    /**
     * Set updatedat.
     *
     * @param \DateTime|null $updatedat
     *
     * @return Caractrap
     */
    public function setUpdatedat($updatedat = null)
    {
        $this->updatedat = $updatedat;

        return $this;
    }

    /**
     * Get updatedat.
     *
     * @return \DateTime|null
     */
    public function getUpdatedat()
    {
        return $this->updatedat;
    }

    /**
     * Set createdat.
     *
     * @param \DateTime|null $createdat
     *
     * @return Caractrap
     */
    public function setCreatedat($createdat = null)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat.
     *
     * @return \DateTime|null
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * Set hippo.
     *
     * @param \AppBundle\Entity\Hippo|null $hippo
     *
     * @return Caractrap
     */
    public function setHippo(\AppBundle\Entity\Hippo $hippo = null)
    {
        $this->hippo = $hippo;

        return $this;
    }

    /**
     * Get hippo.
     *
     * @return \AppBundle\Entity\Hippo|null
     */
    public function getHippo()
    {
        return $this->hippo;
    }
}
