<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TestState extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $state1 = new \App\Entity\TestState();
        $state2 = new \App\Entity\TestState();
        $state3 = new \App\Entity\TestState();
        $state1->setName('active');
        $state2->setName('idle');
        $state3->setName('building');
        $manager->persist($state1);
        $manager->persist($state2);
        $manager->persist($state3);
        $manager->flush();
    }
}
