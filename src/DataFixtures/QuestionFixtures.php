<?php

namespace App\DataFixtures;

use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class QuestionFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
         $question = new Question();
         $question->setQuestion('one pick test 1');
         $question->setDescription('one pick');
         $question->setType('one');
         $question->setFkGroup($this->getReference('group1'));
        $this->addReference('question1',$question );
        $manager->persist($question);
        $manager->flush();
         $question = new Question();
         $question->setQuestion('multi pick test 1');
         $question->setDescription('multi pick');
         $question->setType('multi');
         $question->setFkGroup($this->getReference('group1'));
        $this->addReference('question2',$question );
        $manager->persist($question);
        $manager->flush();
         $question = new Question();
         $question->setQuestion('open pick test 1');
         $question->setType('open');
         $question->setFkGroup($this->getReference('group1'));
        $this->addReference('question3',$question );
        $manager->persist($question);
        $manager->flush();
         $question = new Question();
         $question->setQuestion('presentation test 1');
         $question->setDescription('presentation test 1');
         $question->setType('presentation');
         $question->setFkGroup($this->getReference('group1'));
        $this->addReference('question4',$question );
        $manager->persist($question);
        $manager->flush();
        $question = new Question();
        $question->setQuestion('multi test 2');
        $question->setDescription('multi test 2');
        $question->setType('multi');
        $question->setFkGroup($this->getReference('group2'));
        $this->addReference('question5',$question );
        $manager->persist($question);
        $manager->flush();
        $question = new Question();
        $question->setQuestion('presentation no test');
        $question->setDescription('presentation no test');
        $question->setType('presentation');
        $question->setFkGroup(null);
        $this->addReference('question6',$question );
        $manager->persist($question);
        $manager->flush();
    }
    public function getOrder() {
        return 200;
    }
}
