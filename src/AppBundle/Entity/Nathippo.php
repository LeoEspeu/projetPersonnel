<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nathippo
 *
 * @ORM\Table(name="NatHippo")
 * @ORM\Entity
 */
class Nathippo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Hippo", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hippo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nationalite", type="string", length=30, nullable=true)
     */
    private $nationalite;


}
