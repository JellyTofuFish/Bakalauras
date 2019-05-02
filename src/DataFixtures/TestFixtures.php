<?php

namespace App\DataFixtures;
use App\Entity\Test;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class TestFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $test = new Test();
        $test->setName('deactivated test');
        $test->setDescription('deactivated test');
        $test->setCode('XXXXX');
        $test->setTestStart(new \DateTime('now'));
        $test->setCreatedAt();
        $test->setFkUser($this->getReference('user1'));
        $this->addReference('test2',$test );
        $manager->persist($test);

        $test1 = new Test();
        $test1->setName('active test');
        $test1->setDescription('active test with end date');
        $test1->setCode('YYYYY');
        $test1->setTestStart(new \DateTime('now'));
        $test1->setIsActive(true);
        $test1->setCreatedAt();
        $test1->setFkUser($this->getReference('user1'));
        $this->addReference('test1',$test1 );
        $manager->persist($test1);

        $manager->flush();

    }
    public function getOrder() {
        return 110;
    }
}
