<?php

namespace App\Controller;

use App\Entity\AnswerOption;
use App\Entity\GroupList;
use App\Entity\Question;
use App\Form\GroupSimpleType;
use App\Form\GroupType;
use App\Form\QuestionType;
use App\Repository\GroupRepository;
use App\Repository\QuestionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\StringType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Cookie;

class QuestionController extends AbstractController
{
    private $session;

    /**
     * QuestionController constructor.
     */
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }
    protected $arrayData = [
        'question_name' => 'fa-sort',
        'type'=> 'fa-sort',
        'group'=> 'fa-sort',
    ];

    public function setData($key, $value)
    {
        $this->arrayData[$key] = $value;
    }
    public function getData($key)
    {
        return $this->arrayData[$key];
    }

    /**
     * @Route("/questions", name="question_index", methods={"GET","POST"} ))
     */
    public function index(Request $request, QuestionRepository $questionRepository, GroupRepository $groupRepository): Response
    {
        $route = $request->query->get('route');
        $slug =  $request->query->get('slug');
        $sort =  $request->query->get('sort');
        $g = $request->query->get('group');

        // default question index query
        $questionQuery = $questionRepository->findAll();

        // Reset group filter to default value ( route reached from navbar )
        if ($slug == null && $sort == null && $g == null ) { $this->session->set('groupsort', 'full'); }
        // Set a new group filter if one was set
        if ($g != null) { $this->session->set('groupsort', $g); }
        $g = $this->session->get('groupsort');
        // Query questions by newly set group filter
        if ($g != 'full'){ $questionQuery = $questionRepository->findAllAndFilterByGroup($g); }

        // Order questions table by group and table fields
        if ( $sort == 'fa-sort') {
            $this->setData('question_name','fa-sort');
            $this->setData('type','fa-sort');
            $this->setData('group','fa-sort');
            $this->setData($slug,'fa-sort-up');
            if ($slug == 'question_name') {
                $questionQuery = $questionRepository->findAllAndSortNameAsc($g);
            }
            else if ($slug == 'type'){
                $questionQuery = $questionRepository->findAllAndSortTypeAsc($g);
            }
            else {
                $questionQuery = $questionRepository->findAllAndSortGroupAsc($g);
            }
        }
        elseif ($sort == 'fa-sort-up'){
            $this->setData($slug,'fa-sort-down');

            if ($slug == 'question_name') {
                $questionQuery = $questionRepository->findAllAndSortNameDesc($g);
            }
            else if ($slug == 'type'){
                $questionQuery = $questionRepository->findAllAndSortTypeDesc($g);
            }
            else {
                $questionQuery = $questionRepository->findAllAndSortGroupDesc($g);
            }
        }
        else if ($sort == 'fa-sort-down'){
            $this->setData($slug,'fa-sort');
        }

        // Group query and new group request form handle
        $groupQuery = $groupRepository->findAll();
        $group = new GroupList();
        $form = $this->createForm(GroupType::class, $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($group);
            $entityManager->flush();
        }

        // Flash message
        if ($route != null ) {
            $this->addFlash('primary', 'question.flash_message.question');
        }

        return $this->render('question/index.html.twig', [
            'questions' => $questionQuery,
            'groups' => $groupQuery,
            'form' => $form->createView(),
            'data' => $this->arrayData,
        ]);
    }

    /**
     * @Route("/question/new", name="question_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $group = new GroupList();
        $question = new Question();
        $question->setFkUser($this->getUser());

        $form = $this->createForm(QuestionType::class, $question);
        $formGroup = $this->createForm(GroupSimpleType::class, $group);
        $form->handleRequest($request);

        return $this->render('question/new.html.twig', [
            'question'=> $question,
            'form' => $form->createView(),
            'formGroup' => $formGroup->createView()
        ]);
    }

    /**
     * @Route("/question/new/save", name="question_new_save", methods={"GET","POST"})
     */
    public function newSave(Request $request)
    {
        $question = new Question();
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        $entityManager = $this->getDoctrine()->getManager();
        if ($form->isSubmitted() && $form->isValid()) {
            $Answers = $question->getAnsweroptions();
            foreach ($Answers as $ao) {
                $entityManager->persist($ao);
            }
            $entityManager->persist($question);
            $entityManager->flush();
        }
        return new JsonResponse(['id'=> $question->getId()]);
    }

    /**
     * @Route("/question/{id}", name="question_show", methods={"GET"})
     */
    public function show(Question $question): Response
    {
        if (null === $questionQ = $this->getDoctrine()->getManager()->getRepository(Question::class)->find($question->getId())) {
            throw $this->createNotFoundException('No task Question for id '.$question->getId());
        }
        $originalAnswers = new ArrayCollection();

        foreach ($questionQ->getAnsweroptions() as $answeroption) {
            $originalAnswers->add($answeroption);
        }

        return $this->render('question/show.html.twig', [
            'question' => $question,
            'answers' => $originalAnswers
        ]);
    }

    /**
     * @Route("/question/{id}/example", name="question_show_example", methods={"GET"})
     */
    public function showExample(Question $question): Response
    {
        if (null === $questionQ = $this->getDoctrine()->getManager()->getRepository(Question::class)->find($question->getId())) {
            throw $this->createNotFoundException('No Question found for id '.$question->getId());
        }

        $Answers = new ArrayCollection();

        foreach ($questionQ->getAnsweroptions() as $answeroption) {
            $Answers->add($answeroption);
        }

        return $this->render('question/example_show.html.twig', [
            'question' => $question,
            'answers' => $Answers
        ]);
    }

    /**
     * @Route("/question/{id}/edit", name="question_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Question $question): Response
    {
        $group = new GroupList();
        $entityManager = $this->getDoctrine()->getManager();
        if (null === $questionQ = $entityManager->getRepository(Question::class)->find($question->getId())) {
            throw $this->createNotFoundException('No task found for id '.$question->getId());
        }

        $form = $this->createForm(QuestionType::class, $questionQ);
        $formGroup = $this->createForm(GroupSimpleType::class, $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $Answers = $question->getAnsweroptions();
            foreach ($Answers as $ao) {
                if (false === $questionQ->getAnsweroptions()->contains($ao)) {
                    $questionQ->removeAnsweroption($ao);
                    $entityManager->persist($ao);
                }
            }
            $entityManager->persist($questionQ);
            $entityManager->flush();

            return $this->redirectToRoute('question_show', [
                'id' => $question->getId(),
            ]);
        }

        return $this->render('question/edit.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
            'formGroup' => $formGroup->createView()
        ]);
    }

    /**
     * @Route("/question/{id}", name="question_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Question $question): Response
    {
        if ($this->isCsrfTokenValid('delete' . $question->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $Answers = $question->getAnsweroptions();
//            foreach ($Answers as $ao) {
//                if (false === $question->getAnsweroptions()->contains($ao)) {
//                    $question->removeAnsweroption($ao);
//                    $entityManager->persist($ao);
//                }
//            }
            $Tests = $question->getTestQuestions();
            foreach ($Tests as $t) {
                $t->getFkQuestion()->removeTestQuestion();
                $entityManager->persist($t);
            }
            $entityManager->remove($question);
            $entityManager->flush();
        }

        return $this->redirectToRoute('question_index');
    }

}
