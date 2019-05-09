<?php

namespace App\DataFixtures;

use App\Entity\TestParticipation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class TestParticipationFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $participation = new TestParticipation();
        $participation->setFkTest($this->getReference('test1'));
        $participation->setIsTestOver(1);
        $participation->setTestStartedAt();
        $participation->setTestEndedAt((new \DateTime('now')));
        $this->addReference('participation1',$participation );
        $manager->persist($participation);
        $manager->flush();

        $participation = new TestParticipation();
        $participation->setFkTest($this->getReference('test1'));
        $participation->setIsTestOver(1);
        $participation->setTestStartedAt();
        $participation->setTestEndedAt((new \DateTime('now')));
        $this->addReference('participation2',$participation );
        $manager->persist($participation);
        $manager->flush();

        $participation =new TestParticipation();
        $participation->setFkTest($this->getReference('test1'));
        $participation->setIsTestOver(0);
        $participation->setTestStartedAt();
        $this->addReference('participation3',$participation );
        $manager->persist($participation);
        $manager->flush();

    }
    public function getOrder() {
        return 200;
    }
}
