<?php

namespace App\DataFixtures;

use App\Entity\File;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class FileFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
         $file = new File();
         $file->setName('picture1');
         $file->setType('photo');
         $file->setFkQuestion($this->getReference('question1'));
         $manager->persist($file);
        $manager->flush();
        $file = new File();
         $file->setName('picture2');
         $file->setType('photo');
         $file->setFkQuestion($this->getReference('question1'));
         $manager->persist($file);
        $manager->flush();
        $file = new File();
         $file->setName('picture3');
         $file->setType('photo');
         $file->setFkQuestion($this->getReference('question2'));
         $manager->persist($file);
        $manager->flush();
        $file = new File();
         $file->setName('sound1');
         $file->setType('sound');
         $file->setFkQuestion($this->getReference('question3'));
         $manager->persist($file);
        $manager->flush();

    }
    public function getOrder() {
        return 300;
    }
}
