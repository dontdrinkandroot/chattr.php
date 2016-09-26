<?php

namespace Dontdrinkandroot\ChattrBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Dontdrinkandroot\ChattrBundle\Entity\Channel;
use Dontdrinkandroot\ChattrBundle\Entity\Participant;

class Channels extends AbstractFixture implements DependentFixtureInterface
{
    use ChattrReferenceTrait;

    const CHANNEL_1 = 'channel-1';
    const CHANNEL_2 = 'channel-2';
    const CHANNEL_DIRECT = 'channel-direct';

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
        $channel = new Channel();
        $channel->setName('Channel One');
        $channel->setCreator($this->getUserReference(Users::USER_1));
        $channel->setCreated(round(microtime(true) * 1000));
        $manager->persist($channel);

        $participant = new Participant($channel, $this->getUserReference(Users::USER_1), true);
        $manager->persist($participant);

        $participant = new Participant($channel, $this->getUserReference(Users::USER_2));
        $manager->persist($participant);

        $participant = new Participant($channel, $this->getUserReference(Users::USER_3));
        $manager->persist($participant);

        $this->setReference(self::CHANNEL_1, $channel);

        $channel = new Channel();
        $channel->setName('Channel Two');
        $channel->setCreator($this->getUserReference(Users::USER_1));
        $channel->setCreated(round(microtime(true) * 1000));
        $manager->persist($channel);

        $participant = new Participant($channel, $this->getUserReference(Users::USER_2), true);
        $manager->persist($participant);

        $participant = new Participant($channel, $this->getUserReference(Users::USER_1));
        $manager->persist($participant);

        $this->setReference(self::CHANNEL_2, $channel);

        $channel = new Channel();
        $channel->setDirect(true);
        $manager->persist($channel);

        $participant = new Participant($channel, $this->getUserReference(Users::USER_1));
        $manager->persist($participant);

        $participant = new Participant($channel, $this->getUserReference(Users::USER_3));
        $manager->persist($participant);

        $this->setReference(self::CHANNEL_DIRECT, $channel);

        $manager->flush();
    }
}
