<?php

namespace App\Controller;

use App\Entity\AnswerOption;
use App\Entity\GroupList;
use App\Entity\Question;
use App\Entity\QuestionAttribute;
use App\Form\GroupSimpleType;
use App\Form\GroupType;
use App\Form\QuestionType;
use App\Repository\FileRepository;
use App\Repository\GroupRepository;
use App\Repository\QuestionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class QuestionController extends AbstractController
{
    /**
     * QuestionController constructor.
     */
    protected $arrayQuestion = [[]];

    public function setDataQuestion( $key1, $value)
    {
        $this->arrayQuestion[$key1] = $value;
    }

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
        $question->setFkUser($this->getUser());
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
    public function showExample(Question $question, FileRepository $fileRepository): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (null === $questionQ = $entityManager->getRepository(Question::class)->find($question->getId())) {
            throw $this->createNotFoundException('No Question found for id '.$question->getId());
        }
        $answers = $entityManager->getRepository(Question::class)->findQuestionAnswers($questionQ->getId());
        $background = $entityManager->getRepository(QuestionAttribute::class)->findAllByBackgroundColor($questionQ->getId());
        $buttonColor = $entityManager->getRepository(QuestionAttribute::class)->findAllByButtonColor($questionQ->getId());
        $time = $entityManager->getRepository(QuestionAttribute::class)->findAllByTime($questionQ->getId());
        $displayTime = $entityManager->getRepository(QuestionAttribute::class)->findAllByDisplayTime($questionQ->getId());
        $pictures = $entityManager->getRepository(QuestionAttribute::class)->findAllByPicture( $questionQ->getId());
        $picture = $fileRepository->findOneByQuestion($questionQ->getId());
        $this->setDataQuestion( 'question', $questionQ);
        $this->setDataQuestion( 'answers', $answers);
        $this->setDataQuestion( 'paramButton', $buttonColor);
        $this->setDataQuestion( 'paramBackground', $background);
        $this->setDataQuestion( 'paramTime', $time);
        $this->setDataQuestion( 'paramDisplayTime', $displayTime);
        $this->setDataQuestion( 'picture', $picture);
        $this->setDataQuestion( 'paramPictures', $pictures);
        return $this->render('question/show_example.html.twig', [
            'data' => $this->arrayQuestion
        ]);
    }

    /**
     * @Route("/question/{id}/edit", name="question_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Question $question): Response
    {
        $group = new GroupList();
        $formGroup = $this->createForm(GroupSimpleType::class, $group);

        $entityManager = $this->getDoctrine()->getManager();
        if (null === $Question = $entityManager->getRepository(Question::class)->find($question->getId())) {
            throw $this->createNotFoundException('No task found for id '.$question->getId());
        }

        $form = $this->createForm(QuestionType::class, $Question);
        $form->handleRequest($request);
        $Answers = $Question->getAnsweroptions();

        if ($form->isSubmitted() && $form->isValid()) {
            foreach ($Answers as $ao) {
                $entityManager->persist($ao);
            }
            $entityManager->persist($Question);
            $entityManager->flush();
            return new JsonResponse(['id'=> $question->getId()]);
        }

        return $this->render('question/edit.html.twig', [
            'question' => $Question,
            'form' => $form->createView(),
            'formGroup' => $formGroup->createView()
        ]);
    }

    /**
     * @Route("/question/{id}", name="question_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Question $question): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        if (null === $Test = $entityManager->getRepository(Question::class)->find($question->getId())) {
            throw $this->createNotFoundException('No Question for id '.$question->getId());
        }
        if ($this->isCsrfTokenValid('delete'.$question->getId(), $request->request->get('_token'))) {

            $Files = $question->getFileS();
            foreach ($Files as $f) {
                $f->getFkQuestion()->removeFile($f);
                $entityManager->persist($f);
                $entityManager->flush();
            }

            $Tests = $question->getTestQuestions();
            foreach ($Tests as $t) {
                $t->getFkQuestion()->removeTestQuestion($t);
                $entityManager->persist($t);
                $entityManager->flush();
            }

            $Qattribute = $question->getQuestionAttributes();
            foreach ($Qattribute as $qa) {
                $qa->setFkQuestion(null );
                $entityManager->persist($qa);
                $entityManager->flush();
            }

            $partAnswers = $question->getParticipantAnswers();
            foreach ($partAnswers as $pa) {
                foreach ($pa->getFkAnsweroption() as $a) {
                $pa->removeFkAnsweroption($a);
                $entityManager->persist($pa);
                }
                $pa->setFkQuestion(null);
                $entityManager->flush();
            }

            $entityManager->remove($question);
            $entityManager->flush();
        }

        return $this->redirectToRoute('question_index');
    }

}
