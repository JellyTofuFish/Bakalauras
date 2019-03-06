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
        $test->setName('test1');
        $test->setDescription('test description');
        $test->setCode('XXXXX');
        $test->setTestStart(new \DateTime('now'));
        $test->setCreatedAt();
        $this->addReference('test1',$test );
        $manager->persist($test);

        $test1 = new Test();
        $test1->setName('test2');
        $test1->setDescription('test description');
        $test1->setCode('YYYYY');
        $test1->setTestStart(new \DateTime('now'));
        $test1->setIsActive(true);
        $test1->setCreatedAt();
        $this->addReference('test2',$test1 );
        $manager->persist($test1);

        $manager->flush();

    }
    public function getOrder() {
        return 100;
    }
}
