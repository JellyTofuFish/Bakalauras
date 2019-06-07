<?php

namespace App\DataFixtures;

use App\Entity\QuestionAttribute;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class QuestionAttributeFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
    }
    public function getOrder() {
        return 300;
    }
}
