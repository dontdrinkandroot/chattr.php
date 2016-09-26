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
     * @ORM\Column(nullable=true)
     * @var string
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Dontdrinkandroot\ChattrBundle\Entity\User")
     * @ORM\JoinColumn
     * @var User
     */
    private $creator;

    /**
     * @ORM\Column(nullable=true)
     * @var int
     */
    private $created;

    /**
     * @ORM\Column(nullable=false)
     * @var bool
     */
    private $direct = false;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getCreator(): User
    {
        return $this->creator;
    }

    public function setCreator(User $creator)
    {
        $this->creator = $creator;
    }

    public function getCreated(): int
    {
        return $this->created;
    }

    public function setCreated(int $created)
    {
        $this->created = $created;
    }

    public function isDirect():bool
    {
        return $this->direct;
    }

    public function setDirect(bool $direct)
    {
        $this->direct = $direct;
    }
}
