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
        $paa->setFkQuestionAttribute(null);
        $paa->setFkTestAttribute($this->getReference('TestAttribute1'));
        $manager->persist($paa);
        $manager->flush();
        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer1'));
        $paa->setFkQuestionAttribute($this->getReference('QuestionAttribute3'));
        $paa->setFkTestAttribute(null);
        $manager->persist($paa);
        $manager->flush();
        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer1'));
        $paa->setFkQuestionAttribute($this->getReference('QuestionAttribute5'));
        $paa->setFkTestAttribute(null);
        $manager->persist($paa);
        $manager->flush();

        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer2'));
        $paa->setFkQuestionAttribute($this->getReference('QuestionAttribute1'));
        $paa->setFkTestAttribute($this->getReference('TestAttribute2'));
        $manager->persist($paa);
        $manager->flush();
        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer2'));
        $paa->setFkQuestionAttribute($this->getReference('QuestionAttribute4'));
        $paa->setValue(85);
        $paa->setFkTestAttribute(null);
        $manager->persist($paa);
        $manager->flush();
        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer2'));
        $paa->setFkQuestionAttribute($this->getReference('QuestionAttribute7'));
        $paa->setFkTestAttribute(null);
        $manager->persist($paa);
        $manager->flush();

        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer3'));
        $paa->setFkQuestionAttribute(null);
        $paa->setFkTestAttribute($this->getReference('TestAttribute1'));
        $manager->persist($paa);
        $manager->flush();

        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer4'));
        $paa->setFkQuestionAttribute(null);
        $paa->setFkTestAttribute($this->getReference('TestAttribute2'));
        $manager->persist($paa);
        $manager->flush();
        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer4'));
        $paa->setFkQuestionAttribute($this->getReference('QuestionAttribute9'));
        $paa->setFkTestAttribute(null);
        $manager->persist($paa);
        $manager->flush();
        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer4'));
        $paa->setFkQuestionAttribute($this->getReference('QuestionAttribute6'));
        $paa->setFkTestAttribute(null);
        $manager->persist($paa);
        $manager->flush();

        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer5'));
        $paa->setFkQuestionAttribute($this->getReference('QuestionAttribute2'));
        $paa->setFkTestAttribute($this->getReference('TestAttribute2'));
        $manager->persist($paa);
        $manager->flush();
        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer5'));
        $paa->setFkQuestionAttribute($this->getReference('QuestionAttribute4'));
        $paa->setValue(120);
        $paa->setFkTestAttribute(null);
        $manager->persist($paa);
        $manager->flush();
        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer5'));
        $paa->setFkQuestionAttribute($this->getReference('QuestionAttribute8'));
        $paa->setFkTestAttribute(null);
        $manager->persist($paa);
        $manager->flush();

        $paa = new ParticipantAnswerAttribute();
        $paa->setFkParticipantAnswer($this->getReference('ParticipantAnswer6'));
        $paa->setFkQuestionAttribute(null);
        $paa->setFkTestAttribute($this->getReference('TestAttribute2'));
        $manager->persist($paa);
        $manager->flush();

    }
    public function getOrder() {
        return 500;
    }
}
