<?php

namespace App\Controller;

use App\Entity\AnswerOption;
use App\Entity\File;
use App\Entity\ParticipantAnswer;
use App\Entity\Question;
use App\Entity\QuestionAttribute;
use App\Entity\Test;
use App\Entity\TestAttribute;
use App\Entity\TestParticipation;
use App\Entity\TestQuestion;
use App\Form\TestType;
use App\Repository\FileRepository;
use App\Repository\QuestionRepository;
use App\Repository\TestQuestionRepository;
use App\Repository\TestRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * QuestionController constructor.
     */

    protected $arrayTest = [[]];

    public function setDataTest($key, $key1, $value)
    {
        $this->arrayTest[$key][$key1] = $value;
    }

    protected $arrayData = [
        'test_name' => 'fa-sort',
        'created_at'=> 'fa-sort',
        'start'=> 'fa-sort',
        'end'=> 'fa-sort'
    ];

    public function setData($key, $value)
    {
        $this->arrayData[$key] = $value;
    }
    public function getData($key)
    {
        return $this->arrayData[$key];
    }
    public function generateRandomString($length)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = 'T-';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * @Route("/tests", name="test_index", methods={"GET"})
     */
    public function index(Request $request, TestRepository $testRepository): Response
    {
        $route = $request->query->get('route');
        $slug =  $request->query->get('slug');
        $sort =  $request->query->get('sort');

        $tests = $testRepository->findAll();

        if ( $sort == 'fa-sort') {
            $this->setData('test_name','fa-sort');
            $this->setData('created_at','fa-sort');
            $this->setData('start','fa-sort');
            $this->setData('end','fa-sort');
            $this->setData($slug,'fa-sort-up');

            if ($slug == 'test_name') {
                $tests = $testRepository->filterAllByNameASC();
            }
            else if ($slug == 'created_at'){
                $tests = $testRepository->filterAllByCreatedAtASC();
            }
            else if ($slug == 'start'){
                $tests = $testRepository->filterAllByStartASC();
            }
            else {
                $tests = $testRepository->filterAllByEndASC();
            }
        }
        elseif ($sort == 'fa-sort-up'){
            $this->setData($slug,'fa-sort-down');

            if ($slug == 'test_name') {
                $tests = $testRepository->filterAllByNameDESC();
            }
            else if ($slug == 'created_at'){
                $tests = $testRepository->filterAllByCreatedAtDESC();
            }
            else if ($slug == 'start'){
                $tests = $testRepository->filterAllByStartDESC();
            }
            else {
                $tests = $testRepository->filterAllByEndDESC();
            }
        }
        else if ($sort == 'fa-sort-down'){
            $this->setData($slug,'fa-sort');
        }
        if ($route != null ) {
            $this->addFlash('primary', 'test.flash_message.test');
        }

        return $this->render('test/index.html.twig', [
            'tests' => $tests,
            'data' => $this->arrayData,
        ]);
    }

    /**
     * @Route("test/new", name="test_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $test = new Test();
        $test->setFkUser($this->getUser());
        $test->setCode($this->generateRandomString(6));
        $test->setCreatedAt();

        $testQuestion = new TestQuestion();
        $test->getTestQuestions()->add($testQuestion);

        $form = $this->createForm(TestType::class, $test);
        $form->handleRequest($request);

        $entityManager = $this->getDoctrine()->getManager();
        if ($form->isSubmitted() && $form->isValid()) {
            $testQuestions = $test->getTestQuestions();
            $i = 1;
            foreach ($testQuestions as $tq) {
                $tq->setSerialNumber($i);
                $tq->setFkTest($test);
                $entityManager->persist($tq);
                $i+=1;
            }
            $entityManager->persist($test);
            $entityManager->flush();

            return $this->redirectToRoute('test_index');
        }

        return $this->render('test/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("test/{id}", name="test_show", methods={"GET"})
     */
    public function show(Test $test, TestQuestionRepository $questionRepository): Response
    {
        if (null === $Test = $this->getDoctrine()->getManager()->getRepository(Test::class)->find($test->getId())) {
            throw $this->createNotFoundException('No Test for id '.$test->getId());
        }
        $questions = $questionRepository->findQuestionsbyTest($Test);
        return $this->render('test/show.html.twig', [
            'test' => $test,
            'questions' => $questions
        ]);
    }

    /**
     * @Route("/test/{id}/example", name="show_test_example", methods={"GET"})
     */
    public function showExample(Test $test): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (null === $Test = $this->getDoctrine()->getManager()->getRepository(Test::class)->find($test->getId())) {
            throw $this->createNotFoundException('No Test for id '.$test->getId());
        }
        $this->arrayTest = [[]];
        $questionOrder = $entityManager->getRepository(Test::class)->findTestQuestionOrder($Test);

        $backgroundT = $entityManager->getRepository(TestAttribute::class)->findAllByBackgroundColor($Test->getId());
        if ($backgroundT != null) {
            $backgroundTRandom = $backgroundT[array_rand($backgroundT, 1)];
        }
        else {
            $backgroundTRandom = null;
        }
        $buttonColorT = $entityManager->getRepository(TestAttribute::class)->findAllByButtonColor($Test->getId());
        if ($buttonColorT != null) {
            $buttonColorTRandom = $buttonColorT[array_rand($buttonColorT, 1)];
        }
        else {
            $buttonColorTRandom = null;
        }
        $picturesT = $entityManager->getRepository(TestAttribute::class)->findAllByPicture($Test->getId());
        if ($picturesT != null) {
            $picturesTRandom = $picturesT[array_rand($picturesT, 1)];
        }
        else {
            $picturesTRandom = null;
        }
        $timeT = $entityManager->getRepository(TestAttribute::class)->findAllByTime($Test->getId());
        if ($timeT != null) {
            $timeTRandom = $timeT[array_rand($timeT, 1)];
        }
        else {
            $timeTRandom = '';
        }

        foreach ($questionOrder as $question){
            $this->setDataTest($question['serial_number']-1, 'question', $question);
            $this->setDataTest($question['serial_number']-1, 'answers', $entityManager->getRepository(Question::class)->findQuestionAnswers($question['id']));

            if ($backgroundT != null) { $this->setDataTest($question['serial_number']-1, 'paramBackground', $backgroundTRandom); }
            else {
                $backgroundQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByBackgroundColor($question['id']);
                if ($backgroundQ != null) { $this->setDataTest($question['serial_number']-1, 'paramBackground', $backgroundQ[array_rand($backgroundQ, 1)]); }
                else { $this->setDataTest($question['serial_number']-1, 'paramBackground', ['value' => '#FFFFFF']); }
            }

            if ($buttonColorT != null) { $this->setDataTest($question['serial_number']-1, 'paramButton', $buttonColorTRandom); }
            else {
                $buttonColorQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByButtonColor($question['id']);
                if ($buttonColorQ != null) { $this->setDataTest($question['serial_number']-1, 'paramButton', $buttonColorQ[array_rand($buttonColorQ, 1)]); }
                else { $this->setDataTest($question['serial_number']-1, 'paramButton', ['value' => '#007bff']);  }
            }

            $displayTimeQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByDisplayTime($question['id']);
            if ($displayTimeQ != null) { $this->setDataTest($question['serial_number']-1, 'paramDisplayTime', $displayTimeQ[array_rand($displayTimeQ, 1)]); }
            else { $this->setDataTest($question['serial_number']-1, 'paramDisplayTime', []);  }

            $pictureQ = $entityManager->getRepository(File::class)->findOneByQuestion($question['id']);
            if ($pictureQ != null) { $this->setDataTest($question['serial_number']-1, 'picture', $pictureQ[array_rand($pictureQ, 1)]); }
            else { $this->setDataTest($question['serial_number']-1, 'picture', []);  }

            if ($picturesT != null) { $this->setDataTest($question['serial_number']-1, 'paramPictures', $picturesTRandom); }
            else {
                $picturesQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByPicture($question['id']);
                if ($picturesQ != null) { $this->setDataTest($question['serial_number']-1, 'paramPictures', $picturesQ[array_rand($picturesQ, 1)]); }
                else { $this->setDataTest($question['serial_number']-1, 'paramPictures', []);  }
            }

            $timeQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByTime($question['id']);
            if ($timeQ != null) { $this->setDataTest($question['serial_number']-1, 'paramTimeQ', $timeQ[array_rand($timeQ, 1)]); }
            else { $this->setDataTest($question['serial_number']-1, 'paramTimeQ', []);  }
        }
        dump($this->arrayTest);
        return $this->render('test/show_example.html.twig', [
            'data_test' => $this->arrayTest,
            'paramTimeT' => $timeTRandom
        ]);
    }

    /**
     * @Route("participation/{testPart}/test/{id}", name="test_new_start", methods={"GET","POST"})
     * @Entity("participation", expr="repository.find(testPart)")
     */
    public function newStart(Request $request, Test $test, TestParticipation $participation, TestRepository $testRepository, QuestionRepository $questionRepository): Response
    {
        if (null === $Test = $testRepository->find($test->getId())) {
            throw $this->createNotFoundException('No Test for id '.$test->getId());
        }
        $this->arrayTest = [[]];
        $questionOrder = $testRepository->findTestQuestionOrder($Test);
        foreach ($questionOrder as $question){
            $this->setDataTest($question['serial_number']-1, 'serial_number', $question['serial_number']);
            $this->setDataTest($question['serial_number']-1, 'questionID', $question['id']);
            $this->setDataTest($question['serial_number']-1, 'type', $question['type']);
            $this->setDataTest($question['serial_number']-1, 'question_wording', $question['question_wording']);
            $this->setDataTest($question['serial_number']-1, 'answers', $questionRepository->findQuestionAnswers($question['id']));
        }

        if ($request->isMethod('POST')){
            $entityManager = $this->getDoctrine()->getManager();

            if (null === $part = $entityManager->getRepository(TestParticipation::class)->find($participation->getId())) {
                throw $this->createNotFoundException('No participation for id '.$participation->getId());
            }
            $part->setTestEndedAt(new \DateTime('now'));
            $part->setIsTestOver(1);
            $entityManager->persist($part);
            $entityManager->flush();
            foreach ($_POST as $key => $value ){
                $participantAnswer = new ParticipantAnswer();
                $participantAnswer->setFkTestParticipation($part);
                $question = $entityManager->getRepository(Question::class)->findOneBy(['id'=>$key]);
                if ($question->getType() == "open") {
                    $participantAnswer->setFkQuestion($question);
                    $participantAnswer->setAnswer($value);
                }
                if ( $question->getType() == "one"){
                    $participantAnswerOption = $entityManager->getRepository(AnswerOption::class)->findOneBy(['answer'=>$value]);
                    $participantAnswer->addFkAnsweroption($participantAnswerOption);
                }
                if ($question->getType() == "multi"){
                    foreach ($value as $value1){
                        $participantAnswerOption = $entityManager->getRepository(AnswerOption::class)->findOneBy(['answer'=>$value1]);
                        $participantAnswer->addFkAnsweroption($participantAnswerOption);
                    }
                }
            }
            $entityManager->persist($participantAnswer);
            $entityManager->flush();
            return $this->redirectToRoute('home_index', [
                'done' => 'true',
            ]);
        }

        return $this->render('test/new_participation.html.twig', [
            'test' => $test,
            'data' => $this->arrayTest,
            'testPart' => $participation->getId(),
        ]);
    }

    /**
     * @Route("test/{id}/edit", name="test_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Test $test): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (null === $Test = $entityManager->getRepository(Test::class)->find($test->getId())) {
            throw $this->createNotFoundException('Nerastas testas pagal id '.$test->getId());
        }

        $form = $this->createForm(TestType::class, $Test);
        $form->handleRequest($request);
        $testQuestions = $Test->getTestQuestions();

        if ($form->isSubmitted() && $form->isValid()) {
            $i = 1;
            foreach ($testQuestions as $tq) {
                if (false === $Test->getTestQuestions()->contains($tq)) {
                    $Test->removeTestQuestion($tq);
                }
                $tq->setSerialNumber($i);
                $entityManager->persist($tq);
                $i+=1;
            }
            $entityManager->persist($Test);
            $entityManager->flush();

            return $this->redirectToRoute('test_index', [
            ]);
        }

        return $this->render('test/edit.html.twig', [
            'test' => $test,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("test/{id}", name="test_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Test $test): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (null === $Test = $entityManager->getRepository(Test::class)->find($test->getId())) {
            throw $this->createNotFoundException('No Test for id '.$test->getId());
        }
        if ($this->isCsrfTokenValid('delete'.$test->getId(), $request->request->get('_token'))) {

            $questions = $Test->getTestQuestions();
            foreach ($questions as $q) {
                $q->getFkTest()->removeTestQuestion($q);
                $entityManager->persist($q);
                $entityManager->flush();
            }

            $Tattribute = $Test->getTestAttributes();
            foreach ($Tattribute as $ta) {
                $ta->setFkTest(null);
                $entityManager->persist($ta);
                $entityManager->flush();
            }

            $testPart = $Test->getTestParticipations();
            foreach ($testPart as $tp) {
                $tp->setFkTest(null);
                $entityManager->persist($tp);
                $entityManager->flush();
            }

            $entityManager->remove($test);
            $entityManager->flush();
        }

        return $this->redirectToRoute('test_index');
    }
}
