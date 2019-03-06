<?php

namespace App\DataFixtures;

use App\Entity\AnswerOption;
use App\Entity\ParticipantAnswer;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ParticipantAnswerFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $pa = new ParticipantAnswer();
        $pa->setFkQuestion($this->getReference('question3'));
        $pa->setFkTestParticipation($this->getReference('participation1'));
        $pa->setAnswer('participant answer');
        $this->addReference('ParticipantAnswer1',$pa );
        $manager->persist($pa);
        $manager->flush();
        $pa = new ParticipantAnswer();
        $pa->setFkQuestion(null);
        $pa->setFkTestParticipation($this->getReference('participation1'));
        $this->addReference('ParticipantAnswer2',$pa );
        $pa->addFkAnsweroption($this->getReference('AnswerOption1'));
        $pa->addFkAnsweroption($this->getReference('AnswerOption2'));
        $pa->addFkAnsweroption($this->getReference('AnswerOption3'));
        $pa->addFkAnsweroption($this->getReference('AnswerOption4'));
        $pa->addFkAnsweroption($this->getReference('AnswerOption5'));
        $manager->persist($pa);
        $manager->flush();
        $pa = new ParticipantAnswer();
        $pa->setFkQuestion(null);
        $pa->setFkTestParticipation($this->getReference('participation2'));
        $this->addReference('ParticipantAnswer3',$pa );
        $pa->addFkAnsweroption($this->getReference('AnswerOption6'));
        $pa->addFkAnsweroption($this->getReference('AnswerOption7'));
        $manager->persist($pa);
        $manager->flush();

    }
    public function getOrder() {
        return 400;
    }
}
