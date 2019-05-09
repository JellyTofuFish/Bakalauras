<?php

namespace App\DataFixtures;
use App\Entity\GroupList;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class GrouplistFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $group = new GroupList();
        $group->setName('Test group main');
        $group->setDescription('group for active test1 questions');
        $this->addReference('group1',$group );
        $manager->persist($group);
        $manager->flush();

        $group = new GroupList();
        $group->setName('Test group secondary');
        $group->setDescription('group for other questions');
        $this->addReference('group2',$group );
        $manager->persist($group);
        $manager->flush();
    }
    public function getOrder() {
        return 100;
    }
}
