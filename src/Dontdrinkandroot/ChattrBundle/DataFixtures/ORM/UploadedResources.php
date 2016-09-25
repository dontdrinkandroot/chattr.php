<?php

namespace Dontdrinkandroot\ChattrBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UploadedResources extends AbstractFixture implements DependentFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    function getDependencies()
    {
        return [Users::class];
    }

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
    }
}
