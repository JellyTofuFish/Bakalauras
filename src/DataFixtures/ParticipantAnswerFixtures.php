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
        $pa->setAnswer('textbox type question answer value');
        $this->addReference('ParticipantAnswer1',$pa );
        $manager->persist($pa);
        $manager->flush();
        $pa = new ParticipantAnswer();
        $pa->setFkQuestion(null);
        $pa->setFkTestParticipation($this->getReference('participation1'));
        $pa->setAnswer(null);
        $pa->addFkAnsweroption($this->getReference('AnswerOption1'));
        $this->addReference('ParticipantAnswer2',$pa );
        $manager->persist($pa);
        $manager->flush();
        $pa = new ParticipantAnswer();
        $pa->setFkQuestion(null);
        $pa->setFkTestParticipation($this->getReference('participation1'));
        $pa->setAnswer(null);
        $pa->addFkAnsweroption($this->getReference('AnswerOption3'));
        $pa->addFkAnsweroption($this->getReference('AnswerOption4'));
        $this->addReference('ParticipantAnswer3',$pa );
        $manager->persist($pa);
        $manager->flush();

        $pa = new ParticipantAnswer();
        $pa->setFkQuestion($this->getReference('question3'));
        $pa->setFkTestParticipation($this->getReference('participation2'));
        $pa->setAnswer('textbox type question answer value2');
        $this->addReference('ParticipantAnswer4',$pa );
        $manager->persist($pa);
        $manager->flush();
        $pa = new ParticipantAnswer();
        $pa->setFkQuestion(null);
        $pa->setFkTestParticipation($this->getReference('participation2'));
        $pa->setAnswer(null);
        $pa->addFkAnsweroption($this->getReference('AnswerOption2'));
        $this->addReference('ParticipantAnswer5',$pa );
        $manager->persist($pa);
        $manager->flush();
        $pa = new ParticipantAnswer();
        $pa->setFkQuestion(null);
        $pa->setFkTestParticipation($this->getReference('participation2'));
        $pa->setAnswer(null);
        $pa->addFkAnsweroption($this->getReference('AnswerOption5'));
        $this->addReference('ParticipantAnswer6',$pa );
        $manager->persist($pa);
        $manager->flush();


    }
    public function getOrder() {
        return 400;
    }
}
