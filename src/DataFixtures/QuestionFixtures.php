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
         $question->setQuestion('question 1?');
         $question->setDescription('question description');
         $question->setType('one');
         $question->setFkGroup($this->getReference('group1'));
         $question->setFkTest($this->getReference('test1'));
        $this->addReference('question1',$question );
        $manager->persist($question);
        $manager->flush();
         $question = new Question();
         $question->setQuestion('question 2?');
         $question->setDescription('question description');
         $question->setType('multi');
         $question->setFkGroup($this->getReference('group1'));
         $question->setFkTest($this->getReference('test1'));
        $this->addReference('question2',$question );
        $manager->persist($question);
        $manager->flush();
         $question = new Question();
         $question->setQuestion('question 3?');
         $question->setType('open');
         $question->setFkGroup($this->getReference('group1'));
         $question->setFkTest($this->getReference('test1'));
        $this->addReference('question3',$question );
        $manager->persist($question);
        $manager->flush();
         $question = new Question();
         $question->setQuestion('question 4?');
         $question->setDescription('question description');
         $question->setType('presentation');
         $question->setFkGroup($this->getReference('group1'));
         $question->setFkTest($this->getReference('test1'));
        $this->addReference('question4',$question );
        $manager->persist($question);
        $manager->flush();
        $question = new Question();
        $question->setQuestion('question 5?');
        $question->setDescription('question description');
        $question->setType('presentation');
        $question->setFkGroup($this->getReference('group2'));
        $question->setFkTest($this->getReference('test2'));
        $this->addReference('question5',$question );
        $manager->persist($question);
        $manager->flush();
        $question = new Question();
        $question->setQuestion('question 6?');
        $question->setDescription('question description');
        $question->setType('multi');
        $question->setFkGroup(null);
        $this->addReference('question6',$question );
        $manager->persist($question);
        $manager->flush();
    }
    public function getOrder() {
        return 200;
    }
}
