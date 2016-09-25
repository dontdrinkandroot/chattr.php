<?php

namespace Dontdrinkandroot\ChattrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Dontdrinkandroot\Entity\DefaultUuidEntity;

/**
 * @ORM\Entity
 */
class UploadedResource extends DefaultUuidEntity
{
    /**
     * @ORM\Column()
     * @var int
     */
    private $length;

    /**
     * @ORM\Column()
     * @var string
     */
    private $mimeType;

    /**
     * @ORM\Column()
     * @var int
     */
    private $uploaded;

    /**
     * @ORM\ManyToOne(targetEntity="Dontdrinkandroot\ChattrBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     * @var User
     */
    private $uploader;
}
