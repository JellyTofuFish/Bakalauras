<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class QuestionComplexity extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $question1 = new \App\Entity\QuestionComplexity();
        $question2 = new \App\Entity\QuestionComplexity();
        $question3 = new \App\Entity\QuestionComplexity();
        $question1->setName('simple');
        $question2->setName('complex');
        $question3->setName('intermediate');
        $manager->persist($question1);
        $manager->persist($question2);
        $manager->persist($question3);

        $manager->flush();
    }
}
