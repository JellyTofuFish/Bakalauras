<?php

namespace App\DataFixtures;
use App\Entity\User;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture implements OrderedFixtureInterface
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail(sprintf('email1@e.e'));
        $user->setName('Bob');
        $user->setLastName('Johnathan');
        $user->setPhone('+1-202-555-0112');
        $user->setPassword($this->passwordEncoder->encodePassword( $user,'e'));
        $user->setActivation(true);
        $manager->persist($user);
        $manager->flush();
        $this->addReference('user1',$user );

        $user = new User();
        $user->setEmail(sprintf('email2@example.com'));
        $user->setName('Dante');
        $user->setLastName('Broncs');
        $user->setPassword($this->passwordEncoder->encodePassword($user,'password123'));
        $user->setActivation(true);
        $manager->persist($user);
        $manager->flush();
        $this->addReference('user2',$user );
    }
    public function getOrder() {
        return 100;
    }
}
