<?php

namespace Dontdrinkandroot\ChattrBundle\DataFixtures\ORM;

use Dontdrinkandroot\ChattrBundle\Entity\Channel;
use Dontdrinkandroot\ChattrBundle\Entity\User;
use Dontdrinkandroot\DoctrineBundle\Tests\ReferenceTrait;

trait ChattrReferenceTrait
{
    use ReferenceTrait;

    protected function getUserReference(string $name): User
    {
        return $this->getAssertedReference($name, User::class);
    }

    protected function getChannelReference(string $name): Channel
    {
        return $this->getAssertedReference($name, Channel::class);
    }
}
