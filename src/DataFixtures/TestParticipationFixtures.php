<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class TestParticipationFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $participation = new \App\Entity\TestParticipation();
        $participation->setFkTest($this->getReference('test1'));
        $participation->setIsTestOver(1);
        $participation->setTestStartedAt(new \DateTime('now'));
        $participation->setTestEndedAt((new \DateTime('now')));
        $this->addReference('participation1',$participation );
        $manager->persist($participation);
        $manager->flush();

        $participation = new \App\Entity\TestParticipation();
        $participation->setFkTest($this->getReference('test1'));
        $participation->setIsTestOver(1);
        $participation->setTestStartedAt(new \DateTime('now'));
        $participation->setTestEndedAt((new \DateTime('now')));
        $this->addReference('participation2',$participation );
        $manager->persist($participation);
        $manager->flush();

        $participation = new \App\Entity\TestParticipation();
        $participation->setFkTest($this->getReference('test1'));
        $participation->setIsTestOver(1);
        $participation->setTestStartedAt(new \DateTime('now'));
        $participation->setTestEndedAt((new \DateTime('2019-04-01')));
        $this->addReference('participation3',$participation );
        $manager->persist($participation);
        $manager->flush();

        $participation = new \App\Entity\TestParticipation();
        $participation->setFkTest($this->getReference('test1'));
        $participation->setIsTestOver(0);
        $participation->setTestStartedAt(new \DateTime('now'));
        $this->addReference('participation4',$participation );
        $manager->persist($participation);
        $manager->flush();

    }
    public function getOrder() {
        return 200;
    }
}
