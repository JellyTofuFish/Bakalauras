<?php

namespace App\DataFixtures;

use App\Entity\TestParticipation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class TestParticipationFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

    }
    public function getOrder() {
        return 200;
    }
}
