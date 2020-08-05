<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypePiste
 *
 * @ORM\Table(name="type_piste", uniqueConstraints={@ORM\UniqueConstraint(name="type", columns={"type"})}, indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class TypePiste
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
     * @ORM\Column(name="type", type="string", length=25, nullable=false)
     */
    private $type;


}
