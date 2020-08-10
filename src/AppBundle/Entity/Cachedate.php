<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cachedate
 *
 * @ORM\Table(name="cachedate", indexes={@ORM\Index(name="chejour", columns={"cheval", "jour"}), @ORM\Index(name="numcourse", columns={"numcourse"}), @ORM\Index(name="comp", columns={"comp"}), @ORM\Index(name="jocjou", columns={"jockey", "jour"}), @ORM\Index(name="cheval", columns={"cheval"}), @ORM\Index(name="jour", columns={"jour"}), @ORM\Index(name="entjou", columns={"entraineur", "jour"}), @ORM\Index(name="propjour", columns={"proprietaire", "jour"}), @ORM\Index(name="dist", columns={"dist"})})
 * @ORM\Entity
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


}
