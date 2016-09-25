<?php

namespace Dontdrinkandroot\ChattrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Dontdrinkandroot\Entity\DefaultUuidEntity;

/**
 * @ORM\Entity
 */
class Message extends DefaultUuidEntity
{
    /**
     * @ORM\ManyToOne(targetEntity="Dontdrinkandroot\ChattrBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     * @var User
     */
    private $sender;

    /**
     * @ORM\Column(nullable=false)
     * @var int
     */
    private $sent;

    /**
     * @ORM\Column(nullable=false)
     * @var string
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="Dontdrinkandroot\ChattrBundle\Entity\UploadedResource")
     * @var UploadedResource
     */
    private $resource;
}
