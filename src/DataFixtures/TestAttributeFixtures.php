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
        $qa->setFkAttribute($this->getReference('attribute3'));
        $qa->setFkTest($this->getReference('test1'));
        $qa->setValue('#FE6E3C');
        $this->addReference('TestAttribute1',$qa );
        $manager->persist($qa);
        $manager->flush();

        $qa = new TestAttribute();
        $qa->setFkAttribute($this->getReference('attribute3'));
        $qa->setFkTest($this->getReference('test1'));
        $qa->setValue('#2AB14D');
        $this->addReference('TestAttribute2',$qa );
        $manager->persist($qa);
        $manager->flush();
    }
    public function getOrder() {
        return 300;
    }
}
