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
        $user = new User();
        $user->setEmail('quidelantoine@gmail.com');
        $user->setRoles(array('ROLE_USER','ROLE_ADMIN'));
        $user->setPassword($this->passwordEncoder->encodePassword($user, 'michel'));
        $manager->persist($user);

        $user2 = new User();
        $user2->setEmail('quidelantoine@yahoo.fr');
        $user2->setRoles(array('ROLE_USER'));
        $user2->setPassword($this->passwordEncoder->encodePassword($user2, 'michel'));
        $manager->persist($user2);

        $manager->flush();

        $this->addReference('user1',$user);
        $this->addReference('user2',$user2);
    }
}
