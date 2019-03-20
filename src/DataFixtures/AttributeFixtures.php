<?php

namespace App\DataFixtures;
use App\Entity\Attribute;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class AttributeFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $attribute = new Attribute();
        $attribute->setName('buttoncolor question1');
        $attribute->setDescription('button color blue');
        $manager->persist($attribute);
        $this->addReference('attribute1',$attribute );
        $manager->flush();
        $attribute = new Attribute();
        $attribute->setName('buttoncolor question1');
        $attribute->setDescription('button color red');
        $this->addReference('attribute2',$attribute );
        $manager->persist($attribute);
        $manager->flush();
        $attribute = new Attribute();
        $attribute->setName('backgroundcolor question3');
        $attribute->setDescription('background color yellow');
        $this->addReference('attribute3',$attribute );
        $manager->persist($attribute);
        $manager->flush();
        $attribute = new Attribute();
        $attribute->setName('backgroundcolor question3');
        $attribute->setDescription('background color blue');
        $this->addReference('attribute4',$attribute );
        $manager->persist($attribute);
        $manager->flush();
        $attribute = new Attribute();
        $attribute->setName('buttoncolor test 2');
        $attribute->setDescription('button color blue');
        $this->addReference('attribute5',$attribute );
        $manager->persist($attribute);
        $manager->flush();
        $attribute = new Attribute();
        $attribute->setName('backgroundcolor test 1');
        $attribute->setDescription('background color main orange');
        $this->addReference('attribute6',$attribute );
        $manager->persist($attribute);
        $manager->flush();
    }
    public function getOrder() {
        return 100;
    }
}
