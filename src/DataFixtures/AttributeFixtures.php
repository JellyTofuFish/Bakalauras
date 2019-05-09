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
        $attribute->setName('buttoncolor');
        $attribute->setDescription('question1 button colors');
        $manager->persist($attribute);
        $this->addReference('attribute1',$attribute );
        $manager->flush();

        $attribute = new Attribute();
        $attribute->setName('backgroundcolor');
        $attribute->setDescription( 'question3 background colors');
        $this->addReference('attribute2',$attribute );
        $manager->persist($attribute);
        $manager->flush();

        $attribute = new Attribute();
        $attribute->setName('buttoncolor');
        $attribute->setDescription('test 1 button colors');
        $this->addReference('attribute3',$attribute );
        $manager->persist($attribute);
        $manager->flush();

        $attribute = new Attribute();
        $attribute->setName('time');
        $attribute->setDescription('question1 time attribute');
        $this->addReference('attribute4',$attribute );
        $manager->persist($attribute);
        $manager->flush();

        $attribute = new Attribute();
        $attribute->setName('displaytime');
        $attribute->setDescription('question3 display time attrubute');
        $this->addReference('attribute5',$attribute );
        $manager->persist($attribute);
        $manager->flush();

        $attribute = new Attribute();
        $attribute->setName('picture');
        $attribute->setDescription('question1 pictures');
        $this->addReference('attribute6',$attribute );
        $manager->persist($attribute);
        $manager->flush();

    }
    public function getOrder() {
        return 100;
    }
}
