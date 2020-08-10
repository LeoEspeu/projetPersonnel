<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hippo
 *
 * @ORM\Table(name="hippo", uniqueConstraints={@ORM\UniqueConstraint(name="id_2", columns={"id"})}, indexes={@ORM\Index(name="plat_piste", columns={"plat"}), @ORM\Index(name="trot_piste", columns={"trot"}), @ORM\Index(name="corde_piste", columns={"corde"}), @ORM\Index(name="obs_piste", columns={"obstacle"}), @ORM\Index(name="pays", columns={"pays"})})
 * @ORM\Entity
 */
class Hippo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="hippo", type="string", length=255, nullable=false)
     */
    private $hippo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pays", type="integer", nullable=true)
     */
    private $pays;

    /**
     * @var int|null
     *
     * @ORM\Column(name="trot", type="integer", nullable=true)
     */
    private $trot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="obstacle", type="integer", nullable=true)
     */
    private $obstacle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plat", type="integer", nullable=true)
     */
    private $plat;

    /**
     * @var \TypePiste
     *
     * @ORM\ManyToOne(targetEntity="TypePiste")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corde", referencedColumnName="id")
     * })
     */
    private $corde;


}
