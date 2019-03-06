<?php

namespace App\DataFixtures;

use App\Entity\ParticipantAnswerAttribute;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ParticipantAnswerAttributeFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer1'));
        $paa->setFkQuestionAttribute($this->getReference('QuestionAttribute3'));
        $manager->persist($paa);
        $manager->flush();
        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer1'));
        $paa->setFkQuestionAttribute($this->getReference('QuestionAttribute4'));
        $manager->persist($paa);
        $manager->flush();
        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer2'));
        $paa->setFkQuestionAttribute($this->getReference('QuestionAttribute3'));
        $paa->setFkTestAttribute(null);
        $manager->persist($paa);
        $manager->flush();
        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer2'));
        $paa->setFkQuestionAttribute($this->getReference('QuestionAttribute4'));
        $paa->setFkTestAttribute(null);
        $manager->persist($paa);
        $manager->flush();
        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer3'));
        $paa->setFkQuestionAttribute($this->getReference('QuestionAttribute5'));
        $paa->setFkTestAttribute($this->getReference('TestAttribute2'));
        $manager->persist($paa);
        $manager->flush();
    }
    public function getOrder() {
        return 500;
    }
}
