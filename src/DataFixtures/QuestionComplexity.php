<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class QuestionComplexity extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $question = new \App\Entity\QuestionComplexity();
        $question->setName('simple');
        $manager->persist($question);
        $manager->flush();
        $question->setName('complex');
        $manager->persist($question);
        $manager->flush();
        $question->setName('intermediate');
        $manager->persist($question);
        $manager->flush();

    }
}
