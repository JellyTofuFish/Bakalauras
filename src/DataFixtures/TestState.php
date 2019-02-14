<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TestState extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $state = new \App\Entity\TestState();
        $state->setName('active');
        $manager->persist($state);
        $manager->flush();
        $state->setName('idle');
        $manager->persist($state);
        $manager->flush();
        $state->setName('building');
        $manager->persist($state);
        $manager->flush();
    }
}
