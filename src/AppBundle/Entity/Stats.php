<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stats
 *
 * @ORM\Table(name="Stats")
 * @ORM\Entity
 */
class Stats
{
    /**
     * @var string
     *
     * @ORM\Column(name="hippo", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $hippo;

    /**
     * @var string
     *
     * @ORM\Column(name="typec", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $typec;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbCourses", type="integer", nullable=true)
     */
    private $nbcourses;


}
