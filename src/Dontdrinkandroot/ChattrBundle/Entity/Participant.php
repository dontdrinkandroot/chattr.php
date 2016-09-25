<?php

namespace Dontdrinkandroot\ChattrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Dontdrinkandroot\Entity\GeneratedIntegerIdEntity;

/**
 * @ORM\Entity
 */
class Participant extends GeneratedIntegerIdEntity
{
    /**
     * @ORM\ManyToOne(targetEntity="Dontdrinkandroot\ChattrBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     * @var User
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Dontdrinkandroot\ChattrBundle\Entity\Channel")
     * @ORM\JoinColumn(nullable=false)
     * @var Channel
     */
    private $channel;

    /**
     * @ORM\Column(nullable=false)
     * @var bool
     */
    private $operator;
}
