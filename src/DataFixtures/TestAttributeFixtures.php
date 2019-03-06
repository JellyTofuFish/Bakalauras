<?php

namespace App\DataFixtures;

use App\Entity\TestAttribute;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TestAttributeFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $qa = new TestAttribute();
        $qa->setFkAttribute($this->getReference('attribute6'));
        $qa->setFkTest($this->getReference('test1'));
        $qa->setValue('orange');
        $this->addReference('TestAttribute1',$qa );
        $manager->persist($qa);
        $manager->flush();
        $qa = new TestAttribute();
        $qa->setFkAttribute($this->getReference('attribute5'));
        $qa->setFkTest($this->getReference('test2'));
        $qa->setValue('green');
        $this->addReference('TestAttribute2',$qa );
        $manager->persist($qa);
        $manager->flush();
    }
    public function getOrder() {
        return 300;
    }
}
