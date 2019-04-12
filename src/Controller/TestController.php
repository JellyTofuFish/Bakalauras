<?php

namespace App\Controller;

use App\Entity\Test;
use App\Entity\TestQuestion;
use App\Form\TestType;
use App\Repository\TestQuestionRepository;
use App\Repository\TestRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * QuestionController constructor.
     */
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
    public function show(Test $test, TestQuestionRepository $testQuestionRepository): Response
    {
        if (null === $Test = $this->getDoctrine()->getManager()->getRepository(Test::class)->find($test->getId())) {
            throw $this->createNotFoundException('No Test for id '.$test->getId());
        }
        $questions =  $testQuestionRepository->findQuestionsbyTest($test->getId());
        return $this->render('test/show.html.twig', [
            'test' => $test,
            'questions' => $questions
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
        $entityManager = $this->getDoctrine()->getManager();
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
                'id' => $test->getId(),
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
        if ($this->isCsrfTokenValid('delete'.$test->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($test);
            $entityManager->flush();
        }

        return $this->redirectToRoute('test_index');
    }
}
