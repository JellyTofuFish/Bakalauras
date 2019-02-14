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
        $state->setName('idle');
        $manager->persist($state);
        $state->setName('building');
        $manager->persist($state);

        $manager->flush();
    }
}
