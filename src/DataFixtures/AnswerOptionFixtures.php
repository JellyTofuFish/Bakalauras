<?php

namespace App\DataFixtures;

use App\Entity\AnswerOption;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AnswerOptionFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $ao = new AnswerOption();
        $ao->setAnswer('answer1 checkbox');
        $ao->setFkQuestion($this->getReference('question1'));
        $this->addReference('AnswerOption1',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer('answer2 checkbox');
        $ao->setFkQuestion($this->getReference('question1'));
        $this->addReference('AnswerOption2',$ao );
        $manager->persist($ao);
        $manager->flush();

        $ao = new AnswerOption();
        $ao->setAnswer('answer1 radio');
        $ao->setFkQuestion($this->getReference('question2'));
        $this->addReference('AnswerOption3',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer('answer2 radio');
        $ao->setFkQuestion($this->getReference('question2'));
        $this->addReference('AnswerOption4',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer('answer3 radio');
        $ao->setFkQuestion($this->getReference('question2'));
        $this->addReference('AnswerOption5',$ao );
        $manager->persist($ao);
        $manager->flush();

        $ao = new AnswerOption();
        $ao->setAnswer('answer1 checkbox');
        $ao->setFkQuestion($this->getReference('question5'));
        $this->addReference('AnswerOption6',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer('answer2 checkbox');
        $ao->setFkQuestion($this->getReference('question5'));
        $this->addReference('AnswerOption7',$ao );
        $manager->persist($ao);
        $manager->flush();
    }
    public function getOrder() {
        return 300;
    }
}
