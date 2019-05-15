<?php

namespace App\Controller;

use App\Entity\AnswerOption;
use App\Entity\File;
use App\Entity\GroupList;
use App\Entity\ParticipantAnswer;
use App\Entity\ParticipantAnswerAttribute;
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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\VarDumper\VarDumper;
use Symfony\Component\VarDumper\Dumper;

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

            if ($backgroundT != null) {
                $this->setDataTest($question['serial_number']-1, 'paramBackground', $backgroundTRandom);
            }
            else {
                $backgroundQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByBackgroundColor($question['id']);
                if ($backgroundQ != null) {
                    $this->setDataTest($question['serial_number']-1, 'paramBackground', $backgroundQ[array_rand($backgroundQ, 1)]);
                }
                else {
                    $this->setDataTest($question['serial_number']-1, 'paramBackground', ['value' => '#FFFFFF']);
                }
            }

            if ($buttonColorT != null) {
                $this->setDataTest($question['serial_number']-1, 'paramButton', $buttonColorTRandom);
            }
            else {
                $buttonColorQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByButtonColor($question['id']);
                if ($buttonColorQ != null) {
                    $this->setDataTest($question['serial_number']-1, 'paramButton', $buttonColorQ[array_rand($buttonColorQ, 1)]);
                }
                else {
                    $this->setDataTest($question['serial_number']-1, 'paramButton', ['value' => '#007bff']);
                }
            }

            $displayTimeQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByDisplayTime($question['id']);
            if ($displayTimeQ != null) {
                $this->setDataTest($question['serial_number']-1, 'paramDisplayTime', $displayTimeQ[array_rand($displayTimeQ, 1)]);
            }
            else {
                $this->setDataTest($question['serial_number']-1, 'paramDisplayTime', []);
            }

            $pictureQ = $entityManager->getRepository(File::class)->findOneByQuestion($question['id']);
            if ($pictureQ != null) {
                $this->setDataTest($question['serial_number']-1, 'picture', $pictureQ[array_rand($pictureQ, 1)]);
            }
            else {
                $this->setDataTest($question['serial_number']-1, 'picture', []);
            }

            if ($picturesT != null) {
                $this->setDataTest($question['serial_number']-1, 'paramPictures', $picturesTRandom);
            }
            else {
                $picturesQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByPicture($question['id']);
                if ($picturesQ != null) {
                    $this->setDataTest($question['serial_number']-1, 'paramPictures', $picturesQ[array_rand($picturesQ, 1)]);
                }
                else {
                    $this->setDataTest($question['serial_number']-1, 'paramPictures', []);
                }
            }

            $timeQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByTime($question['id']);
            if ($timeQ != null) {
                $this->setDataTest($question['serial_number']-1, 'paramTimeQ', $timeQ[array_rand($timeQ, 1)]);
            }
            else {
                $this->setDataTest($question['serial_number']-1, 'paramTimeQ', []);
            }
        }
        return $this->render('test/show_example.html.twig', [
            'paramTimeT' => $timeTRandom,
            'test' => $Test,
            'data_test' => $this->arrayTest,
        ]);
    }
    /**
    * @Route("participation/{testPart}/test/{id}", name="test_new_start", methods={"GET","POST"})
    * @Entity("participation", expr="repository.find(testPart)")
    */
    public function newStart(Request $request, Test $test, TestParticipation $participation): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (null === $Test = $this->getDoctrine()->getManager()->getRepository(Test::class)->find($test->getId())) {
            throw $this->createNotFoundException('No Test for id '.$test->getId());
        }
        $this->arrayTest = [[]];

        if ($request->isMethod('POST')){

            if (null === $part = $entityManager->getRepository(TestParticipation::class)->find($participation->getId())) {
                throw $this->createNotFoundException('No participation for id '.$participation->getId());
            }
            $part->setTestEndedAt(new \DateTime('now'));
            $part->setIsTestOver(1);
            $entityManager->persist($part);
            $entityManager->flush();

            $timeT = '';
            $participantTimeT = '';
            foreach ($_POST['test_new_start']['testTime'] as $key => $value) {
                $participantTimeT = $entityManager->getRepository(TestAttribute::class)->find($key);
                if ($participantTimeT != null) {
                    $timeType = explode(':', $participantTimeT->getValue());
                    if ($timeType[1] == '1') {
                        $timeT = $timeType[0] - $value;
                    }
                    if ($timeType[1] == '0') {
                        $timeT = $value;
                    }
                }
            }
            foreach ($_POST['test_new_start'] as $key => $value ) {
                $question = $entityManager->getRepository(Question::class)->findOneBy(['id' => $key]);
                if ($question != null) {
                    $participantAnswer = new ParticipantAnswer();
                    $participantAnswer->setFkQuestion($question);
                    $participantAnswer->setFkTestParticipation($part);
                    $entityManager->persist($participantAnswer);
                    $entityManager->flush();
                    foreach ($value as $key1 => $value1) {
                        if ($key1 == 'paramBackground') {
                            $paramBackgroundQ = $entityManager->getRepository(QuestionAttribute::class)->find($value1);
                            if ($paramBackgroundQ != null) {
                                $participantAnswer1 = new ParticipantAnswerAttribute();
                                $participantAnswer1->setFkParticipantAnswer($participantAnswer);
                                $participantAnswer1->setFkQuestionAttribute($paramBackgroundQ);
                                $entityManager->persist($participantAnswer1);

                            } else {
                                $participantAnswer1 = new ParticipantAnswerAttribute();
                                $participantAnswer1->setFkParticipantAnswer($participantAnswer);
                                $paramBackgroundT = $entityManager->getRepository(TestAttribute::class)->find($value1);
                                $participantAnswer1->setFkTestAttribute($paramBackgroundT);
                                $entityManager->persist($participantAnswer1);
                            }
                        } else if ($key1 == 'paramButton') {
                            $paramButtonQ = $entityManager->getRepository(QuestionAttribute::class)->find($value1);
                            if ($paramButtonQ != null) {
                                $participantAnswer2 = new ParticipantAnswerAttribute();
                                $participantAnswer2->setFkParticipantAnswer($participantAnswer);
                                $participantAnswer2->setFkQuestionAttribute($paramButtonQ);
                                $entityManager->persist($participantAnswer2);
                            } else {
                                $participantAnswer2 = new ParticipantAnswerAttribute();
                                $participantAnswer2->setFkParticipantAnswer($participantAnswer);
                                $paramButtonT = $entityManager->getRepository(TestAttribute::class)->find($value1);
                                $participantAnswer2->setFkTestAttribute($paramButtonT);
                                $entityManager->persist($participantAnswer2);
                            }
                            if ($participantTimeT != null) {
                                $participantAnswer5 = new ParticipantAnswerAttribute();
                                $participantAnswer5->setFkParticipantAnswer($participantAnswer);
                                $participantAnswer5->setFkTestAttribute($participantTimeT);
                                $participantAnswer5->setValue($timeT);
                                $entityManager->persist($participantAnswer5);
                            }
                        } else if (ctype_digit($key1)) {
                            if ($participantTimeT != null) {
                                $participantAnswer5 = new ParticipantAnswerAttribute();
                                $participantAnswer5->setFkParticipantAnswer($participantAnswer);
                                $participantAnswer5->setFkTestAttribute($participantTimeT);
                                $participantAnswer5->setValue($timeT . ':' . $value1);
                                $entityManager->persist($participantAnswer5);
                            }
                            else {
                                $timeQ = $entityManager->getRepository(QuestionAttribute::class)->find($key1);
                                if ($timeQ != null) {
                                    $participantAnswer5 = new ParticipantAnswerAttribute();
                                    $participantAnswer5->setFkParticipantAnswer($participantAnswer);
                                    $participantAnswer5->setFkQuestionAttribute($timeQ);
                                    $participantAnswer5->setValue($value1);
                                    $entityManager->persist($participantAnswer5);
                                }
                            }
                        } else if ($key1 == 'picture') {
                            $pictureQ = $entityManager->getRepository(QuestionAttribute::class)->find($value1);
                            if ($pictureQ != null) {
                                $participantAnswer3 = new ParticipantAnswerAttribute();
                                $participantAnswer3->setFkParticipantAnswer($participantAnswer);
                                $participantAnswer3->setFkQuestionAttribute($pictureQ);
                                $entityManager->persist($participantAnswer3);
                            }
                        } else if ($key1 == 'textarea') {
                            $participantAnswer->setAnswer($value1);
                        } else if ($key1 == 'answers') {
                            if ( $question->getType() == "one") {
                                $participantAnswerOption = $entityManager->getRepository(AnswerOption::class)->findOneBy(['answer' => $value1]);
                                $participantAnswer->addFkAnsweroption($participantAnswerOption);
                            }
                            if ( $question->getType() == "multi") {
                                foreach ($value1 as $key2 => $value2) {
                                    $participantAnswerOption = $entityManager->getRepository(AnswerOption::class)->findOneBy(['answer' => $value2]);
                                    $participantAnswer->addFkAnsweroption($participantAnswerOption);
                                }
                            }
                        } else if ($key1 == 'paramDisplayTime') {
                            $paramDisplayTimeQ = $entityManager->getRepository(QuestionAttribute::class)->find($value1);
                            if ($paramDisplayTimeQ != null) {
                                $participantAnswer4 = new ParticipantAnswerAttribute();
                                $participantAnswer4->setFkParticipantAnswer($participantAnswer);
                                $participantAnswer4->setFkQuestionAttribute($paramDisplayTimeQ);
                                $entityManager->persist($participantAnswer4);
                            }
                        }
                        $entityManager->flush();
                    }
                }
            }
            return $this->redirectToRoute('home_index', [
                'done' => 'true',
            ]);
        }
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

            if ($backgroundT != null) {
                $this->setDataTest($question['serial_number']-1, 'paramBackground', $backgroundTRandom);
            }
            else {
                $backgroundQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByBackgroundColor($question['id']);
                if ($backgroundQ != null) {
                    $this->setDataTest($question['serial_number']-1, 'paramBackground', $backgroundQ[array_rand($backgroundQ, 1)]);
                }
                else {
                    $this->setDataTest($question['serial_number']-1, 'paramBackground', $entityManager->getRepository(TestAttribute::class)->findAllByBackgroundColorDefault());
                }
            }

            if ($buttonColorT != null) {
                $this->setDataTest($question['serial_number']-1, 'paramButton', $buttonColorTRandom);
            }
            else {
                $buttonColorQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByButtonColor($question['id']);
                if ($buttonColorQ != null) {
                    $this->setDataTest($question['serial_number']-1, 'paramButton', $buttonColorQ[array_rand($buttonColorQ, 1)]);
                }
                else {
                    $this->setDataTest($question['serial_number']-1, 'paramButton', $entityManager->getRepository(TestAttribute::class)->findAllByButtonColorDefault());
                }
            }

            $displayTimeQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByDisplayTime($question['id']);
            if ($displayTimeQ != null) {
                $this->setDataTest($question['serial_number']-1, 'paramDisplayTime', $displayTimeQ[array_rand($displayTimeQ, 1)]);
            }
            else {
                $this->setDataTest($question['serial_number']-1, 'paramDisplayTime', []);
            }

            $pictureQ = $entityManager->getRepository(File::class)->findOneByQuestion($question['id']);
            if ($pictureQ != null) {
                $this->setDataTest($question['serial_number']-1, 'picture', $pictureQ[array_rand($pictureQ, 1)]);
            }
            else {
                $this->setDataTest($question['serial_number']-1, 'picture', []);
            }

            if ($picturesT != null) {
                $this->setDataTest($question['serial_number']-1, 'paramPictures', $picturesTRandom);
            }
            else {
                $picturesQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByPicture($question['id']);
                if ($picturesQ != null) {
                    $this->setDataTest($question['serial_number']-1, 'paramPictures', $picturesQ[array_rand($picturesQ, 1)]);
                }
                else {
                    $this->setDataTest($question['serial_number']-1, 'paramPictures', []);
                }
            }

            $timeQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByTime($question['id']);
            if ($timeQ != null) {
                $this->setDataTest($question['serial_number']-1, 'paramTimeQ', $timeQ[array_rand($timeQ, 1)]);
            }
            else {
                $this->setDataTest($question['serial_number']-1, 'paramTimeQ', []);
            }
        }
        return $this->render('test/new_participation.html.twig', [
            'paramTimeT' => $timeTRandom,
            'test' => $Test,
            'data_test' => $this->arrayTest,
            'testPart' => $participation->getId(),
        ]);
    }
    /**
     * @Route("/participation/{testPart}/end", name="test_end", methods={"GET","POST"})
     * @Entity("participation", expr="repository.find(testPart)")
     */
    public function newEnd(TestParticipation $participation)
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (null === $part = $entityManager->getRepository(TestParticipation::class)->find($participation->getId())) {
            throw $this->createNotFoundException('No participation for id '.$participation->getId());
        }
        $participation->setTestEndedAt(new \DateTime('now'));
        $participation->setIsTestOver(0);
        $entityManager->persist($participation);
        $entityManager->flush();

        $this->addFlash('danger', 'test.flash_message.time_over');
        return new JsonResponse(array('id'=> $participation->getId(), 'data' => $_POST['test_new_start']['testTime']));
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
