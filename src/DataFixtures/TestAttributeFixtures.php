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
        $qa->setFkAttribute($this->getReference('attribute2'));
        $qa->setFkTest($this->getReference('test1'));
        $qa->setValue('#ffffff');
        $this->addReference('TestAttribute1',$qa );
        $manager->persist($qa);
        $manager->flush();

        $qa = new TestAttribute();
        $qa->setFkAttribute($this->getReference('attribute2'));
        $qa->setFkTest($this->getReference('test1'));
        $qa->setValue('#80bfff');
        $this->addReference('TestAttribute2',$qa );
        $manager->persist($qa);
        $manager->flush();

        $qa = new TestAttribute();
        $qa->setFkAttribute($this->getReference('attribute2'));
        $qa->setFkTest($this->getReference('test1'));
        $qa->setValue('#ff9b9b');
        $this->addReference('TestAttribute3',$qa );
        $manager->persist($qa);
        $manager->flush();

        $qa = new TestAttribute();
        $qa->setFkAttribute($this->getReference('attribute1'));
        $qa->setFkTest(null);
        $qa->setValue('#007bff');
        $manager->persist($qa);
        $manager->flush();
        $qa = new TestAttribute();
        $qa->setFkAttribute($this->getReference('attribute2'));
        $qa->setFkTest(null);
        $qa->setValue('#ffffff');
        $manager->persist($qa);
        $manager->flush();
    }
    public function getOrder() {
        return 300;
    }
}
