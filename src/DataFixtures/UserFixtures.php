<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setUsername("admin" . $i);
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                "qwerty"
            ));
            $user->setRoles(["ROLE_ADMIN"]);
            $manager->persist($user);
        }

        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setUsername("user" . $i);
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                "qwerty"
            ));
            $user->setRoles(["ROLE_USER"]);
            $manager->persist($user);
        }
        $manager->flush();
    }
}
