<?php

namespace App\DataFixtures;

use App\Entity\ParticipantAnswerAttribute;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ParticipantAnswerAttributeFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

    }
    public function getOrder() {
        return 500;
    }
}
