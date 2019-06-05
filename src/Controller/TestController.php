<?php

namespace App\Controller;

use App\Entity\AnswerOption;
use App\Entity\Attribute;
use App\Entity\Files;
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
use App\Repository\TestQuestionRepository;
use App\Repository\TestRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
            $this->setData('start','fa-sort');
            $this->setData('end','fa-sort');
            $this->setData($slug,'fa-sort-up');

            if ($slug == 'test_name') {
                $tests = $testRepository->filterAllByNameASC();
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
            $this->addFlash('warning', 'test.flash_message.test');
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

        $attributeText = [];
        $attributeText['buttonColor'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findButtonColorAttribute();
        $attributeText['time'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findTimeAttribute();
        $attributeText['backgroundColor'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findBackgroundColorAttribute();
        $attributeText['displayTime'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findDisplayTimeAttribute();
        $attributeText['picture'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findPictureAttribute();

        $attributes = [];
        $attributes['times'] = [];
        $attributes['buttonColors'] = [];
        $attributes['backgroundColors'] = [];
        $attributes['displayTimes'] = [];
        $attributes['pictures'] = [];

        $entityManager = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
        if ($request->isMethod('POST')) {

            if (isset($_POST['test_attribute_time']) && $_POST['test_attribute_time'] != '') {
                foreach ($_POST['test_attribute_time'] as $key => $value) {
                    $attributes['times'] = $_POST['test_attribute_time'];
                }
            }
            if (isset($_POST['test_attribute_buttonColor']) && $_POST['test_attribute_buttonColor'] != '') {
                foreach ($_POST['test_attribute_buttonColor'] as $key => $value) {
                    $attributes['buttonColors'] = $_POST['test_attribute_buttonColor'];
                }
            }
            if (isset($_POST['test_attribute_backgroundColor']) && $_POST['test_attribute_backgroundColor'] != '') {
                foreach ($_POST['test_attribute_backgroundColor'] as $key => $value) {
                    $attributes['backgroundColors'] = $_POST['test_attribute_backgroundColor'];
                }
            }
            if (isset($_POST['test_attribute_displayTime']) && $_POST['test_attribute_displayTime'] != '') {
                foreach ($_POST['test_attribute_displayTime'] as $key => $value) {
                    $attributes['displayTimes'] = $_POST['test_attribute_displayTime'];
                }
            }

            if ($form->isSubmitted() && $form->isValid()) {
                $testQuestions = $test->getTestQuestions();
                $i = 1;
                foreach ($testQuestions as $tq) {
                    $tq->setSerialNumber($i);
                    $tq->setFkTest($test);
                    $entityManager->persist($tq);
                    $i += 1;
                }
                $entityManager->persist($test);
                $entityManager->flush();
                if (isset($_POST['test_attribute_time']) && $_POST['test_attribute_time'] != '') {
                    foreach ($_POST['test_attribute_time'] as $key => $value) {
                        $testTAttribute = new TestAttribute();
                        $testTAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findTimeAttribute());
                        $testTAttribute->setValue(array_values($value)[0] . ':' . array_values($value)[1] . ':' . array_values($value)[2]);
                        $testTAttribute->setFkTest($test);
                        $entityManager->persist($testTAttribute);
                        $entityManager->flush();
                    }
                }
                if (isset($_POST['test_attribute_buttonColor']) && $_POST['test_attribute_buttonColor'] != '') {
                    foreach ($_POST['test_attribute_buttonColor'] as $key => $value) {
                        $testBtnCAttribute = new TestAttribute();
                        $testBtnCAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findButtonColorAttribute());
                        $testBtnCAttribute->setValue(array_values($value)[0]);
                        $testBtnCAttribute->setFkTest($test);
                        $entityManager->persist($testBtnCAttribute);
                        $entityManager->flush();
                    }
                }
                if (isset($_POST['test_attribute_backgroundColor']) && $_POST['test_attribute_backgroundColor'] != '') {
                    foreach ($_POST['test_attribute_backgroundColor'] as $key => $value) {
                        $testBgCAttribute = new TestAttribute();
                        $testBgCAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findBackgroundColorAttribute());
                        $testBgCAttribute->setValue(array_values($value)[0]);
                        $testBgCAttribute->setFkTest($test);
                        $entityManager->persist($testBgCAttribute);
                        $entityManager->flush();
                    }
                }
                if (isset($_POST['test_attribute_displayTime']) && $_POST['test_attribute_displayTime'] != '') {
                    foreach ($_POST['test_attribute_displayTime'] as $key => $value) {
                        $testDTAttribute = new TestAttribute();
                        $testDTAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findDisplayTimeAttribute());
                        $testDTAttribute->setValue(array_values($value)[0].':'.array_values($value)[1].':'.array_values($value)[2]);
                        $testDTAttribute->setFkTest($test);
                        $entityManager->persist($testDTAttribute);
                        $entityManager->flush();
                    }
                }
                if (isset($_FILES['test_attribute_picture'])) {
                    $pictureArray = [[]];
                    foreach ($_FILES['test_attribute_picture'] as $key => $value) {
                        foreach ($value as $key1 => $value1) {
                            $pictureArray[$key1][key($value1)][$key] = array_values($value1)[0];
                        }
                    }
                    foreach ($pictureArray as $key => $value) {
                        foreach ($value as $key1 => $value1) {
                            $newfile = new File($value1['tmp_name']);
                            $fileName = $value1['name'];
                            $attribute = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findOneBy(['value' => $fileName]);
                            if ($attribute == null) {
                                try {
                                    $newfile->move(
                                        $this->getParameter('brochures_directory'),
                                        $fileName
                                    );
                                } catch (FileException $e) {
                                    throw $this->createNotFoundException('file not uploaded');
                                }
                            }
                            $PictureAttribute = new TestAttribute();
                            $PictureAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findPictureAttribute());
                            $PictureAttribute->setValue($fileName);
                            $PictureAttribute->setFkTest($test);
                            $entityManager->persist($PictureAttribute);
                            $entityManager->flush();
                        }
                    }
                }
                $this->addFlash('success', 'test.flash_message.created');
                return $this->redirectToRoute('test_index');
            }
        }
        return $this->render('test/new.html.twig', [
            'form' => $form->createView(),
            'attributes' => $attributes,
            'attributeText' =>$attributeText,
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
        $attributeText = [];
        $attributeText['buttonColor'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findButtonColorAttribute();
        $attributeText['time'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findTimeAttribute();
        $attributeText['backgroundColor'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findBackgroundColorAttribute();
        $attributeText['displayTime'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findDisplayTimeAttribute();
        $attributeText['picture'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findPictureAttribute();

        $attributes = [];
        $attributes['times'] = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findAllByTime($Test);
        $attributes['buttonColors'] = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findAllByButtonColor($Test);
        $attributes['backgroundColors'] = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findAllByBackgroundColor($Test);
        $attributes['displayTimes'] = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findAllByDisplayTime($Test);
        $attributes['pictures'] = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findAllByPicture($Test);

        return $this->render('test/show.html.twig', [
            'test' => $test,
            'questions' => $questions,
            'attributes' => $attributes,
            'attributeText' =>$attributeText,
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
        $testTime = null;
        $backgroundT = $entityManager->getRepository(TestAttribute::class)->findAllByBackgroundColor($Test->getId());
        if ($backgroundT != null) {
            $backgroundTRandom = $backgroundT[array_rand($backgroundT, 1)];
        } else {
            $backgroundTRandom = null;
        }
        $buttonColorT = $entityManager->getRepository(TestAttribute::class)->findAllByButtonColor($Test->getId());
        if ($buttonColorT != null) {
            $buttonColorTRandom = $buttonColorT[array_rand($buttonColorT, 1)];
        } else {
            $buttonColorTRandom = null;
        }
        $picturesT = $entityManager->getRepository(TestAttribute::class)->findAllByPicture($Test->getId());
        if ($picturesT != null) {
            $picturesTRandom = $picturesT[array_rand($picturesT, 1)];
        } else {
            $picturesTRandom = null;
        }
        $displayTimeT = $entityManager->getRepository(TestAttribute::class)->findAllByDisplayTime($Test->getId());
        if ($displayTimeT != null) {
            $displayTimeTRandom = $displayTimeT[array_rand($displayTimeT, 1)];
        } else {
            $displayTimeTRandom = null;
        }
        $timeT = $entityManager->getRepository(TestAttribute::class)->findAllByTime($Test->getId());
        if ($timeT != null) {
            $timeTRandom = $timeT[array_rand($timeT, 1)];
            $testTime = $timeTRandom;
        } else {
            $timeTRandom = null;
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

            if ($displayTimeT != null) {
                $this->setDataTest($question['serial_number']-1, 'paramDisplayTime', $displayTimeTRandom);
            }
            else {
                $displayTimeQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByDisplayTime($question['id']);
                if ($displayTimeQ != null) {
                    $this->setDataTest($question['serial_number'] - 1, 'paramDisplayTime', $displayTimeQ[array_rand($displayTimeQ, 1)]);
                } else {
                    $this->setDataTest($question['serial_number'] - 1, 'paramDisplayTime', []);
                }
            }

            $filQ = $entityManager->getRepository(Files::class)->findOneByQuestion($question['id']);
            if ($filQ != null) {
                $this->setDataTest($question['serial_number']-1, 'file', $filQ[array_rand($filQ, 1)]);
            }
            else {
                $this->setDataTest($question['serial_number']-1, 'file', []);
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

            if ($timeT != null) {
                $this->setDataTest($question['serial_number']-1, 'paramTime', $timeTRandom);
            }
            else {
                $timeQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByTime($question['id']);
                if ($timeQ != null) {
                    $this->setDataTest($question['serial_number'] - 1, 'paramTime', $timeQ[array_rand($timeQ, 1)]);
                } else {
                    $this->setDataTest($question['serial_number'] - 1, 'paramTime', []);
                }
            }
        }
        return $this->render('test/show_example.html.twig', [
            'testTime' => $testTime,
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
                            $paramBackgroundT = $entityManager->getRepository(TestAttribute::class)->find($value1);
                            if ($paramBackgroundT == null) {
                                $paramBackgroundQ = $entityManager->getRepository(QuestionAttribute::class)->find($value1);
                                $participantAnswer1 = new ParticipantAnswerAttribute();
                                $participantAnswer1->setFkParticipantAnswer($participantAnswer);
                                $participantAnswer1->setFkQuestionAttribute($paramBackgroundQ);
                                $entityManager->persist($participantAnswer1);

                            } else {
                                $participantAnswer1 = new ParticipantAnswerAttribute();
                                $participantAnswer1->setFkParticipantAnswer($participantAnswer);
                                $participantAnswer1->setFkTestAttribute($paramBackgroundT);
                                $entityManager->persist($participantAnswer1);
                            }
                            $entityManager->flush();
                        }
                         if ($key1 == 'paramButton') {
                             $paramButtonT = $entityManager->getRepository(TestAttribute::class)->find($value1);
                             if ($paramButtonT == null) {
                                 $paramButtonQ = $entityManager->getRepository(QuestionAttribute::class)->find($value1);
                                 $participantAnswer2 = new ParticipantAnswerAttribute();
                                 $participantAnswer2->setFkParticipantAnswer($participantAnswer);
                                 $participantAnswer2->setFkQuestionAttribute($paramButtonQ);
                                 $entityManager->persist($participantAnswer2);
                             } else {
                                 $participantAnswer2 = new ParticipantAnswerAttribute();
                                 $participantAnswer2->setFkParticipantAnswer($participantAnswer);
                                 $participantAnswer2->setFkTestAttribute($paramButtonT);
                                 $entityManager->persist($participantAnswer2);
                             }
                             $entityManager->flush();
                         }
                         if (ctype_digit($key1)) {
                             $participantTimeT = $entityManager->getRepository(TestAttribute::class)->find($key1);
                             if ($participantTimeT == null) {
                                 $timeQ = $entityManager->getRepository(QuestionAttribute::class)->find($key1);
                                 $participantAnswer5 = new ParticipantAnswerAttribute();
                                 $participantAnswer5->setFkParticipantAnswer($participantAnswer);
                                 $participantAnswer5->setFkQuestionAttribute($timeQ);
                                 $participantAnswer5->setValue($value1);
                                 $entityManager->persist($participantAnswer5);
                             } else {
                                 if ($participantTimeT != null) {
                                     $participantAnswer5 = new ParticipantAnswerAttribute();
                                     $participantAnswer5->setFkParticipantAnswer($participantAnswer);
                                     $participantAnswer5->setFkTestAttribute($participantTimeT);
                                     $participantAnswer5->setValue($value1);
                                     $entityManager->persist($participantAnswer5);
                                 }
                             }
                             $entityManager->flush();
                         }
                         if ($key1 == 'picture') {
                             $pictureT = $entityManager->getRepository(TestAttribute::class)->find($value1);
                             if ($pictureT == null) {
                                 $pictureQ = $entityManager->getRepository(QuestionAttribute::class)->find($value1);
                                 $participantAnswer3 = new ParticipantAnswerAttribute();
                                 $participantAnswer3->setFkParticipantAnswer($participantAnswer);
                                 $participantAnswer3->setFkQuestionAttribute($pictureQ);
                                 $entityManager->persist($participantAnswer3);
                             } else {
                                 $participantAnswer3 = new ParticipantAnswerAttribute();
                                 $participantAnswer3->setFkParticipantAnswer($participantAnswer);
                                 $participantAnswer3->setFkTestAttribute($pictureT);
                                 $entityManager->persist($participantAnswer3);
                             }
                             $entityManager->flush();
                         }
                        if ($key1 == 'textarea') {
                             $participantAnswer->setAnswer($value1);
                        }
                        if ($key1 == 'answers') {
                             if ($question->getType() == "one") {
                                 $participantAnswerOption = $entityManager->getRepository(AnswerOption::class)->findOneBy(['answer' => $value1]);
                                 $participantAnswer->addFkAnsweroption($participantAnswerOption);
                             }
                             if ($question->getType() == "multi") {
                                 foreach ($value1 as $key2 => $value2) {
                                     $participantAnswerOption = $entityManager->getRepository(AnswerOption::class)->findOneBy(['answer' => $value2]);
                                     $participantAnswer->addFkAnsweroption($participantAnswerOption);
                                 }
                             }
                            $entityManager->flush();
                        }
                        if ($key1 == 'paramDisplayTime') {
                            $paramDisplayTimeT = $entityManager->getRepository(TestAttribute::class)->find($value1);
                            if ($paramDisplayTimeT == null) {
                                $paramDisplayTimeQ = $entityManager->getRepository(QuestionAttribute::class)->find($value1);
                                $participantAnswer4 = new ParticipantAnswerAttribute();
                                $participantAnswer4->setFkParticipantAnswer($participantAnswer);
                                $participantAnswer4->setFkQuestionAttribute($paramDisplayTimeQ);
                                $entityManager->persist($participantAnswer4);
                            } else {
                                $participantAnswer4 = new ParticipantAnswerAttribute();
                                $participantAnswer4->setFkParticipantAnswer($participantAnswer);
                                $participantAnswer4->setFkTestAttribute($paramDisplayTimeT);
                                $entityManager->persist($participantAnswer4);
                            }
                            $entityManager->flush();
                        }
                    }
                }
            }
            return $this->redirectToRoute('home_index', [
                'done' => 'true',
            ]);
        }
        $questionOrder = $entityManager->getRepository(Test::class)->findTestQuestionOrder($Test);
        $testTime = null;
        $backgroundT = $entityManager->getRepository(TestAttribute::class)->findAllByBackgroundColor($Test->getId());
        if ($backgroundT != null) {
            $backgroundTRandom = $backgroundT[array_rand($backgroundT, 1)];
        } else {
            $backgroundTRandom = null;
        }
        $buttonColorT = $entityManager->getRepository(TestAttribute::class)->findAllByButtonColor($Test->getId());
        if ($buttonColorT != null) {
            $buttonColorTRandom = $buttonColorT[array_rand($buttonColorT, 1)];
        } else {
            $buttonColorTRandom = null;
        }
        $picturesT = $entityManager->getRepository(TestAttribute::class)->findAllByPicture($Test->getId());
        if ($picturesT != null) {
            $picturesTRandom = $picturesT[array_rand($picturesT, 1)];
        } else {
            $picturesTRandom = null;
        }
        $displayTimeT = $entityManager->getRepository(TestAttribute::class)->findAllByDisplayTime($Test->getId());
        if ($displayTimeT != null) {
            $displayTimeTRandom = $displayTimeT[array_rand($displayTimeT, 1)];
        } else {
            $displayTimeTRandom = null;
        }
        $timeT = $entityManager->getRepository(TestAttribute::class)->findAllByTime($Test->getId());
        if ($timeT != null) {
            $timeTRandom = $timeT[array_rand($timeT, 1)];
            $testTime = $timeTRandom;
        } else {
            $timeTRandom = null;
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

            if ($displayTimeT != null) {
                $this->setDataTest($question['serial_number']-1, 'paramDisplayTime', $displayTimeTRandom);
            }
            else {
                $displayTimeQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByDisplayTime($question['id']);
                if ($displayTimeQ != null) {
                    $this->setDataTest($question['serial_number'] - 1, 'paramDisplayTime', $displayTimeQ[array_rand($displayTimeQ, 1)]);
                } else {
                    $this->setDataTest($question['serial_number'] - 1, 'paramDisplayTime', []);
                }
            }

            $filQ = $entityManager->getRepository(Files::class)->findOneByQuestion($question['id']);
            if ($filQ != null) {
                $this->setDataTest($question['serial_number']-1, 'file', $filQ[array_rand($filQ, 1)]);
            }
            else {
                $this->setDataTest($question['serial_number']-1, 'file', []);
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

            if ($timeT != null) {
                $this->setDataTest($question['serial_number']-1, 'paramTime', $timeTRandom);
            }
            else {
                $timeQ = $entityManager->getRepository(QuestionAttribute::class)->findAllByTime($question['id']);
                if ($timeQ != null) {
                    $this->setDataTest($question['serial_number'] - 1, 'paramTime', $timeQ[array_rand($timeQ, 1)]);
                } else {
                    $this->setDataTest($question['serial_number'] - 1, 'paramTime', []);
                }
            }
        }
        return $this->render('test/new_participation.html.twig', [
            'testTime' => $testTime,
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

        $attributeText = [];
        $attributeText['buttonColor'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findButtonColorAttribute();
        $attributeText['time'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findTimeAttribute();
        $attributeText['backgroundColor'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findBackgroundColorAttribute();
        $attributeText['displayTime'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findDisplayTimeAttribute();
        $attributeText['picture'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findPictureAttribute();

        $attributes = [];
        $attributes['times'] = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findAllByTime($Test);
        $attributes['buttonColors'] = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findAllByButtonColor($Test);
        $attributes['backgroundColors'] = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findAllByBackgroundColor($Test);
        $attributes['displayTimes'] = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findAllByDisplayTime($Test);
        $attributes['pictures'] = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findAllByPicture($Test);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $testQuestions = $Test->getTestQuestions();
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

            if (isset($_POST['test_attribute_time']) && $_POST['test_attribute_time'] != '') {
                $test_attribute_T = [];
                foreach ($_POST['test_attribute_time'] as $key => $value) {
                    $T = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findOneBy(['id' => key($value)]);
                    if (in_array($T, $attributes['times'])) {
                        $T->setValue(array_values($value)[0].':'.array_values($value)[1].':'.array_values($value)[2]);
                        $entityManager->persist($T);
                        $test_attribute_T[] = $T;
                    }
                    else {
                        $testDTAttribute = new TestAttribute();
                        $testDTAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findTimeAttribute());
                        $testDTAttribute->setValue(array_values($value)[0].':'.array_values($value)[1].':'.array_values($value)[2]);
                        $testDTAttribute->setFkTest($Test);
                        $entityManager->persist($testDTAttribute);
                    }
                }
                foreach ( $attributes['times'] as $T ) {
                    if (!in_array($T, $test_attribute_T)) {
                        $attributesArray = $T->getParticipantAnswerAttributes();
                        foreach ($attributesArray as $a) {
                            $T->removeParticipantAnswerAttribute($a);
                            $entityManager->persist($T);
                        }
                        $entityManager->remove($T);
                    }
                }
                $entityManager->flush();
            }
            else {
                if ($attributes['times'] != null) {
                    foreach ( $attributes['times'] as $T ) {
                        if (!in_array($T, [])) {
                            $attributesArray = $T->getParticipantAnswerAttributes();
                            foreach ($attributesArray as $a) {
                                $T->removeParticipantAnswerAttribute($a);
                                $entityManager->persist($T);
                            }
                            $entityManager->remove($T);
                        }
                    }
                    $entityManager->flush();
                }
            }
            if (isset($_POST['test_attribute_buttonColor']) && $_POST['test_attribute_buttonColor'] != '') {
                $test_attribute_buttonColor = [];
                foreach ($_POST['test_attribute_buttonColor'] as $key => $value) {
                    $buttonColor = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findOneBy(['id' => key($value)]);
                    if (in_array($buttonColor, $attributes['buttonColors'])) {
                        $buttonColor->setValue(array_values($value)[0]);
                        $entityManager->persist($buttonColor);
                        $test_attribute_buttonColor[] = $buttonColor;
                    } else {
                        $testBtnCAttribute = new TestAttribute();
                        $testBtnCAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findButtonColorAttribute());
                        $testBtnCAttribute->setValue(array_values($value)[0]);
                        $testBtnCAttribute->setFkTest($Test);
                        $entityManager->persist($testBtnCAttribute);
                    }
                }
                foreach ( $attributes['buttonColors'] as $buttonColor ) {
                    if (!in_array($buttonColor, $test_attribute_buttonColor)) {
                        $attributesArray = $buttonColor->getParticipantAnswerAttributes();
                        foreach ($attributesArray as $a) {
                            $buttonColor->removeParticipantAnswerAttribute($a);
                            $entityManager->persist($buttonColor);
                        }
                        $entityManager->remove($buttonColor);
                    }
                }
                $entityManager->flush();
            }
            else {
                if ($attributes['buttonColors'] != null) {
                    foreach ( $attributes['buttonColors'] as $buttonColor ) {
                        if (!in_array($buttonColor, [])) {
                            $attributesArray = $buttonColor->getParticipantAnswerAttributes();
                            foreach ($attributesArray as $a) {
                                $buttonColor->removeParticipantAnswerAttribute($a);
                                $entityManager->persist($buttonColor);
                            }
                            $entityManager->remove($buttonColor);
                        }
                    }
                    $entityManager->flush();
                }
            }
            if (isset($_POST['test_attribute_backgroundColor']) && $_POST['test_attribute_backgroundColor'] != '') {
                $question_attribute_backgroundColor = [];
                foreach ($_POST['test_attribute_backgroundColor'] as $key => $value) {
                    $backgroundColor = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findOneBy(['id' => key($value)]);
                    if (in_array($backgroundColor, $attributes['backgroundColors'])) {
                        $backgroundColor->setValue(array_values($value)[0]);
                        $entityManager->persist($backgroundColor);
                        $question_attribute_backgroundColor[] = $backgroundColor;
                    }
                    else {
                        $testBgCAttribute = new TestAttribute();
                        $testBgCAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findBackgroundColorAttribute());
                        $testBgCAttribute->setValue(array_values($value)[0]);
                        $testBgCAttribute->setFkTest($Test);
                        $entityManager->persist($testBgCAttribute);
                    }
                }
                foreach ( $attributes['backgroundColors'] as $backgroundColor ) {
                    if (!in_array($backgroundColor, $question_attribute_backgroundColor)) {
                        $attributesArray = $backgroundColor->getParticipantAnswerAttributes();
                        foreach ($attributesArray as $a) {
                            $backgroundColor->removeParticipantAnswerAttribute($a);
                            $entityManager->persist($backgroundColor);
                        }
                        $entityManager->remove($backgroundColor);
                    }
                }
                $entityManager->flush();
            }
            else {
                if ($attributes['backgroundColors'] != null) {
                    foreach ( $attributes['backgroundColors'] as $backgroundColor ) {
                        if (!in_array($backgroundColor, [])) {
                            $attributesArray = $backgroundColor->getParticipantAnswerAttributes();
                            foreach ($attributesArray as $a) {
                                $backgroundColor->removeParticipantAnswerAttribute($a);
                                $entityManager->persist($backgroundColor);
                            }
                            $entityManager->remove($backgroundColor);
                        }
                    }
                    $entityManager->flush();
                }
            }
            if (isset($_POST['test_attribute_displayTime']) && $_POST['test_attribute_displayTime'] != '') {
                $test_attribute_DT = [];
                foreach ($_POST['test_attribute_displayTime'] as $key => $value) {
                    $DT = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findOneBy(['id' => key($value)]);
                    if (in_array($DT, $attributes['displayTimes'])) {
                        $DT->setValue(array_values($value)[0].':'.array_values($value)[1].':'.array_values($value)[2]);
                        $entityManager->persist($DT);
                        $test_attribute_DT[] = $DT;
                    }
                    else {
                        $testDTAttribute = new TestAttribute();
                        $testDTAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findDisplayTimeAttribute());
                        $testDTAttribute->setValue(array_values($value)[0].':'.array_values($value)[1].':'.array_values($value)[2]);
                        $testDTAttribute->setFkTest($Test);
                        $entityManager->persist($testDTAttribute);
                    }
                }
                foreach ( $attributes['displayTimes'] as $DT ) {
                    if (!in_array($DT, $test_attribute_DT)) {
                        $attributesArray = $DT->getParticipantAnswerAttributes();
                        foreach ($attributesArray as $a) {
                            $DT->removeParticipantAnswerAttribute($a);
                            $entityManager->persist($DT);
                        }
                        $entityManager->remove($DT);
                    }
                }
                $entityManager->flush();
            }
            else {
                if ($attributes['displayTimes'] != null) {
                    foreach ( $attributes['displayTimes'] as $DT ) {
                        if (!in_array($DT, [])) {
                            $attributesArray = $DT->getParticipantAnswerAttributes();
                            foreach ($attributesArray as $a) {
                                $DT->removeParticipantAnswerAttribute($a);
                                $entityManager->persist($DT);
                            }
                            $entityManager->remove($DT);
                        }
                    }
                    $entityManager->flush();
                }
            }
            if (isset($_FILES['test_attribute_picture'])) {
                $pictureArray = [[]];
                foreach ($_FILES['test_attribute_picture'] as $key => $value) {
                    foreach ($value as $key1 => $value1) {
                        $pictureArray[$key1][key($value1)][$key] = array_values($value1)[0];
                    }
                }
                $question_attribute = [];
                foreach ($pictureArray as $key => $value) {
                    foreach ($value as $key1 => $value1) {
                        $attribute = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findOneBy(['id' => $key1]);
                        if ($value1['name'] == '') {
                            $question_attribute[] = $attribute;
                        }
                        else {
                            $newfile = new File($value1['tmp_name']);
                            $fileName = $value1['name'];
                            $attributeByVal = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findOneBy(['value' => $fileName]);
                            if (in_array($attribute, $attributes['pictures'])) {
                                $this->deleteFile($attribute->getValue());
                                $attribute->setValue($fileName);
                                $entityManager->persist($attribute);
                                $question_attribute[] = $attribute;
                                if ($attributeByVal == null) {
                                    try {
                                        $newfile->move(
                                            $this->getParameter('brochures_directory'),
                                            $fileName
                                        );
                                    } catch (FileException $e) {
                                        throw $this->createNotFoundException('file not uploaded');
                                    }
                                }
                            } else {
                                if ($attributeByVal == null) {
                                    try {
                                        $newfile->move(
                                            $this->getParameter('brochures_directory'),
                                            $fileName
                                        );
                                    } catch (FileException $e) {
                                        throw $this->createNotFoundException('file not uploaded');
                                    }
                                }
                                $PictureAttribute = new TestAttribute();
                                $PictureAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findPictureAttribute());
                                $PictureAttribute->setValue($fileName);
                                $PictureAttribute->setFkTest($Test);
                                $entityManager->persist($PictureAttribute);
                            }
                        }
                    }
                }
                foreach ( $attributes['pictures'] as $picture ) {
                    if (!in_array($picture, $question_attribute)) {
                        $this->deleteFile($picture->getValue());
                        $attributesArray = $picture->getParticipantAnswerAttributes();
                        foreach ($attributesArray as $a) {
                            $picture->removeParticipantAnswerAttribute($a);
                            $entityManager->persist($picture);
                        }
                        $entityManager->remove($picture);
                    }
                }
                $entityManager->flush();
            }
            else {
                if ($attributes['pictures'] != null) {
                    foreach ( $attributes['pictures'] as $picture ) {
                        if (!in_array($picture, [])) {
                            $this->deleteFile($picture->getValue());
                            $attributesArray = $picture->getParticipantAnswerAttributes();
                            foreach ($attributesArray as $a) {
                                $picture->removeParticipantAnswerAttribute($a);
                                $entityManager->persist($picture);
                            }
                            $entityManager->remove($picture);
                        }
                    }
                    $entityManager->flush();
                }
            }
            $this->addFlash('success', 'test.flash_message.edited');
            return $this->redirectToRoute('test_index', [
            ]);
        }

        return $this->render('test/edit.html.twig', [
            'test' => $test,
            'form' => $form->createView(),
            'attributes' => $attributes,
            'attributeText' =>$attributeText,
        ]);
    }

    public function deleteFile( $File ) {

        $questionAttributes = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findBy(['value' => $File]);
        $testAttributes = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findBy(['value' => $File]);
        $files = $this->getDoctrine()->getManager()->getRepository(Files::class)->findBy(['name' => $File]);
        $count = 0;
        if ($questionAttributes != null) {
            foreach ($questionAttributes as $attribute) {
                $count = $count + 1;
            }
        }
        if ($testAttributes != null) {
            foreach ($testAttributes as $attribute) {
                $count = $count + 1;
            }
        }
        if ($files != null) {
            foreach ($files as $file) {
                $count = $count + 1;
            }
        }
        if ($count <= 1 ){
            if (file_exists($this->getParameter('brochures_directory') . '/' . $File)) {
                unlink($this->getParameter('brochures_directory') . '/' . $File);
            }
        }
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

            $attributes = [];
            $attributes['times'] = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findAllByTime($Test);
            $attributes['buttonColors'] = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findAllByButtonColor($Test);
            $attributes['backgroundColors'] = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findAllByBackgroundColor($Test);
            $attributes['displayTimes'] = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findAllByDisplayTime($Test);
            $attributes['pictures'] = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findAllByPicture($Test);
            $questions = $Test->getTestQuestions();
            foreach ($questions as $q) {
                $Test->removeTestQuestion($q);
                $entityManager->persist($Test);
                $entityManager->flush();
            }
            if ($attributes['pictures'] != null) {
                foreach ($attributes['pictures'] as $picture) {
                    if (!in_array($picture, [])) {
                        $this->deleteFile($picture->getValue());
                        $attributesArray = $picture->getParticipantAnswerAttributes();
                        foreach ($attributesArray as $a) {
                            $picture->removeParticipantAnswerAttribute($a);
                            $entityManager->persist($picture);
                            $entityManager->flush();
                        }
                        $entityManager->remove($picture);
                        $entityManager->flush();
                    }
                }
            }
            if ($attributes['displayTimes'] != null) {
                foreach ($attributes['displayTimes'] as $DT) {
                    if (!in_array($DT, [])) {
                        $attributesArray = $DT->getParticipantAnswerAttributes();
                        foreach ($attributesArray as $a) {
                            $DT->removeParticipantAnswerAttribute($a);
                            $entityManager->persist($DT);
                            $entityManager->flush();
                        }
                        $entityManager->remove($DT);
                        $entityManager->flush();
                    }
                }
            }
            if ($attributes['backgroundColors'] != null) {
                foreach ( $attributes['backgroundColors'] as $backgroundColor ) {
                    if (!in_array($backgroundColor, [])) {
                        $attributesArray = $backgroundColor->getParticipantAnswerAttributes();
                        foreach ($attributesArray as $a) {
                            $backgroundColor->removeParticipantAnswerAttribute($a);
                            $entityManager->persist($backgroundColor);
                            $entityManager->flush();
                        }
                        $entityManager->remove($backgroundColor);
                        $entityManager->flush();
                    }
                }
            }
            if ($attributes['buttonColors'] != null) {
                foreach ( $attributes['buttonColors'] as $buttonColor ) {
                    if (!in_array($buttonColor, [])) {
                        $attributesArray = $buttonColor->getParticipantAnswerAttributes();
                        foreach ($attributesArray as $a) {
                            $buttonColor->removeParticipantAnswerAttribute($a);
                            $entityManager->persist($buttonColor);
                            $entityManager->flush();
                        }
                        $entityManager->remove($buttonColor);
                        $entityManager->flush();
                    }
                }
            }

            if ($attributes['times'] != null) {
                foreach ( $attributes['times'] as $T ) {
                    if (!in_array($T, [])) {
                        $attributesArray = $T->getParticipantAnswerAttributes();
                        foreach ($attributesArray as $a) {
                            $T->removeParticipantAnswerAttribute($a);
                            $entityManager->persist($T);
                            $entityManager->flush();
                        }
                        $entityManager->remove($T);
                        $entityManager->flush();
                    }
                }
            }
            $Tattribute = $Test->getTestAttributes();
            foreach ($Tattribute as $ta) {
                $attribute = $entityManager->getRepository(Attribute::class)->findOneBy(['id' => $ta->getFkAttribute()]);
                if ($attribute->getName() == 'picture') {
                    $this->deleteFile($ta->getValue());
                }
                $Test->removeTestAttribute($ta);
                $entityManager->persist($Test);
                $entityManager->flush();
            }
            $testPart = $Test->getTestParticipations();
            foreach ($testPart as $tp) {
                foreach ($tp->getParticipantAnswers() as $participantAnswer) {
                    foreach ($participantAnswer->getParticipantAnswerAttributes() as $attribute) {
                        $participantAnswer->removeParticipantAnswerAttribute($attribute);
                        $entityManager->persist($participantAnswer);
                        $entityManager->flush();
                    }
                    $tp->removeParticipantAnswer($participantAnswer);
                    $entityManager->persist($tp);
                    $entityManager->flush();
                }
                $Test->removeTestParticipation($tp);
                $entityManager->persist($Test);
                $entityManager->flush();
            }

            $entityManager->remove($Test);
            $entityManager->flush();
            $this->addFlash('warning', 'test.flash_message.deleted');
        }

        return $this->redirectToRoute('test_index');
    }

    /**
     * @Route("test/{id}/report", name="test_report")
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    public function generateReport(Test $test): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (null === $Test = $entityManager->getRepository(Test::class)->find($test->getId())) {
            throw $this->createNotFoundException('No Test for id '.$test->getId());
        }
        $spreadsheet = new Spreadsheet();
        $spreadsheet->getDefaultStyle()->getFont()->setSize(9);
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Pavadinimas');
        $sheet->getStyle('A1')->getAlignment()->setWrapText(true);
        $sheet->setCellValue('A2', $Test->getName());
        $sheet->setCellValue('B1', 'Aprašas');
        $sheet->getStyle('B1')->getAlignment()->setWrapText(true);
        if ($Test->getDescription() != null) {
            $sheet->setCellValue('B2', $Test->getDescription());
        }
        else {
            $sheet->setCellValue('B2', '-');
        }
        $sheet->setCellValue('C1', 'Testo pradžia');
        $sheet->getStyle('C1')->getAlignment()->setWrapText(true);
        $sheet->setCellValue('C2', $Test->getTestStart());
        $sheet->setCellValue('D1', 'Testo pabaiga');
        $sheet->getStyle('D1')->getAlignment()->setWrapText(true);
        if ($Test->getDescription() != null) {
            $sheet->setCellValue('D2', $Test->getTestEnd());
        }
        else {
            $sheet->setCellValue('D2', '-');
        }
        $sheet->setCellValue('E1', 'Sukūrimo data');
        $sheet->getStyle('E1')->getAlignment()->setWrapText(true);
        $sheet->setCellValue('E2', $Test->getCreatedAt());
        $sheet->setCellValue('F1', 'Kodas');
        $sheet->getStyle('F1')->getAlignment()->setWrapText(true);
        $sheet->setCellValue('F2', $Test->getCode());
        $sheet->setCellValue('G1', 'Abipusė navigacija');
        $sheet->getStyle('G1')->getAlignment()->setWrapText(true);
        $sheet->setCellValue('G2', $Test->getPrevButton() ? 'taip' : 'ne');

        $attributesArray = [];
        $attributeCount = 1;
        $rowTitle = 4;
        $rowHeader = 5;
        $participations = $Test->getTestParticipations();
        foreach ($participations as $participation) {
            $collum = 1;
            $merge1 = 0;
            $merge2 = 0;
            $participantAnswers = $entityManager->getRepository(ParticipantAnswer::class)->findBy(['fk_testParticipation' => $participation->getId()]);
            $sheet->setCellValueByColumnAndRow($collum, $rowHeader, "Vykdymo pradžia");
            $sheet->getStyleByColumnAndRow($collum, $rowHeader)->getAlignment()->setWrapText(true);
            $sheet->getColumnDimensionByColumn($collum)->setWidth(10);
            $collum = $collum +1;
            $sheet->setCellValueByColumnAndRow($collum, $rowHeader, "Vykdymo pabaiga" );
            $sheet->getStyleByColumnAndRow($collum, $rowHeader)->getAlignment()->setWrapText(true);
            $sheet->getColumnDimensionByColumn($collum)->setWidth(10);
            $collum = $collum +1;
            foreach ($participantAnswers as $answer) {
                $merge1 = $collum;
                $deleted = false;
                $question = $entityManager->getRepository(Question::class)->findOneBy(['id' => $answer->getFkQuestion()]);
                if ($question != null) {
                    $group = $entityManager->getRepository(GroupList::class)->findOneBy(['id' => $question->getFkGroup()]);
                    if ($group != null) {
                        $sheet->setCellValueByColumnAndRow($merge1, $rowTitle, $group->getName() . ' : ' . $question->getQuestionName());
                    } else {
                        $sheet->setCellValueByColumnAndRow($merge1, $rowTitle, $question->getQuestionName());
                    }
                    $sheet->getStyleByColumnAndRow($merge1, $rowTitle)->getFont()->setBold(true);
                    $sheet->getStyleByColumnAndRow($merge1, $rowTitle)->getAlignment()->setWrapText(true);
                    if ($question->getType() == 'one' or $question->getType() == 'multi' or $question->getType() == 'open') {
                        $sheet->setCellValueByColumnAndRow($collum, $rowHeader, $question->getType() . " klausimo tipo atsakymas");
                        $sheet->getStyleByColumnAndRow($collum, $rowHeader)->getAlignment()->setWrapText(true);
                        $sheet->getColumnDimensionByColumn($collum)->setWidth(10);
                        $collum = $collum + 1;
                    }
                    if ($question->getType() == 'presentation') {
                        $sheet->setCellValueByColumnAndRow($collum, $rowHeader, $question->getType() . " klausimo tipas");
                        $sheet->getStyleByColumnAndRow($collum, $rowHeader)->getAlignment()->setWrapText(true);
                        $sheet->getColumnDimensionByColumn($collum)->setWidth(10);
                        $collum = $collum + 1;
                    }
                } else {
                    $deleted = true;
                }
                $ParticipantAnswerAttributes = $entityManager->getRepository(ParticipantAnswerAttribute::class)->findBy(['fk_participantAnswer' => $answer->getId()]);
                if ($ParticipantAnswerAttributes != null && !$deleted) {
                    if (!array_key_exists($question->getId(),$attributesArray) || $attributesArray[$question->getId()] < count($ParticipantAnswerAttributes )) {
                        $attributesArray[$question->getId()] = count($ParticipantAnswerAttributes);
                    }
                    foreach ($ParticipantAnswerAttributes as $participantAnswerAttribute) {
                        $testAttribute = $entityManager->getRepository(TestAttribute::class)->findOneBy(['id' => $participantAnswerAttribute->getFkTestAttribute()]);
                        if ($testAttribute == null) {
                            $questionAttribute = $entityManager->getRepository(QuestionAttribute::class)->findOneBy(['id' => $participantAnswerAttribute->getFkQuestionAttribute()]);
                            if ($questionAttribute != null) {
                                $attribute = $entityManager->getRepository(Attribute::class)->findOneBy(['id' => $questionAttribute->getFkAttribute()]);
                                if ($attribute != null) {
                                    $sheet->setCellValueByColumnAndRow($collum, $rowHeader, $attribute->getName() . " savybės reikšmė");
                                    $sheet->getStyleByColumnAndRow($collum, $rowHeader)->getAlignment()->setWrapText(true);
                                    $sheet->getColumnDimensionByColumn($collum)->setWidth(10);
                                    $collum = $collum + 1;
                                    if ($attribute->getName() == 'time') {
                                        $sheet->setCellValueByColumnAndRow($collum, $rowHeader, $attribute->getName() . " laiko vertė");
                                        $sheet->getStyleByColumnAndRow($collum, $rowHeader)->getAlignment()->setWrapText(true);
                                        $sheet->getColumnDimensionByColumn($collum)->setWidth(10);
                                        $collum = $collum + 1;
                                    }
                                }
                            }
                        } else {
                            if ($testAttribute != null) {
                                $attribute = $entityManager->getRepository(Attribute::class)->findOneBy(['id' => $testAttribute->getFkAttribute()]);
                                if ($attribute != null) {
                                    $sheet->setCellValueByColumnAndRow($collum, $rowHeader, $attribute->getName() . " savybės reikšmė");
                                    $sheet->getStyleByColumnAndRow($collum, $rowHeader)->getAlignment()->setWrapText(true);
                                    $sheet->getColumnDimensionByColumn($collum)->setWidth(10);
                                    $collum = $collum + 1;
                                    if ($attribute->getName() == 'time') {
                                        $sheet->setCellValueByColumnAndRow($collum, $rowHeader, $attribute->getName() . " laiko vertė");
                                        $sheet->getStyleByColumnAndRow($collum, $rowHeader)->getAlignment()->setWrapText(true);
                                        $sheet->getColumnDimensionByColumn($collum)->setWidth(10);
                                        $collum = $collum + 1;
                                    }
                                }
                            }
                        }
                    }
                }
                if (!$deleted) {
                    $sheet->mergeCellsByColumnAndRow($merge1, $rowTitle, $collum - 1, $rowTitle);
                }
            }
        }
        $row = 6;
        $participations = $Test->getTestParticipations();
        foreach ($participations as $participation) {
            $collum = 1;
            $merge1 = 0;
            $merge2 = 0;
            $participantAnswers = $entityManager->getRepository(ParticipantAnswer::class)->findBy(['fk_testParticipation' => $participation->getId()]);
            $sheet->setCellValueByColumnAndRow($collum, $row, $participation->getTestStartedAt());
            $sheet->getStyleByColumnAndRow($collum, $row)->getAlignment()->setWrapText(true);
            $collum = $collum +1;
            $sheet->setCellValueByColumnAndRow($collum, $row, $participation->getTestEndedAt());
            $sheet->getStyleByColumnAndRow($collum, $row)->getAlignment()->setWrapText(true);
            $collum = $collum +1;
            foreach ($participantAnswers as $answer) {
                $deleted = false;
                $question = $entityManager->getRepository(Question::class)->findOneBy(['id' => $answer->getFkQuestion()]);
                if ($question != null ) {
                    if ($question->getType() == 'one' or $question->getType() == 'multi') {
                        $answerOptions = $answer->getFkAnsweroption();
                        $answers = '';
                        foreach ($answerOptions as $answerOption) {
                            if ($answerOption->getAnswer() != null) {
                                $answers = $answers . $answerOption->getAnswer() . ';';
                            }
                        }
                        if ($answers != '') {
                            $sheet->setCellValueByColumnAndRow($collum, $row, $answers);
                            $sheet->getStyleByColumnAndRow($collum, $row)->getAlignment()->setWrapText(true);
                        } else {
                            $sheet->setCellValueByColumnAndRow($collum, $row, '-');
                            $sheet->getStyleByColumnAndRow($collum, $row)->getAlignment()->setWrapText(true);
                        }
                        $collum = $collum + 1;
                    }
                    if ($question->getType() == 'open') {
                        if ($answer->getAnswer() != null) {
                            $sheet->setCellValueByColumnAndRow($collum, $row, $answer->getAnswer());
                            $sheet->getStyleByColumnAndRow($collum, $row)->getAlignment()->setWrapText(true);
                        } else {
                            $sheet->setCellValueByColumnAndRow($collum, $row, '-');
                            $sheet->getStyleByColumnAndRow($collum, $row)->getAlignment()->setWrapText(true);
                        }
                        $collum = $collum + 1;
                    }
                    if ($question->getType() == 'presentation') {
                        $sheet->setCellValueByColumnAndRow($collum, $row, '-');
                        $sheet->getStyleByColumnAndRow($collum, $row)->getAlignment()->setWrapText(true);
                        $collum = $collum + 1;
                    }
                } else {
                    $deleted = true;
                }
                $ParticipantAnswerAttributes = $entityManager->getRepository(ParticipantAnswerAttribute::class)->findBy(['fk_participantAnswer' => $answer->getId()]);
                if ($ParticipantAnswerAttributes != null && !$deleted) {
                    foreach ($ParticipantAnswerAttributes as $participantAnswerAttribute) {
                        $testAttribute = $entityManager->getRepository(TestAttribute::class)->findOneBy(['id' => $participantAnswerAttribute->getFkTestAttribute()]);
                        if ($testAttribute == null) {
                            $questionAttribute = $entityManager->getRepository(QuestionAttribute::class)->findOneBy(['id' => $participantAnswerAttribute->getFkQuestionAttribute()]);
                            if ($questionAttribute != null) {
                                $attribute = $entityManager->getRepository(Attribute::class)->findOneBy(['id' => $questionAttribute->getFkAttribute()]);
                                if ($attribute != null) {
                                    $sheet->setCellValueByColumnAndRow($collum, $row, $questionAttribute->getValue());
                                    $sheet->getStyleByColumnAndRow($collum, $row)->getAlignment()->setWrapText(true);
                                    $collum = $collum + 1;
                                    if ($attribute->getName() == 'time') {
                                        $sheet->setCellValueByColumnAndRow($collum, $row, $participantAnswerAttribute->getValue());
                                        $sheet->getStyleByColumnAndRow($collum, $row)->getAlignment()->setWrapText(true);
                                        $collum = $collum + 1;
                                    }
                                }
                            }
                        } else {
                            if ($testAttribute != null) {
                                $attribute = $entityManager->getRepository(Attribute::class)->findOneBy(['id' => $testAttribute->getFkAttribute()]);
                                if ($attribute != null) {
                                    $sheet->setCellValueByColumnAndRow($collum, $row, $testAttribute->getValue());
                                    $sheet->getStyleByColumnAndRow($collum, $row)->getAlignment()->setWrapText(true);
                                    $collum = $collum + 1;
                                    if ($attribute->getName() == 'time') {
                                        $sheet->setCellValueByColumnAndRow($collum, $row, $participantAnswerAttribute->getValue());
                                        $sheet->getStyleByColumnAndRow($collum, $row)->getAlignment()->setWrapText(true);
                                        $collum = $collum + 1;
                                    }
                                }
                            }
                        }
                    }
                    if ($attributesArray[$question->getId()] > count($ParticipantAnswerAttributes)){
                        for ($i = $ParticipantAnswerAttributes; $i < $attributesArray[$question->getId()]; $i++) {
                            $sheet->setCellValueByColumnAndRow($collum, $row, '-');
                            $sheet->getStyleByColumnAndRow($collum, $row)->getAlignment()->setWrapText(true);
                            $collum = $collum + 1;
                        }
                    }
                }
            }
            $row= $row + 1;
        }

        $sheet->setTitle($test->getName());

        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Xlsx($spreadsheet);

        $time = $test->getCreatedAt();
        $day = $time->format('d');
        $month= $time->format('m');
        $year = $time->format('Y');

        $name = '';
        $words = explode(" ", $test->getName());
        foreach ($words as $w) {
            $w = ucfirst($w);
            $name = $name . $w;
        }

        // Create a Temporary file in the system
        $fileName = $year. $month. $day. $name . '.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Create the excel file in the tmp directory of the system
        $writer->save($temp_file);

        // Return the excel file as an attachment
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }

    /**
     * @Route("/test/{id}/copy", name="test_copy", methods={"GET"})
     */
    public function copy(Test $test): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (null === $Test = $entityManager->getRepository(Test::class)->find($test->getId())) {
            throw $this->createNotFoundException('No Test for id '.$test->getId());
        }
        $questionOrder = $entityManager->getRepository(Test::class)->findTestQuestionOrder($Test);
        $backgroundT = $entityManager->getRepository(TestAttribute::class)->findAllByBackgroundColor($Test->getId());
        $buttonColorT = $entityManager->getRepository(TestAttribute::class)->findAllByButtonColor($Test->getId());
        $picturesT = $entityManager->getRepository(TestAttribute::class)->findAllByPicture($Test->getId());
        $displayTimeT = $entityManager->getRepository(TestAttribute::class)->findAllByDisplayTime($Test->getId());
        $timeT = $entityManager->getRepository(TestAttribute::class)->findAllByTime($Test->getId());

        $test = new Test();
        $test->setName($Test->getName());
        $test->setDescription($Test->getDescription());
        $test->setFkUser($this->getUser());
        $test->setCode($this->generateRandomString(6));
        $test->setCreatedAt();
        $test->setPrevButton($Test->getPrevButton());
        $test->setIsActive($Test->getIsActive());
        $test->setTestStart($Test->getTestStart());
        $test->setTestEnd($Test->getTestEnd());
        $entityManager->persist($test);
        $entityManager->flush();

        if ($questionOrder != null) {
            foreach ($questionOrder as $qo) {
                $testQuestion = new TestQuestion();
                $testQuestion->setSerialNumber($qo['serial_number']);
                $testQuestion->setFkQuestion($entityManager->getRepository(Question::class)->findOneBy(['id' => $qo['id'] ]));
                $testQuestion->setFkTest($test);
                $entityManager->persist($testQuestion);
                $entityManager->flush();
            }
        }
        if ($backgroundT != null) {
            foreach ($backgroundT as $bg){
                $testAttribute = new TestAttribute();
                $testAttribute->setFkAttribute($bg->getFkAttribute());
                $testAttribute->setValue($bg->getValue());
                $testAttribute->setFkTest($test);
                $entityManager->persist($testAttribute);
                $entityManager->flush();
            }
        }
        if ($buttonColorT != null) {
            foreach ($buttonColorT as $bC){
                $testAttribute = new TestAttribute();
                $testAttribute->setFkAttribute($bC->getFkAttribute());
                $testAttribute->setValue($bC->getValue());
                $testAttribute->setFkTest($test);
                $entityManager->persist($testAttribute);
                $entityManager->flush();
            }
        }
        if ($timeT != null) {
            foreach ($timeT as $t){
                $testAttribute = new TestAttribute();
                $testAttribute->setFkAttribute($t->getFkAttribute());
                $testAttribute->setValue($t->getValue());
                $testAttribute->setFkTest($test);
                $entityManager->persist($testAttribute);
                $entityManager->flush();
            }
        }
        if ($displayTimeT != null) {
            foreach ($displayTimeT as $dT){
                $testAttribute = new TestAttribute();
                $testAttribute->setFkAttribute($dT->getFkAttribute());
                $testAttribute->setValue($dT->getValue());
                $testAttribute->setFkTest($test);
                $entityManager->persist($testAttribute);
                $entityManager->flush();
            }
        }
        if ($picturesT != null) {
            foreach ($picturesT as $picture){
                $testAttribute = new TestAttribute();
                $testAttribute->setFkAttribute($picture->getFkAttribute());
                $testAttribute->setValue($picture->getValue());
                $testAttribute->setFkTest($test);
                $entityManager->persist($testAttribute);
                $entityManager->flush();
            }
        }
        $this->addFlash('success', 'test.flash_message.copy');
        return $this->redirectToRoute('test_index');
    }
}
