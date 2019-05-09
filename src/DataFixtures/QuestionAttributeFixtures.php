<?php

namespace App\DataFixtures;

use App\Entity\QuestionAttribute;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class QuestionAttributeFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $qa = new QuestionAttribute();
        $qa->setFkAttribute($this->getReference('attribute1'));
        $qa->setFkQuestion($this->getReference('question1'));
        $qa->setValue('#0066CC');
        $this->addReference('QuestionAttribute1',$qa );
        $manager->persist($qa);
        $manager->flush();
        $qa = new QuestionAttribute();
        $qa->setFkAttribute($this->getReference('attribute1'));
        $qa->setFkQuestion($this->getReference('question1'));
        $qa->setValue('#CA170F');
        $this->addReference('QuestionAttribute2',$qa );
        $manager->persist($qa);
        $manager->flush();

        $qa = new QuestionAttribute();
        $qa->setFkAttribute($this->getReference('attribute2'));
        $qa->setFkQuestion($this->getReference('question3'));
        $qa->setValue('#FFD700');
        $this->addReference('QuestionAttribute3',$qa );
        $manager->persist($qa);
        $manager->flush();
        $qa = new QuestionAttribute();
        $qa->setFkAttribute($this->getReference('attribute2'));
        $qa->setFkQuestion($this->getReference('question3'));
        $qa->setValue('#88C8EA');
        $this->addReference('QuestionAttribute9',$qa );
        $manager->persist($qa);
        $manager->flush();

        $qa = new QuestionAttribute();
        $qa->setFkAttribute($this->getReference('attribute4'));
        $qa->setFkQuestion($this->getReference('question1'));
        $qa->setValue('0:0:0');
        $this->addReference('QuestionAttribute4',$qa );
        $manager->persist($qa);
        $manager->flush();

        $qa = new QuestionAttribute();
        $qa->setFkAttribute($this->getReference('attribute5'));
        $qa->setFkQuestion($this->getReference('question3'));
        $qa->setValue('10:1:1');
        $this->addReference('QuestionAttribute5',$qa );
        $manager->persist($qa);
        $manager->flush();
        $qa = new QuestionAttribute();
        $qa->setFkAttribute($this->getReference('attribute5'));
        $qa->setFkQuestion($this->getReference('question3'));
        $qa->setValue('11:0:1');
        $this->addReference('QuestionAttribute6',$qa );
        $manager->persist($qa);
        $manager->flush();

        $qa = new QuestionAttribute();
        $qa->setFkAttribute($this->getReference('attribute6'));
        $qa->setFkQuestion($this->getReference('question1'));
        $qa->setValue('pictute 1');
        $this->addReference('QuestionAttribute7',$qa );
        $manager->persist($qa);
        $manager->flush();
        $qa = new QuestionAttribute();
        $qa->setFkAttribute($this->getReference('attribute6'));
        $qa->setFkQuestion($this->getReference('question1'));
        $qa->setValue('pictute 2');
        $this->addReference('QuestionAttribute8',$qa );
        $manager->persist($qa);
        $manager->flush();
    }
    public function getOrder() {
        return 300;
    }
}
