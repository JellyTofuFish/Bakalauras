<?php

namespace App\DataFixtures;

use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class QuestionFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $question = new Question();
        $question->setQuestionName('Amžiaus nurodymas');
        $question->setQuestionWording('Nurodykite savo amžių');
        $question->setDescription(null);
        $question->setType('open');
        $question->setRequired(true);
        $question->setFkGroup($this->getReference('group1'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question1',$question );
        $manager->persist($question);
        $manager->flush();

        $question = new Question();
        $question->setQuestionName('Lyties nurodymas');
        $question->setQuestionWording('Esate...');
        $question->setDescription(null);
        $question->setType('one');
        $question->setRequired(true);
        $question->setFkGroup($this->getReference('group1'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question2',$question );
        $manager->persist($question);
        $manager->flush();

        $question = new Question();
        $question->setQuestionName('Ar naudojatės soc. tinklais');
        $question->setQuestionWording('Ar naudojatės socialiniais tinklais?');
        $question->setDescription(null);
        $question->setType('one');
        $question->setRequired(true);
        $question->setFkGroup($this->getReference('group2'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question3',$question );
        $manager->persist($question);
        $manager->flush();

        $question = new Question();
        $question->setQuestionName('Soc. tinklų naudojimo dažnumas');
        $question->setQuestionWording('Jeigu naudojatės socialiniais tinklais, kaip dažnai tai darote?');
        $question->setDescription(null);
        $question->setType('one');
        $question->setRequired(true);
        $question->setFkGroup($this->getReference('group2'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question4',$question );
        $manager->persist($question);
        $manager->flush();

        $question = new Question();
        $question->setQuestionName('Soc. tinklai: privalomas atviras klausimas');
        $question->setQuestionWording('Jeigu bent retkarčiais naudojatės socialiniais tinklais, kuo jie jus patraukė?
        Jeigu nesinaudojate, kas įtakojo tokį jūsų pasirinkimą?');
        $question->setDescription('checkbox type');
        $question->setType('open');
        $question->setRequired(true);
        $question->setFkGroup($this->getReference('group2'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question5',$question );
        $manager->persist($question);
        $manager->flush();

        $question = new Question();
        $question->setQuestionName('Soc. tinklai: neprivalomas atviras klausimas');
        $question->setQuestionWording('Jeigu galėtumėte socialiniuose tinkluose pakeisti bet ką, ką keistumėte? Jeigu socialiniais tinklais nesinaudojate, kas turėtų pasikeisti, kad imtumėte naudotis?
        (Atsakymas neprivalomas)');
        $question->setDescription(null);
        $question->setType('open');
        $question->setRequired(false);
        $question->setFkGroup($this->getReference('group2'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question6',$question );
        $manager->persist($question);
        $manager->flush();

        $question = new Question();
        $question->setQuestionName('Socialiniai tinklai - kokius naudojate?');
        $question->setQuestionWording('Nurodykite socialinius tinklus, kuriais naudojatės.');
        $question->setDescription('Socialiniai tinklai - kelių pasirinkimų');
        $question->setType('multi');
        $question->setRequired(false);
        $question->setFkGroup($this->getReference('group2'));
        $question->setFkUser($this->getReference('user1'));
        $this->addReference('question7',$question );
        $manager->persist($question);
        $manager->flush();

    }
    public function getOrder() {
        return 200;
    }
}
