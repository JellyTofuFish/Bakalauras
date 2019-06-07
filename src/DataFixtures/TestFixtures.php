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
        $test->setName('Formų fono spalvos įtakos tyrimas (socialinių tinklų tematika)');
        $test->setDescription('Užduotis: nustatyti, ar raudonos ir mėlynos spalvos fonas turi įtaką formose pateikiamų atviro tipo laukų užpildymo tikimybei ir užpildymo išsamumui.
Poreikis: sistemų sąsajos kūrėjai turi turėti galimybę objektyviai įvertinti šalutinių faktorių įtaką tam, kad nesukurti priemones, sukeliančias nepageidaujamus efektus.');
        $test->setCode('T-JY42IF');
        $test->setTestStart(new \DateTime('now'));
        $test->setCreatedAt();
        $test->setIsActive(true);
        $test->setFkUser($this->getReference('user1'));
        $test->setPrevButton(false);
        $this->addReference('test1', $test);
        $manager->persist($test);
        $manager->flush();

    }
    public function getOrder() {
        return 110;
    }
}
