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

    public function __construct(Channel $channel, User $user, bool $operator = false)
    {
        $this->channel = $channel;
        $this->user = $user;
        $this->operator = $operator;
    }

    /**
     * @return Channel
     */
    public function getChannel(): Channel
    {
        return $this->channel;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return boolean
     */
    public function isOperator(): bool
    {
        return $this->operator;
    }

    /**
     * @param boolean $operator
     */
    public function setOperator(bool $operator)
    {
        $this->operator = $operator;
    }
}
