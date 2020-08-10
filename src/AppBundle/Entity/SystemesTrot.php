<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SystemesTrot
 *
 * @ORM\Table(name="systemes_trot")
 * @ORM\Entity
 */
class SystemesTrot
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_systeme", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSysteme;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_systeme", type="string", length=60, nullable=false)
     */
    private $libSysteme;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="periode_deb", type="date", nullable=true)
     */
    private $periodeDeb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="periode_fin", type="date", nullable=true)
     */
    private $periodeFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dtypeec_concerne", type="string", length=30, nullable=true)
     */
    private $dtypeecConcerne;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="autostart", type="boolean", nullable=true)
     */
    private $autostart;

    /**
     * @var int|null
     *
     * @ORM\Column(name="distance", type="integer", nullable=true)
     */
    private $distance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="piste", type="string", length=10, nullable=true)
     */
    private $piste;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script", type="string", length=100, nullable=true)
     */
    private $script;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hippo", type="string", length=50, nullable=true)
     */
    private $hippo;


}
