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
         $question->setQuestionName('one pick test 1');
         $question->setQuestionWording('one pick test 1');
         $question->setDescription('one pick');
         $question->setType('one');
         $question->setFkGroup($this->getReference('group1'));
         $question->setFkUser($this->getReference('user1'));
        $this->addReference('question1',$question );
        $manager->persist($question);
        $manager->flush();
         $question = new Question();
         $question->setQuestionName('multi pick test 1');
         $question->setQuestionWording('multi pick test 1');
         $question->setDescription('multi pick');
         $question->setType('multi');
         $question->setFkGroup($this->getReference('group1'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question2',$question );
        $manager->persist($question);
        $manager->flush();
         $question = new Question();
         $question->setQuestionName('open pick test 1');
         $question->setQuestionWording('open pick test 1');
         $question->setType('open');
         $question->setFkGroup($this->getReference('group1'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question3',$question );
        $manager->persist($question);
        $manager->flush();
         $question = new Question();
         $question->setQuestionName('presentation test 1');
         $question->setQuestionWording('presentation test 1');
         $question->setDescription('presentation test 1');
         $question->setType('presentation');
         $question->setFkGroup($this->getReference('group1'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question4',$question );
        $manager->persist($question);
        $manager->flush();
        $question = new Question();
        $question->setQuestionName('multi test 2');
        $question->setQuestionWording('multi test 2');
        $question->setDescription('multi test 2');
        $question->setType('multi');
        $question->setFkGroup($this->getReference('group2'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question5',$question );
        $manager->persist($question);
        $manager->flush();
        $question = new Question();
        $question->setQuestionName('presentation no test');
        $question->setQuestionWording('presentation no test');
        $question->setDescription('presentation no test');
        $question->setType('presentation');
        $question->setFkGroup(null);
        $question->setFkUser($this->getReference('user2'));
        $this->addReference('question6',$question );
        $manager->persist($question);
        $manager->flush();
        $question = new Question();
        $question->setQuestionName('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate, lorem ut gravida congue, dolor sapien venenatis nisi, vitae ornare tellus turpis a ante. Nam suscipit nisi ac quam cursus, ut pulvinar lacus mattis. Nam at ex non sed.');
        $question->setQuestionWording('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate, lorem ut gravida congue, dolor sapien venenatis nisi, vitae ornare tellus turpis a ante. Nam suscipit nisi ac quam cursus, ut pulvinar lacus mattis. Nam at ex non sed.');
        $question->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate, lorem ut gravida congue, dolor sapien venenatis nisi, vitae ornare tellus turpis a ante. Nam suscipit nisi ac quam cursus, ut pulvinar lacus mattis. Nam at ex non sed.');
        $question->setType('active');
        $question->setFkGroup(null);
        $question->setFkUser($this->getReference('user2'));
        $this->addReference('question7',$question );
        $manager->persist($question);
        $manager->flush();
    }
    public function getOrder() {
        return 200;
    }
}
