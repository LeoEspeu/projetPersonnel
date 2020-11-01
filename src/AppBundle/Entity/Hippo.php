<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hippo
 *
 * @ORM\Table(name="hippo", uniqueConstraints={@ORM\UniqueConstraint(name="id_2", columns={"id"})}, indexes={@ORM\Index(name="obs_piste", columns={"obstacle"}), @ORM\Index(name="pays", columns={"pays"}), @ORM\Index(name="plat_piste", columns={"plat"}), @ORM\Index(name="trot_piste", columns={"trot"}), @ORM\Index(name="corde_piste", columns={"corde"})})
 * @ORM\Entity
 */
class Hippo
{
    /**
     * @var string
     *
     * @ORM\Column(name="hippo", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hippo;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var Pays
     *
     * @ORM\ManyToOne (targetEntity="AppBundle\Entity\Pays")
     * @ORM\JoinColumn (name="pays", nullable=true, referencedColumnName="id")
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


    public function __toString()
    {
        return $this->hippo;
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
     * Set id.
     *
     * @param int $id
     *
     * @return Hippo
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set trot.
     *
     * @param int|null $trot
     *
     * @return Hippo
     */
    public function setTrot($trot = null)
    {
        $this->trot = $trot;

        return $this;
    }

    /**
     * Get trot.
     *
     * @return int|null
     */
    public function getTrot()
    {
        return $this->trot;
    }

    /**
     * Set obstacle.
     *
     * @param int|null $obstacle
     *
     * @return Hippo
     */
    public function setObstacle($obstacle = null)
    {
        $this->obstacle = $obstacle;

        return $this;
    }

    /**
     * Get obstacle.
     *
     * @return int|null
     */
    public function getObstacle()
    {
        return $this->obstacle;
    }

    /**
     * Set plat.
     *
     * @param int|null $plat
     *
     * @return Hippo
     */
    public function setPlat($plat = null)
    {
        $this->plat = $plat;

        return $this;
    }

    /**
     * Get plat.
     *
     * @return int|null
     */
    public function getPlat()
    {
        return $this->plat;
    }

    /**
     * Set pays.
     *
     * @param \AppBundle\Entity\Pays|null $pays
     *
     * @return Hippo
     */
    public function setPays(\AppBundle\Entity\Pays $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays.
     *
     * @return \AppBundle\Entity\Pays|null
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set corde.
     *
     * @param \AppBundle\Entity\TypePiste|null $corde
     *
     * @return Hippo
     */
    public function setCorde(\AppBundle\Entity\TypePiste $corde = null)
    {
        $this->corde = $corde;

        return $this;
    }

    /**
     * Get corde.
     *
     * @return \AppBundle\Entity\TypePiste|null
     */
    public function getCorde()
    {
        return $this->corde;
    }
}
