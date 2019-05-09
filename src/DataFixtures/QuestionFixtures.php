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
        $question->setQuestionName('test1 question1');
        $question->setQuestionWording('test1 question1 checkbox type');
        $question->setDescription('checkbox type');
        $question->setType('one');
        $question->setRequired(true);
        $question->setFkGroup($this->getReference('group1'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question1',$question );
        $manager->persist($question);
        $manager->flush();

        $question = new Question();
        $question->setQuestionName('test1 question2');
        $question->setQuestionWording('test1 question2 radio type');
        $question->setDescription('radio type');
        $question->setType('multi');
        $question->setRequired(true);
        $question->setFkGroup($this->getReference('group1'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question2',$question );
        $manager->persist($question);
        $manager->flush();

        $question = new Question();
        $question->setQuestionName('test1 question3');
        $question->setQuestionWording('test1 question3 textbox type');
        $question->setDescription('textbox type');
        $question->setType('open');
        $question->setRequired(true);
        $question->setFkGroup($this->getReference('group1'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question3',$question );
        $manager->persist($question);
        $manager->flush();

        $question = new Question();
        $question->setQuestionName('test1 question4');
        $question->setQuestionWording('test1 question3 presentation');
        $question->setDescription('presentation');
        $question->setType('presentation');
        $question->setRequired(true);
        $question->setFkGroup($this->getReference('group1'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question4',$question );
        $manager->persist($question);
        $manager->flush();

        $question = new Question();
        $question->setQuestionName('test2 question1');
        $question->setQuestionWording('test1 question1 checkbox type');
        $question->setDescription('checkbox type');
        $question->setType('multi');
        $question->setFkGroup($this->getReference('group2'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question5',$question );
        $manager->persist($question);
        $manager->flush();

        $question = new Question();
        $question->setQuestionName('no test question1');
        $question->setQuestionWording('no test question1 presentation');
        $question->setDescription('presentation');
        $question->setType('presentation');
        $question->setFkGroup(null);
        $question->setFkUser($this->getReference('user2'));
        $this->addReference('question6',$question );
        $manager->persist($question);
        $manager->flush();

    }
    public function getOrder() {
        return 200;
    }
}
