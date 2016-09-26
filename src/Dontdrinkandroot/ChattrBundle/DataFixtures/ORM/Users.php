<?php

namespace Dontdrinkandroot\ChattrBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Dontdrinkandroot\DoctrineBundle\Tests\AbstractContainerAwareFixture;
use FOS\UserBundle\Model\UserManagerInterface;

class Users extends AbstractContainerAwareFixture
{
    const USER_1 = 'user-1';
    const USER_2 = 'user-2';
    const USER_3 = 'user-3';

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        /** @var UserManagerInterface $userManager */
        $userManager = $this->container->get('fos_user.user_manager');

        $user = $userManager->createUser();
        $user->setUsername('user1');
        $user->setEmail('user1@example.com');
        $user->setPassword('user1');
        $userManager->updateUser($user);
        $this->referenceRepository->setReference(self::USER_1, $user);

        $user = $userManager->createUser();
        $user->setUsername('user2');
        $user->setEmail('user2@example.com');
        $user->setPassword('user2');
        $userManager->updateUser($user);
        $this->referenceRepository->setReference(self::USER_2, $user);

        $user = $userManager->createUser();
        $user->setUsername('user3');
        $user->setEmail('user3@example.com');
        $user->setPassword('user3');
        $userManager->updateUser($user);
        $this->referenceRepository->setReference(self::USER_3, $user);

        $user = $userManager->createUser();
        $user->setUsername('admin');
        $user->setEmail('admin@example.com');
        $user->setPassword('admin');
        $user->addRole('ROLE_ADMIN');
        $userManager->updateUser($user);
    }
}
