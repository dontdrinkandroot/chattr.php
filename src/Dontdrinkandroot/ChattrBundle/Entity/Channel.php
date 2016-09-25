<?php

namespace Dontdrinkandroot\ChattrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Dontdrinkandroot\Entity\DefaultUuidEntity;

/**
 * @ORM\Entity
 */
class Channel extends DefaultUuidEntity
{
    /**
     * @ORM\Column(nullable=false)
     * @var string
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Dontdrinkandroot\ChattrBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     * @var User
     */
    private $creator;

    /**
     * @ORM\Column(nullable=false)
     * @var int
     */
    private $created;

    /**
     * @ORM\Column(nullable=false)
     * @var bool
     */
    private $public;

}
