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
        $attribute->setDescription('qMygtuko spalvos savybė. Kiekviena mygtuko spalva atsitiktine tvarka pateikiama dalyviui apklausos vykdymo metu. Kiekviena mygtuko spalva privalo būti unikali.');
        $manager->persist($attribute);
        $this->addReference('attribute1',$attribute );
        $manager->flush();

        $attribute = new Attribute();
        $attribute->setName('backgroundcolor');
        $attribute->setDescription( 'Fono spalvos savybė. Kiekviena fono spalva atsitiktine tvarka pateikiama dalyviui apklausos vykdymo metu. Kiekviena fono spalva privalo būti unikali.');
        $this->addReference('attribute2',$attribute );
        $manager->persist($attribute);
        $manager->flush();

        $attribute = new Attribute();
        $attribute->setName('time');
        $attribute->setDescription('Laikrodžio savybė. Nustačius savybę fiksuojamas laikas kiek dalyvis užtruko atsakyti į klausimą. Formatas:
        1. Laikas (po kiek sekunčių nutraukiamas apklausos vykdymas),
        2. Tipas (0 - chronometras, 1 - laikmatis),
        3. Matomumas (0 - paslėptas, 1 - matomas). 
        P.S. Nustačius laikrodžio formatą 0:0:0 arba 0:0:1 neribojamas apklausos vykdymo laikas.');
        $this->addReference('attribute3',$attribute );
        $manager->persist($attribute);
        $manager->flush();

        $attribute = new Attribute();
        $attribute->setName('displaytime');
        $attribute->setDescription('Laiko savybė. Nustačius savybę suteikiama galimybė konfigūruoti klausimo mygtukų funkcionalumą. Formatas:
1. Laikas (kiek sekundžių aktyvi laiko rodymo savybė),
2. Tipas (0 - klausimo mygtukai neveiksnūs, 1 - klausimo mygtukai paslėpti),
3. Peršokimas (0 - naudotojas turi pereiti į kitą klausimą, 1 - kitas klausimas pateikiamas automatiškai).');
        $this->addReference('attribute4',$attribute );
        $manager->persist($attribute);
        $manager->flush();

        $attribute = new Attribute();
        $attribute->setName('picture');
        $attribute->setDescription('Paveikslėlio savybė. Kiekvienas pridėtas paveikslėlis atsitiktine tvarka pateikiamas dalyviui apklausos vykdymo metu.');
        $this->addReference('attribute5',$attribute );
        $manager->persist($attribute);
        $manager->flush();
    }
    public function getOrder() {
        return 100;
    }
}
