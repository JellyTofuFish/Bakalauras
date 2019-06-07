<?php

namespace App\DataFixtures;

use App\Entity\TestQuestion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class TestQuestionFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tq = new TestQuestion();
        $tq->setFkTest($this->getReference('test1'));
        $tq->setFkQuestion($this->getReference('question1'));
        $tq->setSerialNumber('1');
        $manager->persist($tq);
        $manager->flush();

        $tq = new TestQuestion();
        $tq->setFkTest($this->getReference('test1'));
        $tq->setFkQuestion($this->getReference('question2'));
        $tq->setSerialNumber('2');
        $manager->persist($tq);
        $manager->flush();

        $tq = new TestQuestion();
        $tq->setFkTest($this->getReference('test1'));
        $tq->setFkQuestion($this->getReference('question3'));
        $tq->setSerialNumber('3');
        $manager->persist($tq);
        $manager->flush();

        $tq = new TestQuestion();
       ;
        $tq->setFkQuestion($this->getReference('question4'));
        $tq->setFkTest($this->getReference('test1'));
        $tq->setSerialNumber('4');
        $manager->persist($tq);
        $manager->flush();

        $tq = new TestQuestion();
        $tq->setFkTest($this->getReference('test1'));
        $tq->setFkQuestion($this->getReference('question7'));
        $tq->setSerialNumber('5');
        $manager->persist($tq);
        $manager->flush();

        $tq = new TestQuestion();
        $tq->setFkTest($this->getReference('test1'));
        $tq->setFkQuestion($this->getReference('question5'));
        $tq->setSerialNumber('6');
        $manager->persist($tq);
        $manager->flush();

        $tq = new TestQuestion();
        $tq->setFkTest($this->getReference('test1'));
        $tq->setFkQuestion($this->getReference('question6'));
        $tq->setSerialNumber('7');
        $manager->persist($tq);
        $manager->flush();
    }
    public function getOrder() {
        return 200;
    }
}
