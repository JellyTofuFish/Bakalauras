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
        $ao->setAnswer('Vyras');
        $ao->setFkQuestion($this->getReference('question2'));
        $this->addReference('AnswerOption1',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer('Moteris');
        $ao->setFkQuestion($this->getReference('question2'));
        $this->addReference('AnswerOption2',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer('Kita');
        $ao->setFkQuestion($this->getReference('question2'));
        $this->addReference('AnswerOption3',$ao );
        $manager->persist($ao);
        $manager->flush();

        $ao = new AnswerOption();
        $ao->setAnswer('Taip');
        $ao->setFkQuestion($this->getReference('question3'));
        $this->addReference('AnswerOption4',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer('Retkarčiais');
        $ao->setFkQuestion($this->getReference('question3'));
        $this->addReference('AnswerOption5',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer('Ne');
        $ao->setFkQuestion($this->getReference('question3'));
        $this->addReference('AnswerOption6',$ao );
        $manager->persist($ao);
        $manager->flush();

        $ao = new AnswerOption();
        $ao->setAnswer('Kartą per mėnesį');
        $ao->setFkQuestion($this->getReference('question4'));
        $this->addReference('AnswerOption7',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer('Kartą per savaitę');
        $ao->setFkQuestion($this->getReference('question4'));
        $this->addReference('AnswerOption8',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer('Trumpai kiekvieną dieną');
        $ao->setFkQuestion($this->getReference('question4'));
        $this->addReference('AnswerOption9',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer('Kelis kartus per dieną');
        $ao->setFkQuestion($this->getReference('question4'));
        $this->addReference('AnswerOption10',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer( 'Kai tik yra galimybė');
        $ao->setFkQuestion($this->getReference('question4'));
        $this->addReference('AnswerOption11',$ao );
        $manager->persist($ao);
        $manager->flush();

        $ao = new AnswerOption();
        $ao->setAnswer('Facebook');
        $ao->setFkQuestion($this->getReference('question7'));
        $this->addReference('AnswerOption12',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer('Reddit');
        $ao->setFkQuestion($this->getReference('question7'));
        $this->addReference('AnswerOption13',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer('Twitter');
        $ao->setFkQuestion($this->getReference('question7'));
        $this->addReference('AnswerOption14',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer('Instagram');
        $ao->setFkQuestion($this->getReference('question7'));
        $this->addReference('AnswerOption15',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer( 'Snapchat');
        $ao->setFkQuestion($this->getReference('question7'));
        $this->addReference('AnswerOption16',$ao );
        $manager->persist($ao);
        $manager->flush();
        $ao = new AnswerOption();
        $ao->setAnswer( 'Kita');
        $ao->setFkQuestion($this->getReference('question7'));
        $this->addReference('AnswerOption17',$ao );
        $manager->persist($ao);
        $manager->flush();
    }
    public function getOrder() {
        return 300;
    }
}
