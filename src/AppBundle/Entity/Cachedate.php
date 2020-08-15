<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cachedate
 *
 * @ORM\Table(name="cachedate", indexes={@ORM\Index(name="chejour", columns={"cheval", "jour"}), @ORM\Index(name="numcourse", columns={"numcourse"}), @ORM\Index(name="comp", columns={"comp"}), @ORM\Index(name="jocjou", columns={"jockey", "jour"}), @ORM\Index(name="cheval", columns={"cheval"}), @ORM\Index(name="jour", columns={"jour"}), @ORM\Index(name="entjou", columns={"entraineur", "jour"}), @ORM\Index(name="propjour", columns={"proprietaire", "jour"}), @ORM\Index(name="dist", columns={"dist"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CachedateRepository")
 */
class Cachedate
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
     * @var \DateTime
     *
     * @ORM\Column(name="jour", type="date", nullable=false)
     */
    private $jour;

    /**
     * @var string
     *
     * @ORM\Column(name="hippo", type="text", length=255, nullable=false)
     */
    private $hippo;

    /**
     * @var int
     *
     * @ORM\Column(name="numcourse", type="bigint", nullable=false)
     */
    private $numcourse;

    /**
     * @var string
     *
     * @ORM\Column(name="cl", type="text", length=255, nullable=false)
     */
    private $cl;

    /**
     * @var int
     *
     * @ORM\Column(name="dist", type="smallint", nullable=false)
     */
    private $dist;

    /**
     * @var int
     *
     * @ORM\Column(name="partant", type="integer", nullable=false)
     */
    private $partant;

    /**
     * @var string
     *
     * @ORM\Column(name="typec", type="string", length=0, nullable=false)
     */
    private $typec;

    /**
     * @var string
     *
     * @ORM\Column(name="cheque", type="string", length=25, nullable=false)
     */
    private $cheque;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="cheval", type="string", length=255, nullable=false)
     */
    private $cheval;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="text", length=65535, nullable=false)
     */
    private $sexe;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="cotedirect", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $cotedirect;

    /**
     * @var string
     *
     * @ORM\Column(name="coteprob", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $coteprob;

    /**
     * @var int
     *
     * @ORM\Column(name="recence", type="integer", nullable=false)
     */
    private $recence;

    /**
     * @var string
     *
     * @ORM\Column(name="ecurie", type="string", length=0, nullable=false)
     */
    private $ecurie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="distpoids", type="text", length=65535, nullable=true)
     */
    private $distpoids;

    /**
     * @var string
     *
     * @ORM\Column(name="ecar", type="string", length=15, nullable=false)
     */
    private $ecar;

    /**
     * @var string
     *
     * @ORM\Column(name="redkm", type="string", length=15, nullable=false)
     */
    private $redkm;

    /**
     * @var int
     *
     * @ORM\Column(name="redkmInt", type="integer", nullable=false)
     */
    private $redkmint;

    /**
     * @var string
     *
     * @ORM\Column(name="handiecords", type="text", length=65535, nullable=false)
     */
    private $handiecords;

    /**
     * @var string
     *
     * @ORM\Column(name="corde", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $corde;

    /**
     * @var string
     *
     * @ORM\Column(name="defoeil", type="string", length=10, nullable=false)
     */
    private $defoeil;

    /**
     * @var string
     *
     * @ORM\Column(name="defoeilPrec", type="string", length=10, nullable=false)
     */
    private $defoeilprec;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="recul", type="boolean", nullable=true)
     */
    private $recul;

    /**
     * @var string
     *
     * @ORM\Column(name="gains", type="string", length=14, nullable=false)
     */
    private $gains;

    /**
     * @var string
     *
     * @ORM\Column(name="musiquept", type="string", length=24, nullable=false)
     */
    private $musiquept;

    /**
     * @var string
     *
     * @ORM\Column(name="musiqueche", type="text", length=65535, nullable=false)
     */
    private $musiqueche;

    /**
     * @var int|null
     *
     * @ORM\Column(name="m1", type="integer", nullable=true)
     */
    private $m1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="m2", type="integer", nullable=true)
     */
    private $m2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="m3", type="integer", nullable=true)
     */
    private $m3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="m4", type="integer", nullable=true)
     */
    private $m4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="m5", type="integer", nullable=true)
     */
    private $m5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="m6", type="integer", nullable=true)
     */
    private $m6;

    /**
     * @var string
     *
     * @ORM\Column(name="jockey", type="string", length=33, nullable=false)
     */
    private $jockey;

    /**
     * @var string
     *
     * @ORM\Column(name="musiquejoc", type="text", length=65535, nullable=false)
     */
    private $musiquejoc;

    /**
     * @var string
     *
     * @ORM\Column(name="montesdujockeyjour", type="string", length=2, nullable=false)
     */
    private $montesdujockeyjour;

    /**
     * @var string
     *
     * @ORM\Column(name="couruejockeyjour", type="string", length=2, nullable=false)
     */
    private $couruejockeyjour;

    /**
     * @var string
     *
     * @ORM\Column(name="victoirejockeyjour", type="string", length=2, nullable=false)
     */
    private $victoirejockeyjour;

    /**
     * @var string
     *
     * @ORM\Column(name="entraineur", type="string", length=33, nullable=false)
     */
    private $entraineur;

    /**
     * @var string
     *
     * @ORM\Column(name="musiqueent", type="text", length=65535, nullable=false)
     */
    private $musiqueent;

    /**
     * @var int
     *
     * @ORM\Column(name="monteentraineurjour", type="smallint", nullable=false)
     */
    private $monteentraineurjour;

    /**
     * @var int
     *
     * @ORM\Column(name="courueentraineurjour", type="smallint", nullable=false)
     */
    private $courueentraineurjour;

    /**
     * @var int
     *
     * @ORM\Column(name="victoireentraineurjour", type="smallint", nullable=false)
     */
    private $victoireentraineurjour;

    /**
     * @var int
     *
     * @ORM\Column(name="coursescheval", type="smallint", nullable=false)
     */
    private $coursescheval;

    /**
     * @var int
     *
     * @ORM\Column(name="victoirescheval", type="smallint", nullable=false)
     */
    private $victoirescheval;

    /**
     * @var int
     *
     * @ORM\Column(name="placescheval", type="smallint", nullable=false)
     */
    private $placescheval;

    /**
     * @var int
     *
     * @ORM\Column(name="coursesentraineur", type="smallint", nullable=false)
     */
    private $coursesentraineur;

    /**
     * @var int
     *
     * @ORM\Column(name="victoiresentraineur", type="smallint", nullable=false)
     */
    private $victoiresentraineur;

    /**
     * @var int
     *
     * @ORM\Column(name="placeentraineur", type="smallint", nullable=false)
     */
    private $placeentraineur;

    /**
     * @var int
     *
     * @ORM\Column(name="coursesjockey", type="smallint", nullable=false)
     */
    private $coursesjockey;

    /**
     * @var int
     *
     * @ORM\Column(name="victoiresjockey", type="smallint", nullable=false)
     */
    private $victoiresjockey;

    /**
     * @var int
     *
     * @ORM\Column(name="placejockey", type="smallint", nullable=false)
     */
    private $placejockey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dernierhippo", type="string", length=33, nullable=true)
     */
    private $dernierhippo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dernierealloc", type="string", length=13, nullable=true)
     */
    private $dernierealloc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="derniernbpartants", type="string", length=2, nullable=true)
     */
    private $derniernbpartants;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dernieredist", type="string", length=5, nullable=true)
     */
    private $dernieredist;

    /**
     * @var string|null
     *
     * @ORM\Column(name="derniereplace", type="string", length=10, nullable=true)
     */
    private $derniereplace;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dernierecote", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $dernierecote;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dernierJoc", type="string", length=33, nullable=true)
     */
    private $dernierjoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dernierEnt", type="string", length=33, nullable=true)
     */
    private $dernierent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dernierProp", type="string", length=41, nullable=true)
     */
    private $dernierprop;

    /**
     * @var string
     *
     * @ORM\Column(name="dernierRedKm", type="string", length=15, nullable=false)
     */
    private $dernierredkm;

    /**
     * @var string
     *
     * @ORM\Column(name="proprietaire", type="string", length=41, nullable=false)
     */
    private $proprietaire;

    /**
     * @var int
     *
     * @ORM\Column(name="nbcoursepropjour", type="integer", nullable=false)
     */
    private $nbcoursepropjour;

    /**
     * @var string
     *
     * @ORM\Column(name="poidmont", type="string", length=6, nullable=false)
     */
    private $poidmont;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcVictJock", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $pourcvictjock;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcPlaceJock", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $pourcplacejock;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcVictCheval", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $pourcvictcheval;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcPlaceCheval", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $pourcplacecheval;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcVictEnt", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $pourcvictent;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcPlaceEnt", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $pourcplaceent;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcVictEntHippo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $pourcvictenthippo;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcVictJockHippo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $pourcvictjockhippo;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcPlaceEntHippo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $pourcplaceenthippo;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcPlaceJockHippo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $pourcplacejockhippo;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcVictChevalHippo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $pourcvictchevalhippo;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcPlaceChevalHippo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $pourcplacechevalhippo;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrCourseJockHippo", type="smallint", nullable=false)
     */
    private $nbrcoursejockhippo;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrCourseEntHippo", type="smallint", nullable=false)
     */
    private $nbrcourseenthippo;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrCourseChevalHippo", type="smallint", nullable=false)
     */
    private $nbrcoursechevalhippo;

    /**
     * @var int
     *
     * @ORM\Column(name="nbCourseCouple", type="smallint", nullable=false)
     */
    private $nbcoursecouple;

    /**
     * @var int
     *
     * @ORM\Column(name="nbVictCouple", type="smallint", nullable=false)
     */
    private $nbvictcouple;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPlaceCouple", type="smallint", nullable=false)
     */
    private $nbplacecouple;

    /**
     * @var string
     *
     * @ORM\Column(name="TxVictCouple", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $txvictcouple;

    /**
     * @var string
     *
     * @ORM\Column(name="TxPlaceCouple", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $txplacecouple;

    /**
     * @var int
     *
     * @ORM\Column(name="nbCourseCoupleHippo", type="smallint", nullable=false)
     */
    private $nbcoursecouplehippo;

    /**
     * @var int
     *
     * @ORM\Column(name="nbVictCoupleHippo", type="smallint", nullable=false)
     */
    private $nbvictcouplehippo;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPlaceCoupleHippo", type="smallint", nullable=false)
     */
    private $nbplacecouplehippo;

    /**
     * @var string
     *
     * @ORM\Column(name="TxVictCoupleHippo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $txvictcouplehippo;

    /**
     * @var string
     *
     * @ORM\Column(name="TxPlaceCoupleHippo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $txplacecouplehippo;

    /**
     * @var string
     *
     * @ORM\Column(name="pere", type="string", length=25, nullable=false)
     */
    private $pere;

    /**
     * @var string
     *
     * @ORM\Column(name="mere", type="string", length=25, nullable=false)
     */
    private $mere;

    /**
     * @var string
     *
     * @ORM\Column(name="peremere", type="string", length=25, nullable=false)
     */
    private $peremere;

    /**
     * @var string
     *
     * @ORM\Column(name="commen", type="text", length=65535, nullable=false)
     */
    private $commen;

    /**
     * @var int
     *
     * @ORM\Column(name="gainsCarriere", type="integer", nullable=false)
     */
    private $gainscarriere;

    /**
     * @var int
     *
     * @ORM\Column(name="gainsVictoires", type="integer", nullable=false)
     */
    private $gainsvictoires;

    /**
     * @var int
     *
     * @ORM\Column(name="gainsPlace", type="integer", nullable=false)
     */
    private $gainsplace;

    /**
     * @var int
     *
     * @ORM\Column(name="gainsAnneeEnCours", type="integer", nullable=false)
     */
    private $gainsanneeencours;

    /**
     * @var int
     *
     * @ORM\Column(name="gainsAnneePrecedente", type="integer", nullable=false)
     */
    private $gainsanneeprecedente;

    /**
     * @var bool
     *
     * @ORM\Column(name="jumentPleine", type="boolean", nullable=false)
     */
    private $jumentpleine;

    /**
     * @var bool
     *
     * @ORM\Column(name="engagement", type="boolean", nullable=false)
     */
    private $engagement;

    /**
     * @var int
     *
     * @ORM\Column(name="handicapDistance", type="smallint", nullable=false)
     */
    private $handicapdistance;

    /**
     * @var int
     *
     * @ORM\Column(name="handicapPoids", type="smallint", nullable=false)
     */
    private $handicappoids;

    /**
     * @var bool
     *
     * @ORM\Column(name="indicateurInedit", type="boolean", nullable=false)
     */
    private $indicateurinedit;

    /**
     * @var string
     *
     * @ORM\Column(name="tempstot", type="string", length=7, nullable=false)
     */
    private $tempstot;

    /**
     * @var string
     *
     * @ORM\Column(name="vha", type="string", length=5, nullable=false)
     */
    private $vha;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recordG", type="string", length=8, nullable=true)
     */
    private $recordg;

    /**
     * @var int
     *
     * @ORM\Column(name="recordGint", type="integer", nullable=false)
     */
    private $recordgint;

    /**
     * @var string
     *
     * @ORM\Column(name="txreclam", type="string", length=5, nullable=false)
     */
    private $txreclam;

    /**
     * @var string
     *
     * @ORM\Column(name="dernierTxreclam", type="string", length=5, nullable=false)
     */
    private $derniertxreclam;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdat", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdat = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedat", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updatedat = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="rangTxVictJock", type="integer", nullable=false)
     */
    private $rangtxvictjock;

    /**
     * @var int
     *
     * @ORM\Column(name="rangTxVictCheval", type="integer", nullable=false)
     */
    private $rangtxvictcheval;

    /**
     * @var int
     *
     * @ORM\Column(name="rangTxVictEnt", type="integer", nullable=false)
     */
    private $rangtxvictent;

    /**
     * @var int
     *
     * @ORM\Column(name="rangTxPlaceJock", type="integer", nullable=false)
     */
    private $rangtxplacejock;

    /**
     * @var int
     *
     * @ORM\Column(name="rangTxPlaceCheval", type="integer", nullable=false)
     */
    private $rangtxplacecheval;

    /**
     * @var int
     *
     * @ORM\Column(name="rangTxPlaceEnt", type="integer", nullable=false)
     */
    private $rangtxplaceent;

    /**
     * @var int
     *
     * @ORM\Column(name="rangRecordG", type="integer", nullable=false)
     */
    private $rangrecordg;

    /**
     * @var int
     *
     * @ORM\Column(name="appetTerrain", type="smallint", nullable=false, options={"comment"="Return 0 si cheval jamais couru sur ce type de piste / Return 1 s'il a déjà fait dans les 4 premiers / Return 2 s'il a déjà couru mais n'est pas arrivé dans les 4 premiers / Return 10 si type de piste non trouvé"})
     */
    private $appetterrain;

    /**
     * @var int
     *
     * @ORM\Column(name="idChe", type="integer", nullable=false)
     */
    private $idche;



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
     * @return Cachedate
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
     * @param \DateTime $jour
     *
     * @return Cachedate
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour.
     *
     * @return \DateTime
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set hippo.
     *
     * @param string $hippo
     *
     * @return Cachedate
     */
    public function setHippo($hippo)
    {
        $this->hippo = $hippo;

        return $this;
    }

    /**
     * Get hippo.
     *
     * @return string
     */
    public function getHippo()
    {
        return $this->hippo;
    }

    /**
     * Set numcourse.
     *
     * @param int $numcourse
     *
     * @return Cachedate
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
     * Set cl.
     *
     * @param string $cl
     *
     * @return Cachedate
     */
    public function setCl($cl)
    {
        $this->cl = $cl;

        return $this;
    }

    /**
     * Get cl.
     *
     * @return string
     */
    public function getCl()
    {
        return $this->cl;
    }

    /**
     * Set dist.
     *
     * @param int $dist
     *
     * @return Cachedate
     */
    public function setDist($dist)
    {
        $this->dist = $dist;

        return $this;
    }

    /**
     * Get dist.
     *
     * @return int
     */
    public function getDist()
    {
        return $this->dist;
    }

    /**
     * Set partant.
     *
     * @param int $partant
     *
     * @return Cachedate
     */
    public function setPartant($partant)
    {
        $this->partant = $partant;

        return $this;
    }

    /**
     * Get partant.
     *
     * @return int
     */
    public function getPartant()
    {
        return $this->partant;
    }

    /**
     * Set typec.
     *
     * @param string $typec
     *
     * @return Cachedate
     */
    public function setTypec($typec)
    {
        $this->typec = $typec;

        return $this;
    }

    /**
     * Get typec.
     *
     * @return string
     */
    public function getTypec()
    {
        return $this->typec;
    }

    /**
     * Set cheque.
     *
     * @param string $cheque
     *
     * @return Cachedate
     */
    public function setCheque($cheque)
    {
        $this->cheque = $cheque;

        return $this;
    }

    /**
     * Get cheque.
     *
     * @return string
     */
    public function getCheque()
    {
        return $this->cheque;
    }

    /**
     * Set numero.
     *
     * @param string $numero
     *
     * @return Cachedate
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero.
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set cheval.
     *
     * @param string $cheval
     *
     * @return Cachedate
     */
    public function setCheval($cheval)
    {
        $this->cheval = $cheval;

        return $this;
    }

    /**
     * Get cheval.
     *
     * @return string
     */
    public function getCheval()
    {
        return $this->cheval;
    }

    /**
     * Set sexe.
     *
     * @param string $sexe
     *
     * @return Cachedate
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe.
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set age.
     *
     * @param int $age
     *
     * @return Cachedate
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age.
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set cotedirect.
     *
     * @param string $cotedirect
     *
     * @return Cachedate
     */
    public function setCotedirect($cotedirect)
    {
        $this->cotedirect = $cotedirect;

        return $this;
    }

    /**
     * Get cotedirect.
     *
     * @return string
     */
    public function getCotedirect()
    {
        return $this->cotedirect;
    }

    /**
     * Set coteprob.
     *
     * @param string $coteprob
     *
     * @return Cachedate
     */
    public function setCoteprob($coteprob)
    {
        $this->coteprob = $coteprob;

        return $this;
    }

    /**
     * Get coteprob.
     *
     * @return string
     */
    public function getCoteprob()
    {
        return $this->coteprob;
    }

    /**
     * Set recence.
     *
     * @param int $recence
     *
     * @return Cachedate
     */
    public function setRecence($recence)
    {
        $this->recence = $recence;

        return $this;
    }

    /**
     * Get recence.
     *
     * @return int
     */
    public function getRecence()
    {
        return $this->recence;
    }

    /**
     * Set ecurie.
     *
     * @param string $ecurie
     *
     * @return Cachedate
     */
    public function setEcurie($ecurie)
    {
        $this->ecurie = $ecurie;

        return $this;
    }

    /**
     * Get ecurie.
     *
     * @return string
     */
    public function getEcurie()
    {
        return $this->ecurie;
    }

    /**
     * Set distpoids.
     *
     * @param string|null $distpoids
     *
     * @return Cachedate
     */
    public function setDistpoids($distpoids = null)
    {
        $this->distpoids = $distpoids;

        return $this;
    }

    /**
     * Get distpoids.
     *
     * @return string|null
     */
    public function getDistpoids()
    {
        return $this->distpoids;
    }

    /**
     * Set ecar.
     *
     * @param string $ecar
     *
     * @return Cachedate
     */
    public function setEcar($ecar)
    {
        $this->ecar = $ecar;

        return $this;
    }

    /**
     * Get ecar.
     *
     * @return string
     */
    public function getEcar()
    {
        return $this->ecar;
    }

    /**
     * Set redkm.
     *
     * @param string $redkm
     *
     * @return Cachedate
     */
    public function setRedkm($redkm)
    {
        $this->redkm = $redkm;

        return $this;
    }

    /**
     * Get redkm.
     *
     * @return string
     */
    public function getRedkm()
    {
        return $this->redkm;
    }

    /**
     * Set redkmint.
     *
     * @param int $redkmint
     *
     * @return Cachedate
     */
    public function setRedkmint($redkmint)
    {
        $this->redkmint = $redkmint;

        return $this;
    }

    /**
     * Get redkmint.
     *
     * @return int
     */
    public function getRedkmint()
    {
        return $this->redkmint;
    }

    /**
     * Set handiecords.
     *
     * @param string $handiecords
     *
     * @return Cachedate
     */
    public function setHandiecords($handiecords)
    {
        $this->handiecords = $handiecords;

        return $this;
    }

    /**
     * Get handiecords.
     *
     * @return string
     */
    public function getHandiecords()
    {
        return $this->handiecords;
    }

    /**
     * Set corde.
     *
     * @param string $corde
     *
     * @return Cachedate
     */
    public function setCorde($corde)
    {
        $this->corde = $corde;

        return $this;
    }

    /**
     * Get corde.
     *
     * @return string
     */
    public function getCorde()
    {
        return $this->corde;
    }

    /**
     * Set defoeil.
     *
     * @param string $defoeil
     *
     * @return Cachedate
     */
    public function setDefoeil($defoeil)
    {
        $this->defoeil = $defoeil;

        return $this;
    }

    /**
     * Get defoeil.
     *
     * @return string
     */
    public function getDefoeil()
    {
        return $this->defoeil;
    }

    /**
     * Set defoeilprec.
     *
     * @param string $defoeilprec
     *
     * @return Cachedate
     */
    public function setDefoeilprec($defoeilprec)
    {
        $this->defoeilprec = $defoeilprec;

        return $this;
    }

    /**
     * Get defoeilprec.
     *
     * @return string
     */
    public function getDefoeilprec()
    {
        return $this->defoeilprec;
    }

    /**
     * Set recul.
     *
     * @param bool|null $recul
     *
     * @return Cachedate
     */
    public function setRecul($recul = null)
    {
        $this->recul = $recul;

        return $this;
    }

    /**
     * Get recul.
     *
     * @return bool|null
     */
    public function getRecul()
    {
        return $this->recul;
    }

    /**
     * Set gains.
     *
     * @param string $gains
     *
     * @return Cachedate
     */
    public function setGains($gains)
    {
        $this->gains = $gains;

        return $this;
    }

    /**
     * Get gains.
     *
     * @return string
     */
    public function getGains()
    {
        return $this->gains;
    }

    /**
     * Set musiquept.
     *
     * @param string $musiquept
     *
     * @return Cachedate
     */
    public function setMusiquept($musiquept)
    {
        $this->musiquept = $musiquept;

        return $this;
    }

    /**
     * Get musiquept.
     *
     * @return string
     */
    public function getMusiquept()
    {
        return $this->musiquept;
    }

    /**
     * Set musiqueche.
     *
     * @param string $musiqueche
     *
     * @return Cachedate
     */
    public function setMusiqueche($musiqueche)
    {
        $this->musiqueche = $musiqueche;

        return $this;
    }

    /**
     * Get musiqueche.
     *
     * @return string
     */
    public function getMusiqueche()
    {
        return $this->musiqueche;
    }

    /**
     * Set m1.
     *
     * @param int|null $m1
     *
     * @return Cachedate
     */
    public function setM1($m1 = null)
    {
        $this->m1 = $m1;

        return $this;
    }

    /**
     * Get m1.
     *
     * @return int|null
     */
    public function getM1()
    {
        return $this->m1;
    }

    /**
     * Set m2.
     *
     * @param int|null $m2
     *
     * @return Cachedate
     */
    public function setM2($m2 = null)
    {
        $this->m2 = $m2;

        return $this;
    }

    /**
     * Get m2.
     *
     * @return int|null
     */
    public function getM2()
    {
        return $this->m2;
    }

    /**
     * Set m3.
     *
     * @param int|null $m3
     *
     * @return Cachedate
     */
    public function setM3($m3 = null)
    {
        $this->m3 = $m3;

        return $this;
    }

    /**
     * Get m3.
     *
     * @return int|null
     */
    public function getM3()
    {
        return $this->m3;
    }

    /**
     * Set m4.
     *
     * @param int|null $m4
     *
     * @return Cachedate
     */
    public function setM4($m4 = null)
    {
        $this->m4 = $m4;

        return $this;
    }

    /**
     * Get m4.
     *
     * @return int|null
     */
    public function getM4()
    {
        return $this->m4;
    }

    /**
     * Set m5.
     *
     * @param int|null $m5
     *
     * @return Cachedate
     */
    public function setM5($m5 = null)
    {
        $this->m5 = $m5;

        return $this;
    }

    /**
     * Get m5.
     *
     * @return int|null
     */
    public function getM5()
    {
        return $this->m5;
    }

    /**
     * Set m6.
     *
     * @param int|null $m6
     *
     * @return Cachedate
     */
    public function setM6($m6 = null)
    {
        $this->m6 = $m6;

        return $this;
    }

    /**
     * Get m6.
     *
     * @return int|null
     */
    public function getM6()
    {
        return $this->m6;
    }

    /**
     * Set jockey.
     *
     * @param string $jockey
     *
     * @return Cachedate
     */
    public function setJockey($jockey)
    {
        $this->jockey = $jockey;

        return $this;
    }

    /**
     * Get jockey.
     *
     * @return string
     */
    public function getJockey()
    {
        return $this->jockey;
    }

    /**
     * Set musiquejoc.
     *
     * @param string $musiquejoc
     *
     * @return Cachedate
     */
    public function setMusiquejoc($musiquejoc)
    {
        $this->musiquejoc = $musiquejoc;

        return $this;
    }

    /**
     * Get musiquejoc.
     *
     * @return string
     */
    public function getMusiquejoc()
    {
        return $this->musiquejoc;
    }

    /**
     * Set montesdujockeyjour.
     *
     * @param string $montesdujockeyjour
     *
     * @return Cachedate
     */
    public function setMontesdujockeyjour($montesdujockeyjour)
    {
        $this->montesdujockeyjour = $montesdujockeyjour;

        return $this;
    }

    /**
     * Get montesdujockeyjour.
     *
     * @return string
     */
    public function getMontesdujockeyjour()
    {
        return $this->montesdujockeyjour;
    }

    /**
     * Set couruejockeyjour.
     *
     * @param string $couruejockeyjour
     *
     * @return Cachedate
     */
    public function setCouruejockeyjour($couruejockeyjour)
    {
        $this->couruejockeyjour = $couruejockeyjour;

        return $this;
    }

    /**
     * Get couruejockeyjour.
     *
     * @return string
     */
    public function getCouruejockeyjour()
    {
        return $this->couruejockeyjour;
    }

    /**
     * Set victoirejockeyjour.
     *
     * @param string $victoirejockeyjour
     *
     * @return Cachedate
     */
    public function setVictoirejockeyjour($victoirejockeyjour)
    {
        $this->victoirejockeyjour = $victoirejockeyjour;

        return $this;
    }

    /**
     * Get victoirejockeyjour.
     *
     * @return string
     */
    public function getVictoirejockeyjour()
    {
        return $this->victoirejockeyjour;
    }

    /**
     * Set entraineur.
     *
     * @param string $entraineur
     *
     * @return Cachedate
     */
    public function setEntraineur($entraineur)
    {
        $this->entraineur = $entraineur;

        return $this;
    }

    /**
     * Get entraineur.
     *
     * @return string
     */
    public function getEntraineur()
    {
        return $this->entraineur;
    }

    /**
     * Set musiqueent.
     *
     * @param string $musiqueent
     *
     * @return Cachedate
     */
    public function setMusiqueent($musiqueent)
    {
        $this->musiqueent = $musiqueent;

        return $this;
    }

    /**
     * Get musiqueent.
     *
     * @return string
     */
    public function getMusiqueent()
    {
        return $this->musiqueent;
    }

    /**
     * Set monteentraineurjour.
     *
     * @param int $monteentraineurjour
     *
     * @return Cachedate
     */
    public function setMonteentraineurjour($monteentraineurjour)
    {
        $this->monteentraineurjour = $monteentraineurjour;

        return $this;
    }

    /**
     * Get monteentraineurjour.
     *
     * @return int
     */
    public function getMonteentraineurjour()
    {
        return $this->monteentraineurjour;
    }

    /**
     * Set courueentraineurjour.
     *
     * @param int $courueentraineurjour
     *
     * @return Cachedate
     */
    public function setCourueentraineurjour($courueentraineurjour)
    {
        $this->courueentraineurjour = $courueentraineurjour;

        return $this;
    }

    /**
     * Get courueentraineurjour.
     *
     * @return int
     */
    public function getCourueentraineurjour()
    {
        return $this->courueentraineurjour;
    }

    /**
     * Set victoireentraineurjour.
     *
     * @param int $victoireentraineurjour
     *
     * @return Cachedate
     */
    public function setVictoireentraineurjour($victoireentraineurjour)
    {
        $this->victoireentraineurjour = $victoireentraineurjour;

        return $this;
    }

    /**
     * Get victoireentraineurjour.
     *
     * @return int
     */
    public function getVictoireentraineurjour()
    {
        return $this->victoireentraineurjour;
    }

    /**
     * Set coursescheval.
     *
     * @param int $coursescheval
     *
     * @return Cachedate
     */
    public function setCoursescheval($coursescheval)
    {
        $this->coursescheval = $coursescheval;

        return $this;
    }

    /**
     * Get coursescheval.
     *
     * @return int
     */
    public function getCoursescheval()
    {
        return $this->coursescheval;
    }

    /**
     * Set victoirescheval.
     *
     * @param int $victoirescheval
     *
     * @return Cachedate
     */
    public function setVictoirescheval($victoirescheval)
    {
        $this->victoirescheval = $victoirescheval;

        return $this;
    }

    /**
     * Get victoirescheval.
     *
     * @return int
     */
    public function getVictoirescheval()
    {
        return $this->victoirescheval;
    }

    /**
     * Set placescheval.
     *
     * @param int $placescheval
     *
     * @return Cachedate
     */
    public function setPlacescheval($placescheval)
    {
        $this->placescheval = $placescheval;

        return $this;
    }

    /**
     * Get placescheval.
     *
     * @return int
     */
    public function getPlacescheval()
    {
        return $this->placescheval;
    }

    /**
     * Set coursesentraineur.
     *
     * @param int $coursesentraineur
     *
     * @return Cachedate
     */
    public function setCoursesentraineur($coursesentraineur)
    {
        $this->coursesentraineur = $coursesentraineur;

        return $this;
    }

    /**
     * Get coursesentraineur.
     *
     * @return int
     */
    public function getCoursesentraineur()
    {
        return $this->coursesentraineur;
    }

    /**
     * Set victoiresentraineur.
     *
     * @param int $victoiresentraineur
     *
     * @return Cachedate
     */
    public function setVictoiresentraineur($victoiresentraineur)
    {
        $this->victoiresentraineur = $victoiresentraineur;

        return $this;
    }

    /**
     * Get victoiresentraineur.
     *
     * @return int
     */
    public function getVictoiresentraineur()
    {
        return $this->victoiresentraineur;
    }

    /**
     * Set placeentraineur.
     *
     * @param int $placeentraineur
     *
     * @return Cachedate
     */
    public function setPlaceentraineur($placeentraineur)
    {
        $this->placeentraineur = $placeentraineur;

        return $this;
    }

    /**
     * Get placeentraineur.
     *
     * @return int
     */
    public function getPlaceentraineur()
    {
        return $this->placeentraineur;
    }

    /**
     * Set coursesjockey.
     *
     * @param int $coursesjockey
     *
     * @return Cachedate
     */
    public function setCoursesjockey($coursesjockey)
    {
        $this->coursesjockey = $coursesjockey;

        return $this;
    }

    /**
     * Get coursesjockey.
     *
     * @return int
     */
    public function getCoursesjockey()
    {
        return $this->coursesjockey;
    }

    /**
     * Set victoiresjockey.
     *
     * @param int $victoiresjockey
     *
     * @return Cachedate
     */
    public function setVictoiresjockey($victoiresjockey)
    {
        $this->victoiresjockey = $victoiresjockey;

        return $this;
    }

    /**
     * Get victoiresjockey.
     *
     * @return int
     */
    public function getVictoiresjockey()
    {
        return $this->victoiresjockey;
    }

    /**
     * Set placejockey.
     *
     * @param int $placejockey
     *
     * @return Cachedate
     */
    public function setPlacejockey($placejockey)
    {
        $this->placejockey = $placejockey;

        return $this;
    }

    /**
     * Get placejockey.
     *
     * @return int
     */
    public function getPlacejockey()
    {
        return $this->placejockey;
    }

    /**
     * Set dernierhippo.
     *
     * @param string|null $dernierhippo
     *
     * @return Cachedate
     */
    public function setDernierhippo($dernierhippo = null)
    {
        $this->dernierhippo = $dernierhippo;

        return $this;
    }

    /**
     * Get dernierhippo.
     *
     * @return string|null
     */
    public function getDernierhippo()
    {
        return $this->dernierhippo;
    }

    /**
     * Set dernierealloc.
     *
     * @param string|null $dernierealloc
     *
     * @return Cachedate
     */
    public function setDernierealloc($dernierealloc = null)
    {
        $this->dernierealloc = $dernierealloc;

        return $this;
    }

    /**
     * Get dernierealloc.
     *
     * @return string|null
     */
    public function getDernierealloc()
    {
        return $this->dernierealloc;
    }

    /**
     * Set derniernbpartants.
     *
     * @param string|null $derniernbpartants
     *
     * @return Cachedate
     */
    public function setDerniernbpartants($derniernbpartants = null)
    {
        $this->derniernbpartants = $derniernbpartants;

        return $this;
    }

    /**
     * Get derniernbpartants.
     *
     * @return string|null
     */
    public function getDerniernbpartants()
    {
        return $this->derniernbpartants;
    }

    /**
     * Set dernieredist.
     *
     * @param string|null $dernieredist
     *
     * @return Cachedate
     */
    public function setDernieredist($dernieredist = null)
    {
        $this->dernieredist = $dernieredist;

        return $this;
    }

    /**
     * Get dernieredist.
     *
     * @return string|null
     */
    public function getDernieredist()
    {
        return $this->dernieredist;
    }

    /**
     * Set derniereplace.
     *
     * @param string|null $derniereplace
     *
     * @return Cachedate
     */
    public function setDerniereplace($derniereplace = null)
    {
        $this->derniereplace = $derniereplace;

        return $this;
    }

    /**
     * Get derniereplace.
     *
     * @return string|null
     */
    public function getDerniereplace()
    {
        return $this->derniereplace;
    }

    /**
     * Set dernierecote.
     *
     * @param string|null $dernierecote
     *
     * @return Cachedate
     */
    public function setDernierecote($dernierecote = null)
    {
        $this->dernierecote = $dernierecote;

        return $this;
    }

    /**
     * Get dernierecote.
     *
     * @return string|null
     */
    public function getDernierecote()
    {
        return $this->dernierecote;
    }

    /**
     * Set dernierjoc.
     *
     * @param string|null $dernierjoc
     *
     * @return Cachedate
     */
    public function setDernierjoc($dernierjoc = null)
    {
        $this->dernierjoc = $dernierjoc;

        return $this;
    }

    /**
     * Get dernierjoc.
     *
     * @return string|null
     */
    public function getDernierjoc()
    {
        return $this->dernierjoc;
    }

    /**
     * Set dernierent.
     *
     * @param string|null $dernierent
     *
     * @return Cachedate
     */
    public function setDernierent($dernierent = null)
    {
        $this->dernierent = $dernierent;

        return $this;
    }

    /**
     * Get dernierent.
     *
     * @return string|null
     */
    public function getDernierent()
    {
        return $this->dernierent;
    }

    /**
     * Set dernierprop.
     *
     * @param string|null $dernierprop
     *
     * @return Cachedate
     */
    public function setDernierprop($dernierprop = null)
    {
        $this->dernierprop = $dernierprop;

        return $this;
    }

    /**
     * Get dernierprop.
     *
     * @return string|null
     */
    public function getDernierprop()
    {
        return $this->dernierprop;
    }

    /**
     * Set dernierredkm.
     *
     * @param string $dernierredkm
     *
     * @return Cachedate
     */
    public function setDernierredkm($dernierredkm)
    {
        $this->dernierredkm = $dernierredkm;

        return $this;
    }

    /**
     * Get dernierredkm.
     *
     * @return string
     */
    public function getDernierredkm()
    {
        return $this->dernierredkm;
    }

    /**
     * Set proprietaire.
     *
     * @param string $proprietaire
     *
     * @return Cachedate
     */
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire.
     *
     * @return string
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set nbcoursepropjour.
     *
     * @param int $nbcoursepropjour
     *
     * @return Cachedate
     */
    public function setNbcoursepropjour($nbcoursepropjour)
    {
        $this->nbcoursepropjour = $nbcoursepropjour;

        return $this;
    }

    /**
     * Get nbcoursepropjour.
     *
     * @return int
     */
    public function getNbcoursepropjour()
    {
        return $this->nbcoursepropjour;
    }

    /**
     * Set poidmont.
     *
     * @param string $poidmont
     *
     * @return Cachedate
     */
    public function setPoidmont($poidmont)
    {
        $this->poidmont = $poidmont;

        return $this;
    }

    /**
     * Get poidmont.
     *
     * @return string
     */
    public function getPoidmont()
    {
        return $this->poidmont;
    }

    /**
     * Set pourcvictjock.
     *
     * @param string $pourcvictjock
     *
     * @return Cachedate
     */
    public function setPourcvictjock($pourcvictjock)
    {
        $this->pourcvictjock = $pourcvictjock;

        return $this;
    }

    /**
     * Get pourcvictjock.
     *
     * @return string
     */
    public function getPourcvictjock()
    {
        return $this->pourcvictjock;
    }

    /**
     * Set pourcplacejock.
     *
     * @param string $pourcplacejock
     *
     * @return Cachedate
     */
    public function setPourcplacejock($pourcplacejock)
    {
        $this->pourcplacejock = $pourcplacejock;

        return $this;
    }

    /**
     * Get pourcplacejock.
     *
     * @return string
     */
    public function getPourcplacejock()
    {
        return $this->pourcplacejock;
    }

    /**
     * Set pourcvictcheval.
     *
     * @param string $pourcvictcheval
     *
     * @return Cachedate
     */
    public function setPourcvictcheval($pourcvictcheval)
    {
        $this->pourcvictcheval = $pourcvictcheval;

        return $this;
    }

    /**
     * Get pourcvictcheval.
     *
     * @return string
     */
    public function getPourcvictcheval()
    {
        return $this->pourcvictcheval;
    }

    /**
     * Set pourcplacecheval.
     *
     * @param string $pourcplacecheval
     *
     * @return Cachedate
     */
    public function setPourcplacecheval($pourcplacecheval)
    {
        $this->pourcplacecheval = $pourcplacecheval;

        return $this;
    }

    /**
     * Get pourcplacecheval.
     *
     * @return string
     */
    public function getPourcplacecheval()
    {
        return $this->pourcplacecheval;
    }

    /**
     * Set pourcvictent.
     *
     * @param string $pourcvictent
     *
     * @return Cachedate
     */
    public function setPourcvictent($pourcvictent)
    {
        $this->pourcvictent = $pourcvictent;

        return $this;
    }

    /**
     * Get pourcvictent.
     *
     * @return string
     */
    public function getPourcvictent()
    {
        return $this->pourcvictent;
    }

    /**
     * Set pourcplaceent.
     *
     * @param string $pourcplaceent
     *
     * @return Cachedate
     */
    public function setPourcplaceent($pourcplaceent)
    {
        $this->pourcplaceent = $pourcplaceent;

        return $this;
    }

    /**
     * Get pourcplaceent.
     *
     * @return string
     */
    public function getPourcplaceent()
    {
        return $this->pourcplaceent;
    }

    /**
     * Set pourcvictenthippo.
     *
     * @param string $pourcvictenthippo
     *
     * @return Cachedate
     */
    public function setPourcvictenthippo($pourcvictenthippo)
    {
        $this->pourcvictenthippo = $pourcvictenthippo;

        return $this;
    }

    /**
     * Get pourcvictenthippo.
     *
     * @return string
     */
    public function getPourcvictenthippo()
    {
        return $this->pourcvictenthippo;
    }

    /**
     * Set pourcvictjockhippo.
     *
     * @param string $pourcvictjockhippo
     *
     * @return Cachedate
     */
    public function setPourcvictjockhippo($pourcvictjockhippo)
    {
        $this->pourcvictjockhippo = $pourcvictjockhippo;

        return $this;
    }

    /**
     * Get pourcvictjockhippo.
     *
     * @return string
     */
    public function getPourcvictjockhippo()
    {
        return $this->pourcvictjockhippo;
    }

    /**
     * Set pourcplaceenthippo.
     *
     * @param string $pourcplaceenthippo
     *
     * @return Cachedate
     */
    public function setPourcplaceenthippo($pourcplaceenthippo)
    {
        $this->pourcplaceenthippo = $pourcplaceenthippo;

        return $this;
    }

    /**
     * Get pourcplaceenthippo.
     *
     * @return string
     */
    public function getPourcplaceenthippo()
    {
        return $this->pourcplaceenthippo;
    }

    /**
     * Set pourcplacejockhippo.
     *
     * @param string $pourcplacejockhippo
     *
     * @return Cachedate
     */
    public function setPourcplacejockhippo($pourcplacejockhippo)
    {
        $this->pourcplacejockhippo = $pourcplacejockhippo;

        return $this;
    }

    /**
     * Get pourcplacejockhippo.
     *
     * @return string
     */
    public function getPourcplacejockhippo()
    {
        return $this->pourcplacejockhippo;
    }

    /**
     * Set pourcvictchevalhippo.
     *
     * @param string $pourcvictchevalhippo
     *
     * @return Cachedate
     */
    public function setPourcvictchevalhippo($pourcvictchevalhippo)
    {
        $this->pourcvictchevalhippo = $pourcvictchevalhippo;

        return $this;
    }

    /**
     * Get pourcvictchevalhippo.
     *
     * @return string
     */
    public function getPourcvictchevalhippo()
    {
        return $this->pourcvictchevalhippo;
    }

    /**
     * Set pourcplacechevalhippo.
     *
     * @param string $pourcplacechevalhippo
     *
     * @return Cachedate
     */
    public function setPourcplacechevalhippo($pourcplacechevalhippo)
    {
        $this->pourcplacechevalhippo = $pourcplacechevalhippo;

        return $this;
    }

    /**
     * Get pourcplacechevalhippo.
     *
     * @return string
     */
    public function getPourcplacechevalhippo()
    {
        return $this->pourcplacechevalhippo;
    }

    /**
     * Set nbrcoursejockhippo.
     *
     * @param int $nbrcoursejockhippo
     *
     * @return Cachedate
     */
    public function setNbrcoursejockhippo($nbrcoursejockhippo)
    {
        $this->nbrcoursejockhippo = $nbrcoursejockhippo;

        return $this;
    }

    /**
     * Get nbrcoursejockhippo.
     *
     * @return int
     */
    public function getNbrcoursejockhippo()
    {
        return $this->nbrcoursejockhippo;
    }

    /**
     * Set nbrcourseenthippo.
     *
     * @param int $nbrcourseenthippo
     *
     * @return Cachedate
     */
    public function setNbrcourseenthippo($nbrcourseenthippo)
    {
        $this->nbrcourseenthippo = $nbrcourseenthippo;

        return $this;
    }

    /**
     * Get nbrcourseenthippo.
     *
     * @return int
     */
    public function getNbrcourseenthippo()
    {
        return $this->nbrcourseenthippo;
    }

    /**
     * Set nbrcoursechevalhippo.
     *
     * @param int $nbrcoursechevalhippo
     *
     * @return Cachedate
     */
    public function setNbrcoursechevalhippo($nbrcoursechevalhippo)
    {
        $this->nbrcoursechevalhippo = $nbrcoursechevalhippo;

        return $this;
    }

    /**
     * Get nbrcoursechevalhippo.
     *
     * @return int
     */
    public function getNbrcoursechevalhippo()
    {
        return $this->nbrcoursechevalhippo;
    }

    /**
     * Set nbcoursecouple.
     *
     * @param int $nbcoursecouple
     *
     * @return Cachedate
     */
    public function setNbcoursecouple($nbcoursecouple)
    {
        $this->nbcoursecouple = $nbcoursecouple;

        return $this;
    }

    /**
     * Get nbcoursecouple.
     *
     * @return int
     */
    public function getNbcoursecouple()
    {
        return $this->nbcoursecouple;
    }

    /**
     * Set nbvictcouple.
     *
     * @param int $nbvictcouple
     *
     * @return Cachedate
     */
    public function setNbvictcouple($nbvictcouple)
    {
        $this->nbvictcouple = $nbvictcouple;

        return $this;
    }

    /**
     * Get nbvictcouple.
     *
     * @return int
     */
    public function getNbvictcouple()
    {
        return $this->nbvictcouple;
    }

    /**
     * Set nbplacecouple.
     *
     * @param int $nbplacecouple
     *
     * @return Cachedate
     */
    public function setNbplacecouple($nbplacecouple)
    {
        $this->nbplacecouple = $nbplacecouple;

        return $this;
    }

    /**
     * Get nbplacecouple.
     *
     * @return int
     */
    public function getNbplacecouple()
    {
        return $this->nbplacecouple;
    }

    /**
     * Set txvictcouple.
     *
     * @param string $txvictcouple
     *
     * @return Cachedate
     */
    public function setTxvictcouple($txvictcouple)
    {
        $this->txvictcouple = $txvictcouple;

        return $this;
    }

    /**
     * Get txvictcouple.
     *
     * @return string
     */
    public function getTxvictcouple()
    {
        return $this->txvictcouple;
    }

    /**
     * Set txplacecouple.
     *
     * @param string $txplacecouple
     *
     * @return Cachedate
     */
    public function setTxplacecouple($txplacecouple)
    {
        $this->txplacecouple = $txplacecouple;

        return $this;
    }

    /**
     * Get txplacecouple.
     *
     * @return string
     */
    public function getTxplacecouple()
    {
        return $this->txplacecouple;
    }

    /**
     * Set nbcoursecouplehippo.
     *
     * @param int $nbcoursecouplehippo
     *
     * @return Cachedate
     */
    public function setNbcoursecouplehippo($nbcoursecouplehippo)
    {
        $this->nbcoursecouplehippo = $nbcoursecouplehippo;

        return $this;
    }

    /**
     * Get nbcoursecouplehippo.
     *
     * @return int
     */
    public function getNbcoursecouplehippo()
    {
        return $this->nbcoursecouplehippo;
    }

    /**
     * Set nbvictcouplehippo.
     *
     * @param int $nbvictcouplehippo
     *
     * @return Cachedate
     */
    public function setNbvictcouplehippo($nbvictcouplehippo)
    {
        $this->nbvictcouplehippo = $nbvictcouplehippo;

        return $this;
    }

    /**
     * Get nbvictcouplehippo.
     *
     * @return int
     */
    public function getNbvictcouplehippo()
    {
        return $this->nbvictcouplehippo;
    }

    /**
     * Set nbplacecouplehippo.
     *
     * @param int $nbplacecouplehippo
     *
     * @return Cachedate
     */
    public function setNbplacecouplehippo($nbplacecouplehippo)
    {
        $this->nbplacecouplehippo = $nbplacecouplehippo;

        return $this;
    }

    /**
     * Get nbplacecouplehippo.
     *
     * @return int
     */
    public function getNbplacecouplehippo()
    {
        return $this->nbplacecouplehippo;
    }

    /**
     * Set txvictcouplehippo.
     *
     * @param string $txvictcouplehippo
     *
     * @return Cachedate
     */
    public function setTxvictcouplehippo($txvictcouplehippo)
    {
        $this->txvictcouplehippo = $txvictcouplehippo;

        return $this;
    }

    /**
     * Get txvictcouplehippo.
     *
     * @return string
     */
    public function getTxvictcouplehippo()
    {
        return $this->txvictcouplehippo;
    }

    /**
     * Set txplacecouplehippo.
     *
     * @param string $txplacecouplehippo
     *
     * @return Cachedate
     */
    public function setTxplacecouplehippo($txplacecouplehippo)
    {
        $this->txplacecouplehippo = $txplacecouplehippo;

        return $this;
    }

    /**
     * Get txplacecouplehippo.
     *
     * @return string
     */
    public function getTxplacecouplehippo()
    {
        return $this->txplacecouplehippo;
    }

    /**
     * Set pere.
     *
     * @param string $pere
     *
     * @return Cachedate
     */
    public function setPere($pere)
    {
        $this->pere = $pere;

        return $this;
    }

    /**
     * Get pere.
     *
     * @return string
     */
    public function getPere()
    {
        return $this->pere;
    }

    /**
     * Set mere.
     *
     * @param string $mere
     *
     * @return Cachedate
     */
    public function setMere($mere)
    {
        $this->mere = $mere;

        return $this;
    }

    /**
     * Get mere.
     *
     * @return string
     */
    public function getMere()
    {
        return $this->mere;
    }

    /**
     * Set peremere.
     *
     * @param string $peremere
     *
     * @return Cachedate
     */
    public function setPeremere($peremere)
    {
        $this->peremere = $peremere;

        return $this;
    }

    /**
     * Get peremere.
     *
     * @return string
     */
    public function getPeremere()
    {
        return $this->peremere;
    }

    /**
     * Set commen.
     *
     * @param string $commen
     *
     * @return Cachedate
     */
    public function setCommen($commen)
    {
        $this->commen = $commen;

        return $this;
    }

    /**
     * Get commen.
     *
     * @return string
     */
    public function getCommen()
    {
        return $this->commen;
    }

    /**
     * Set gainscarriere.
     *
     * @param int $gainscarriere
     *
     * @return Cachedate
     */
    public function setGainscarriere($gainscarriere)
    {
        $this->gainscarriere = $gainscarriere;

        return $this;
    }

    /**
     * Get gainscarriere.
     *
     * @return int
     */
    public function getGainscarriere()
    {
        return $this->gainscarriere;
    }

    /**
     * Set gainsvictoires.
     *
     * @param int $gainsvictoires
     *
     * @return Cachedate
     */
    public function setGainsvictoires($gainsvictoires)
    {
        $this->gainsvictoires = $gainsvictoires;

        return $this;
    }

    /**
     * Get gainsvictoires.
     *
     * @return int
     */
    public function getGainsvictoires()
    {
        return $this->gainsvictoires;
    }

    /**
     * Set gainsplace.
     *
     * @param int $gainsplace
     *
     * @return Cachedate
     */
    public function setGainsplace($gainsplace)
    {
        $this->gainsplace = $gainsplace;

        return $this;
    }

    /**
     * Get gainsplace.
     *
     * @return int
     */
    public function getGainsplace()
    {
        return $this->gainsplace;
    }

    /**
     * Set gainsanneeencours.
     *
     * @param int $gainsanneeencours
     *
     * @return Cachedate
     */
    public function setGainsanneeencours($gainsanneeencours)
    {
        $this->gainsanneeencours = $gainsanneeencours;

        return $this;
    }

    /**
     * Get gainsanneeencours.
     *
     * @return int
     */
    public function getGainsanneeencours()
    {
        return $this->gainsanneeencours;
    }

    /**
     * Set gainsanneeprecedente.
     *
     * @param int $gainsanneeprecedente
     *
     * @return Cachedate
     */
    public function setGainsanneeprecedente($gainsanneeprecedente)
    {
        $this->gainsanneeprecedente = $gainsanneeprecedente;

        return $this;
    }

    /**
     * Get gainsanneeprecedente.
     *
     * @return int
     */
    public function getGainsanneeprecedente()
    {
        return $this->gainsanneeprecedente;
    }

    /**
     * Set jumentpleine.
     *
     * @param bool $jumentpleine
     *
     * @return Cachedate
     */
    public function setJumentpleine($jumentpleine)
    {
        $this->jumentpleine = $jumentpleine;

        return $this;
    }

    /**
     * Get jumentpleine.
     *
     * @return bool
     */
    public function getJumentpleine()
    {
        return $this->jumentpleine;
    }

    /**
     * Set engagement.
     *
     * @param bool $engagement
     *
     * @return Cachedate
     */
    public function setEngagement($engagement)
    {
        $this->engagement = $engagement;

        return $this;
    }

    /**
     * Get engagement.
     *
     * @return bool
     */
    public function getEngagement()
    {
        return $this->engagement;
    }

    /**
     * Set handicapdistance.
     *
     * @param int $handicapdistance
     *
     * @return Cachedate
     */
    public function setHandicapdistance($handicapdistance)
    {
        $this->handicapdistance = $handicapdistance;

        return $this;
    }

    /**
     * Get handicapdistance.
     *
     * @return int
     */
    public function getHandicapdistance()
    {
        return $this->handicapdistance;
    }

    /**
     * Set handicappoids.
     *
     * @param int $handicappoids
     *
     * @return Cachedate
     */
    public function setHandicappoids($handicappoids)
    {
        $this->handicappoids = $handicappoids;

        return $this;
    }

    /**
     * Get handicappoids.
     *
     * @return int
     */
    public function getHandicappoids()
    {
        return $this->handicappoids;
    }

    /**
     * Set indicateurinedit.
     *
     * @param bool $indicateurinedit
     *
     * @return Cachedate
     */
    public function setIndicateurinedit($indicateurinedit)
    {
        $this->indicateurinedit = $indicateurinedit;

        return $this;
    }

    /**
     * Get indicateurinedit.
     *
     * @return bool
     */
    public function getIndicateurinedit()
    {
        return $this->indicateurinedit;
    }

    /**
     * Set tempstot.
     *
     * @param string $tempstot
     *
     * @return Cachedate
     */
    public function setTempstot($tempstot)
    {
        $this->tempstot = $tempstot;

        return $this;
    }

    /**
     * Get tempstot.
     *
     * @return string
     */
    public function getTempstot()
    {
        return $this->tempstot;
    }

    /**
     * Set vha.
     *
     * @param string $vha
     *
     * @return Cachedate
     */
    public function setVha($vha)
    {
        $this->vha = $vha;

        return $this;
    }

    /**
     * Get vha.
     *
     * @return string
     */
    public function getVha()
    {
        return $this->vha;
    }

    /**
     * Set recordg.
     *
     * @param string|null $recordg
     *
     * @return Cachedate
     */
    public function setRecordg($recordg = null)
    {
        $this->recordg = $recordg;

        return $this;
    }

    /**
     * Get recordg.
     *
     * @return string|null
     */
    public function getRecordg()
    {
        return $this->recordg;
    }

    /**
     * Set recordgint.
     *
     * @param int $recordgint
     *
     * @return Cachedate
     */
    public function setRecordgint($recordgint)
    {
        $this->recordgint = $recordgint;

        return $this;
    }

    /**
     * Get recordgint.
     *
     * @return int
     */
    public function getRecordgint()
    {
        return $this->recordgint;
    }

    /**
     * Set txreclam.
     *
     * @param string $txreclam
     *
     * @return Cachedate
     */
    public function setTxreclam($txreclam)
    {
        $this->txreclam = $txreclam;

        return $this;
    }

    /**
     * Get txreclam.
     *
     * @return string
     */
    public function getTxreclam()
    {
        return $this->txreclam;
    }

    /**
     * Set derniertxreclam.
     *
     * @param string $derniertxreclam
     *
     * @return Cachedate
     */
    public function setDerniertxreclam($derniertxreclam)
    {
        $this->derniertxreclam = $derniertxreclam;

        return $this;
    }

    /**
     * Get derniertxreclam.
     *
     * @return string
     */
    public function getDerniertxreclam()
    {
        return $this->derniertxreclam;
    }

    /**
     * Set createdat.
     *
     * @param \DateTime $createdat
     *
     * @return Cachedate
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat.
     *
     * @return \DateTime
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * Set updatedat.
     *
     * @param \DateTime $updatedat
     *
     * @return Cachedate
     */
    public function setUpdatedat($updatedat)
    {
        $this->updatedat = $updatedat;

        return $this;
    }

    /**
     * Get updatedat.
     *
     * @return \DateTime
     */
    public function getUpdatedat()
    {
        return $this->updatedat;
    }

    /**
     * Set rangtxvictjock.
     *
     * @param int $rangtxvictjock
     *
     * @return Cachedate
     */
    public function setRangtxvictjock($rangtxvictjock)
    {
        $this->rangtxvictjock = $rangtxvictjock;

        return $this;
    }

    /**
     * Get rangtxvictjock.
     *
     * @return int
     */
    public function getRangtxvictjock()
    {
        return $this->rangtxvictjock;
    }

    /**
     * Set rangtxvictcheval.
     *
     * @param int $rangtxvictcheval
     *
     * @return Cachedate
     */
    public function setRangtxvictcheval($rangtxvictcheval)
    {
        $this->rangtxvictcheval = $rangtxvictcheval;

        return $this;
    }

    /**
     * Get rangtxvictcheval.
     *
     * @return int
     */
    public function getRangtxvictcheval()
    {
        return $this->rangtxvictcheval;
    }

    /**
     * Set rangtxvictent.
     *
     * @param int $rangtxvictent
     *
     * @return Cachedate
     */
    public function setRangtxvictent($rangtxvictent)
    {
        $this->rangtxvictent = $rangtxvictent;

        return $this;
    }

    /**
     * Get rangtxvictent.
     *
     * @return int
     */
    public function getRangtxvictent()
    {
        return $this->rangtxvictent;
    }

    /**
     * Set rangtxplacejock.
     *
     * @param int $rangtxplacejock
     *
     * @return Cachedate
     */
    public function setRangtxplacejock($rangtxplacejock)
    {
        $this->rangtxplacejock = $rangtxplacejock;

        return $this;
    }

    /**
     * Get rangtxplacejock.
     *
     * @return int
     */
    public function getRangtxplacejock()
    {
        return $this->rangtxplacejock;
    }

    /**
     * Set rangtxplacecheval.
     *
     * @param int $rangtxplacecheval
     *
     * @return Cachedate
     */
    public function setRangtxplacecheval($rangtxplacecheval)
    {
        $this->rangtxplacecheval = $rangtxplacecheval;

        return $this;
    }

    /**
     * Get rangtxplacecheval.
     *
     * @return int
     */
    public function getRangtxplacecheval()
    {
        return $this->rangtxplacecheval;
    }

    /**
     * Set rangtxplaceent.
     *
     * @param int $rangtxplaceent
     *
     * @return Cachedate
     */
    public function setRangtxplaceent($rangtxplaceent)
    {
        $this->rangtxplaceent = $rangtxplaceent;

        return $this;
    }

    /**
     * Get rangtxplaceent.
     *
     * @return int
     */
    public function getRangtxplaceent()
    {
        return $this->rangtxplaceent;
    }

    /**
     * Set rangrecordg.
     *
     * @param int $rangrecordg
     *
     * @return Cachedate
     */
    public function setRangrecordg($rangrecordg)
    {
        $this->rangrecordg = $rangrecordg;

        return $this;
    }

    /**
     * Get rangrecordg.
     *
     * @return int
     */
    public function getRangrecordg()
    {
        return $this->rangrecordg;
    }

    /**
     * Set appetterrain.
     *
     * @param int $appetterrain
     *
     * @return Cachedate
     */
    public function setAppetterrain($appetterrain)
    {
        $this->appetterrain = $appetterrain;

        return $this;
    }

    /**
     * Get appetterrain.
     *
     * @return int
     */
    public function getAppetterrain()
    {
        return $this->appetterrain;
    }

    /**
     * Set idche.
     *
     * @param int $idche
     *
     * @return Cachedate
     */
    public function setIdche($idche)
    {
        $this->idche = $idche;

        return $this;
    }

    /**
     * Get idche.
     *
     * @return int
     */
    public function getIdche()
    {
        return $this->idche;
    }
}
