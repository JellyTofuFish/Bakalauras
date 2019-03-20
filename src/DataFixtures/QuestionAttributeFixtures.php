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
         $qa->setValue('blue');
         $this->addReference('QuestionAttribute1',$qa );
         $manager->persist($qa);
         $manager->flush();
         $qa = new QuestionAttribute();
         $qa->setFkAttribute($this->getReference('attribute2'));
         $qa->setFkQuestion($this->getReference('question1'));
         $qa->setValue('red');
        $this->addReference('QuestionAttribute2',$qa );
         $manager->persist($qa);
         $manager->flush();
         $qa = new QuestionAttribute();
         $qa->setFkAttribute($this->getReference('attribute3'));
         $qa->setFkQuestion($this->getReference('question3'));
         $qa->setValue('yellow');
        $this->addReference('QuestionAttribute3',$qa );
         $manager->persist($qa);
         $manager->flush();
         $qa = new QuestionAttribute();
         $qa->setFkAttribute($this->getReference('attribute4'));
         $qa->setFkQuestion($this->getReference('question3'));
         $qa->setValue('blue');
        $this->addReference('QuestionAttribute4',$qa );
         $manager->persist($qa);
         $manager->flush();
        $qa = new QuestionAttribute();
        $qa->setFkAttribute($this->getReference('attribute3'));
        $qa->setFkQuestion($this->getReference('question5'));
        $qa->setValue('blue');
        $this->addReference('QuestionAttribute5',$qa );
        $manager->persist($qa);
        $manager->flush();
        $qa = new QuestionAttribute();
        $qa->setFkAttribute($this->getReference('attribute4'));
        $qa->setFkQuestion($this->getReference('question5'));
        $qa->setValue('blue');
        $this->addReference('QuestionAttribute6',$qa );
        $manager->persist($qa);
        $manager->flush();
    }
    public function getOrder() {
        return 300;
    }
}
