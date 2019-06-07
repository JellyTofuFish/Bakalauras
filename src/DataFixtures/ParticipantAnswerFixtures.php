<?php

namespace App\DataFixtures;

use App\Entity\AnswerOption;
use App\Entity\ParticipantAnswer;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ParticipantAnswerFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

    }
    public function getOrder() {
        return 400;
    }
}
