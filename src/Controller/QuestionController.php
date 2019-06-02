<?php

namespace App\Controller;

use App\Entity\AnswerOption;
use App\Entity\Attribute;
use App\Entity\Files;
use App\Entity\GroupList;
use App\Entity\Question;
use App\Entity\QuestionAttribute;
use App\Entity\TestAttribute;
use App\Form\GroupSimpleType;
use App\Form\GroupType;
use App\Form\QuestionType;
use App\Repository\FileRepository;
use App\Repository\GroupRepository;
use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @property SessionInterface session
 */
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
            $this->addFlash('warning', 'question.flash_message.question');
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

        if (isset($_POST['question_attribute_time'])) {
            $attributes['time'] = $_POST['question_attribute_time']['value'];
        }
        if (isset($_POST['question_attribute_buttonColor']) && $_POST['question_attribute_buttonColor'] != '') {
            foreach ($_POST['question_attribute_buttonColor'] as $key => $value) {
                $attributes['buttonColors'] = $_POST['question_attribute_buttonColor'];
            }
        }
        if (isset($_POST['question_attribute_backgroundColor']) && $_POST['question_attribute_backgroundColor'] != '') {
            foreach ($_POST['question_attribute_backgroundColor'] as $key => $value) {
                $attributes['backgroundColors'] = $_POST['question_attribute_backgroundColor'];
            }
        }
        if (isset($_POST['question_attribute_displayTime']) && $_POST['question_attribute_displayTime'] != '') {
            foreach ($_POST['question_attribute_displayTime'] as $key => $value) {
                $attributes['displayTimes'] = $_POST['question_attribute_displayTime'];
            }
        }
        return $this->render('question/new.html.twig', [
            'question'=> $question,
            'form' => $form->createView(),
            'formGroup' => $formGroup->createView(),
            'attributes' => $attributes,
            'attributeText' =>$attributeText,
        ]);
    }

    /**
     * @Route("/question/new/save", name="question_new_save", methods={"GET","POST"})
     */
    public function newSave(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $question = new Question();
        $question->setFkUser($this->getUser());
        $form = $this->createForm(QuestionType::class, $question);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $questionType = $question->getType();
            $Answers = $question->getAnsweroptions();
            foreach ($Answers as $ao) {
                if ($questionType == 'open' or  $questionType == 'presentation') {
                    $entityManager->remove($ao);
                }
                else {
                    $entityManager->persist($ao);
                }
            }
            $entityManager->persist($question);
            $entityManager->flush();
            if (isset($_FILES['file'])) {
                if ($_FILES["file"]['name'] != '') {
                    $newfile = new File($_FILES["file"]['tmp_name']);
                    $fileName = $_FILES["file"]['name'];
                    $file = $this->getDoctrine()->getManager()->getRepository(Files::class)->findOneBy(['name' => $fileName]);
                    if ($file == null) {
                        try {
                            $newfile->move(
                                $this->getParameter('brochures_directory'),
                                $fileName
                            );
                        } catch (FileException $e) {
                            throw $this->createNotFoundException('file not uploaded');
                        }
                    }
                    $file = new Files();
                    $file->setType('photo');
                    $file->setFkQuestion($question);
                    $file->setName($fileName);
                    $entityManager->persist($file);
                    $entityManager->flush();
                }
            }
            if (isset($_POST['question_attribute_time'])) {
                $questionTimeAttribute = new QuestionAttribute();
                $questionTimeAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findTimeAttribute());
                $questionTimeAttribute->setValue('0:0:0');
                $questionTimeAttribute->setFkQuestion($question);
                $entityManager->persist($questionTimeAttribute);
                $entityManager->flush();
            }
            if (isset($_POST['question_attribute_buttonColor']) && $_POST['question_attribute_buttonColor'] != '') {
                foreach ($_POST['question_attribute_buttonColor'] as $key => $value) {
                    $questionBtnCAttribute = new QuestionAttribute();
                    $questionBtnCAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findButtonColorAttribute());
                    $questionBtnCAttribute->setValue(array_values($value)[0]);
                    $questionBtnCAttribute->setFkQuestion($question);
                    $entityManager->persist($questionBtnCAttribute);
                    $entityManager->flush();
                }
            }
            if (isset($_POST['question_attribute_backgroundColor']) && $_POST['question_attribute_backgroundColor'] != '') {
                foreach ($_POST['question_attribute_backgroundColor'] as $key => $value) {
                    $questionBgCAttribute = new QuestionAttribute();
                    $questionBgCAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findBackgroundColorAttribute());
                    $questionBgCAttribute->setValue(array_values($value)[0]);
                    $questionBgCAttribute->setFkQuestion($question);
                    $entityManager->persist($questionBgCAttribute);
                    $entityManager->flush();
                }
            }
            if (isset($_POST['question_attribute_displayTime']) && $_POST['question_attribute_displayTime'] != '') {
                foreach ($_POST['question_attribute_displayTime'] as $key => $value) {
                    $questionDTAttribute = new QuestionAttribute();
                    $questionDTAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findDisplayTimeAttribute());
                    $questionDTAttribute->setValue(array_values($value)[0].':'.array_values($value)[1].':'.array_values($value)[2]);
                    $questionDTAttribute->setFkQuestion($question);
                    $entityManager->persist($questionDTAttribute);
                    $entityManager->flush();
                }
            }
            if (isset($_FILES['question_attribute_picture'])) {
                $pictureArray = [[]];
                foreach ($_FILES['question_attribute_picture'] as $key => $value) {
                    foreach ($value as $key1 => $value1) {
                        $pictureArray[$key1][key($value1)][$key] = array_values($value1)[0];
                    }
                }
                foreach ($pictureArray as $key => $value) {
                    foreach ($value as $key1 => $value1) {
                        $newfile = new File($value1['tmp_name']);
                        $fileName = $value1['name'];
                        $attribute = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findOneBy(['value' => $fileName]);
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
                        $PictureAttribute = new QuestionAttribute();
                        $PictureAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findPictureAttribute());
                        $PictureAttribute->setValue($fileName);
                        $PictureAttribute->setFkQuestion($question);
                        $entityManager->persist($PictureAttribute);
                        $entityManager->flush();
                    }
                }
            }
            $this->addFlash('success', 'question.flash_message.created');
        }
        return $this->redirectToRoute('question_index');
    }

    /**
     * @Route("/question/{id}", name="question_show", methods={"GET"})
     */
    public function show(Question $question): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (null === $Question = $entityManager->getRepository(Question::class)->find($question->getId())) {
            throw $this->createNotFoundException('No Question found for id '.$question->getId());
        }

        $attributeText = [];
        $attributeText['buttonColor'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findButtonColorAttribute();
        $attributeText['time'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findTimeAttribute();
        $attributeText['backgroundColor'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findBackgroundColorAttribute();
        $attributeText['displayTime'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findDisplayTimeAttribute();
        $attributeText['picture'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findPictureAttribute();

        $attributes = [];
        $attributes['time'] = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findAllByTime($Question);
        $attributes['buttonColors'] = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findAllByButtonColor($Question);
        $attributes['backgroundColors'] = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findAllByBackgroundColor($Question);
        $attributes['displayTimes'] = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findAllByDisplayTime($Question);
        $attributes['pictures'] = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findAllByPicture($Question);
        $questionFile = $entityManager->getRepository(Files::class)->findOneBy(['fk_question' => $Question->getId()]);

        return $this->render('question/show.html.twig', [
            'question' => $Question,
            'file' => $questionFile,
            'attributes' => $attributes,
            'attributeText' =>$attributeText,
        ]);
    }

    /**
     * @Route("/question/{id}/example", name="question_show_example", methods={"GET"})
     */
    public function showExample(Question $question): Response
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
        $file = $entityManager->getRepository(Files::class)->findOneBy(['fk_question' => $questionQ->getId()]);
        $this->setDataQuestion( 'question', $questionQ);
        $this->setDataQuestion( 'answers', $answers);
        $this->setDataQuestion( 'paramButton', $buttonColor);
        $this->setDataQuestion( 'paramBackground', $background);
        $this->setDataQuestion( 'paramTime', $time);
        $this->setDataQuestion( 'paramDisplayTime', $displayTime);
        $this->setDataQuestion( 'file', $file);
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
        $entityManager = $this->getDoctrine()->getManager();
        if (null === $Question = $entityManager->getRepository(Question::class)->find($question->getId())) {
            throw $this->createNotFoundException('No task found for id '.$question->getId());
        }
        $form = $this->createForm(QuestionType::class, $Question);

        $group = new GroupList();
        $formGroup = $this->createForm(GroupSimpleType::class, $group);

        $attributeText = [];
        $attributeText['buttonColor'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findButtonColorAttribute();
        $attributeText['time'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findTimeAttribute();
        $attributeText['backgroundColor'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findBackgroundColorAttribute();
        $attributeText['displayTime'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findDisplayTimeAttribute();
        $attributeText['picture'] = $this->getDoctrine()->getManager()->getRepository(Attribute::class)->findPictureAttribute();

        $attributes = [];
        $attributes['time'] = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findAllByTime($Question);
        $attributes['buttonColors'] = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findAllByButtonColor($Question);
        $attributes['backgroundColors'] = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findAllByBackgroundColor($Question);
        $attributes['displayTimes'] = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findAllByDisplayTime($Question);
        $attributes['pictures'] = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findAllByPicture($Question);
        $questionFile = $entityManager->getRepository(Files::class)->findOneBy(['fk_question' => $Question->getId()]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $questionType = $Question->getType();
            $Answers = $Question->getAnsweroptions();
            foreach ($Answers as $ao) {
                if ($questionType == 'open' or $questionType == 'presentation') {
                    $Question->removeAnsweroption($ao);
                }
                else {
                    $entityManager->persist($ao);
                }
            }
            $entityManager->persist($Question);
            $entityManager->flush();
            if (isset($_POST['question_file']) && isset($_FILES['file'])) {
                if ($_POST['question_file']['file'] == '0' && $_FILES["file"]['name'] == '') {
                    if ($questionFile != null) {
                        $this->deleteFile($questionFile->getName());
                        $Question->removeFile($questionFile);
                        $entityManager->flush();
                    }
                } elseif ($_POST['question_file']['file'] == '0' && $_FILES["file"]['name'] != '' || $_POST['question_file']['file'] == '1' && $_FILES["file"]['name'] != '') {
                    $newfile = new File($_FILES["file"]['tmp_name']);
                    $fileName = $_FILES["file"]['name'];

                    $fileCheck = null;
                    if ($questionFile != null) {
                        $fileCheck = $questionFile->getName();
                    }
                    if ($_FILES["file"]['name'] != $fileCheck) {
                        $files = $this->getDoctrine()->getManager()->getRepository(Files::class)->findOneBy(['name' => $fileName]);
                        if ($files == null) {
                            try {
                                $newfile->move(
                                    $this->getParameter('brochures_directory'),
                                    $fileName
                                );
                            } catch (FileException $e) {
                                throw $this->createNotFoundException('file not uploaded');
                            }
                        }
                        if ($questionFile != null) {
                            $this->deleteFile($questionFile->getName());
                            $questionFile->setName($fileName);
                            $entityManager->persist($questionFile);
                        } else {
                            $file = new Files();
                            $file->setType('photo');
                            $file->setFkQuestion($question);
                            $file->setName($fileName);
                            $entityManager->persist($file);
                        }
                        $entityManager->flush();
                    }
                }
            }
            if (isset($_POST['question_attribute_time'])) {
                if ($attributes['time'] == null) {
                    $questionTimeAttribute = new QuestionAttribute();
                    $questionTimeAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findTimeAttribute());
                    $questionTimeAttribute->setValue('0:0:0');
                    $questionTimeAttribute->setFkQuestion($question);
                    $entityManager->persist($questionTimeAttribute);
                    $entityManager->flush();
                }
            } else {
                if ($attributes['time'] != null) {
                    foreach ( $attributes['time'] as $time ) {
                        $attribute = $entityManager->getRepository(QuestionAttribute::class)->find($time);
                        $attributesArray = $attribute->getParticipantAnswerAttributes();
                        foreach ($attributesArray as $a) {
                            $attribute->removeParticipantAnswerAttribute($a);
                            $entityManager->persist($attribute);
                            $entityManager->flush();
                        }
                        $entityManager->remove($time);
                        $entityManager->flush();
                    }
                }
            }
            if (isset($_POST['question_attribute_buttonColor']) && $_POST['question_attribute_buttonColor'] != '') {
                $question_attribute_buttonColor = [];
                foreach ($_POST['question_attribute_buttonColor'] as $key => $value) {
                    $buttonColor = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findOneBy(['id' => key($value)]);
                    if (in_array($buttonColor, $attributes['buttonColors'])) {
                        $buttonColor->setValue(array_values($value)[0]);
                        $entityManager->persist($buttonColor);
                        $question_attribute_buttonColor[] = $buttonColor;
                    } else {
                        $questionBtnCAttribute = new QuestionAttribute();
                        $questionBtnCAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findButtonColorAttribute());
                        $questionBtnCAttribute->setValue(array_values($value)[0]);
                        $questionBtnCAttribute->setFkQuestion($question);
                        $entityManager->persist($questionBtnCAttribute);
                    }
                    $entityManager->flush();
                }
                foreach ( $attributes['buttonColors'] as $buttonColor ) {
                    if (!in_array($buttonColor, $question_attribute_buttonColor)) {
                        $attributesArray = $buttonColor->getParticipantAnswerAttributes();
                        foreach ($attributesArray as $a) {
                            $buttonColor->removeParticipantAnswerAttribute($a);
                            $entityManager->persist($buttonColor);
                        }
                        $entityManager->remove($buttonColor);
                        $entityManager->flush();
                    }
                }
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
                            $entityManager->flush();
                        }
                    }
                }
            }
            if (isset($_POST['question_attribute_backgroundColor']) && $_POST['question_attribute_backgroundColor'] != '') {
                $question_attribute_backgroundColor = [];
                foreach ($_POST['question_attribute_backgroundColor'] as $key => $value) {
                    $backgroundColor = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findOneBy(['id' => key($value)]);
                    if (in_array($backgroundColor, $attributes['backgroundColors'])) {
                        $backgroundColor->setValue(array_values($value)[0]);
                        $entityManager->persist($backgroundColor);
                        $question_attribute_backgroundColor[] = $backgroundColor;
                    }
                    else {
                        $questionBgCAttribute = new QuestionAttribute();
                        $questionBgCAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findBackgroundColorAttribute());
                        $questionBgCAttribute->setValue(array_values($value)[0]);
                        $questionBgCAttribute->setFkQuestion($question);
                        $entityManager->persist($questionBgCAttribute);
                    }
                    $entityManager->flush();
                }
                foreach ( $attributes['backgroundColors'] as $backgroundColor ) {
                    if (!in_array($backgroundColor, $question_attribute_backgroundColor)) {
                        $attributesArray = $backgroundColor->getParticipantAnswerAttributes();
                        foreach ($attributesArray as $a) {
                            $backgroundColor->removeParticipantAnswerAttribute($a);
                            $entityManager->persist($backgroundColor);
                        }
                        $entityManager->remove($backgroundColor);
                        $entityManager->flush();
                    }
                }
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
                            $entityManager->flush();
                        }
                    }
                }
            }
            if (isset($_POST['question_attribute_displayTime']) && $_POST['question_attribute_displayTime'] != '') {
                $question_attribute_DT = [];
                foreach ($_POST['question_attribute_displayTime'] as $key => $value) {
                    $DT = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findOneBy(['id' => key($value)]);
                    if (in_array($DT, $attributes['displayTimes'])) {
                        $DT->setValue(array_values($value)[0].':'.array_values($value)[1].':'.array_values($value)[2]);
                        $entityManager->persist($DT);
                        $question_attribute_DT[] = $DT;
                    }
                    else {
                        $questionDTAttribute = new QuestionAttribute();
                        $questionDTAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findDisplayTimeAttribute());
                        $questionDTAttribute->setValue(array_values($value)[0].':'.array_values($value)[1].':'.array_values($value)[2]);
                        $questionDTAttribute->setFkQuestion($question);
                        $entityManager->persist($questionDTAttribute);
                    }
                    $entityManager->flush();
                }
                foreach ( $attributes['displayTimes'] as $DT ) {
                    if (!in_array($DT, $question_attribute_DT)) {
                        $attributesArray = $DT->getParticipantAnswerAttributes();
                        foreach ($attributesArray as $a) {
                            $DT->removeParticipantAnswerAttribute($a);
                            $entityManager->persist($DT);
                        }
                        $entityManager->remove($DT);
                        $entityManager->flush();
                    }
                }
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
                            $entityManager->flush();
                        }
                    }
                }
            }
            if (isset($_FILES['question_attribute_picture'])) {
                $pictureArray = [[]];
                foreach ($_FILES['question_attribute_picture'] as $key => $value) {
                    foreach ($value as $key1 => $value1) {
                        $pictureArray[$key1][key($value1)][$key] = array_values($value1)[0];
                    }
                }
                $question_attribute = [];
                foreach ($pictureArray as $key => $value) {
                    foreach ($value as $key1 => $value1) {
                        $attribute = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findOneBy(['id' => $key1]);
                        if ($value1['name'] == '') {
                            $question_attribute[] = $attribute;
                        }
                        else {
                            $newfile = new File($value1['tmp_name']);
                            $fileName = $value1['name'];
                            if (in_array($attribute, $attributes['pictures'])) {
                                $this->deleteFile($attribute->getValue());
                                $attribute->setValue($fileName);
                                $entityManager->persist($attribute);
                                $question_attribute[] = $attribute;
                                try {
                                    $newfile->move(
                                        $this->getParameter('brochures_directory'),
                                        $fileName
                                    );
                                } catch (FileException $e) {
                                    throw $this->createNotFoundException('file not uploaded');
                                }
                            } else {
                                $attribute = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findOneBy(['value' => $fileName]);
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
                                $PictureAttribute = new QuestionAttribute();
                                $PictureAttribute->setFkAttribute($this->getDoctrine()->getManager()->getRepository(Attribute::class)->findPictureAttribute());
                                $PictureAttribute->setValue($fileName);
                                $PictureAttribute->setFkQuestion($question);
                                $entityManager->persist($PictureAttribute);
                            }
                        }
                        $entityManager->flush();
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
                        $entityManager->flush();
                    }
                }
            }
            else {
                if (!isset($_POST['question_attribute_picture'])) {
                    if ($attributes['pictures'] != null) {
                        foreach ($attributes['pictures'] as $picture) {
                            if (!in_array($picture, [])) {
                                $this->deleteFile($picture->getValue());
                                $attributesArray = $picture->getParticipantAnswerAttributes();
                                foreach ($attributesArray as $a) {
                                    $picture->removeParticipantAnswerAttribute($a);
                                    $entityManager->persist($picture);
                                }
                                $entityManager->remove($picture);
                                $entityManager->flush();
                            }
                        }
                    }
                }
            }
            $this->addFlash('success', 'question.flash_message.edited');
            return $this->redirectToRoute('question_index');
        }
        $questionFile = $entityManager->getRepository(Files::class)->findOneBy(['fk_question' => $Question->getId()]);
        if ($questionFile != null) {
            $questionFile = $questionFile->getName();
        }
        return $this->render('question/edit.html.twig', [
            'question' => $Question,
            'file' => $questionFile,
            'form' => $form->createView(),
            'formGroup' => $formGroup->createView(),
            'attributes' => $attributes,
            'attributeText' =>$attributeText,
        ]);
    }
    public function deleteFile( $questionFile ) {
        $questionAttributes = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findBy(['value' => $questionFile]);
        $testAttributes = $this->getDoctrine()->getManager()->getRepository(TestAttribute::class)->findBy(['value' => $questionFile]);
        $files = $this->getDoctrine()->getManager()->getRepository(Files::class)->findBy(['name' => $questionFile]);
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
            if (file_exists($this->getParameter('brochures_directory') . '/' . $questionFile)) {
                unlink($this->getParameter('brochures_directory') . '/' . $questionFile);
            }
        }
    }

    /**
     * @Route("/question/{id}", name="question_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Question $question): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        if (null === $Question = $entityManager->getRepository(Question::class)->find($question->getId())) {
            throw $this->createNotFoundException('No Question for id '.$question->getId());
        }
        if ($this->isCsrfTokenValid('delete'.$question->getId(), $request->request->get('_token'))) {


            $attributes['time'] = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findAllByTime($Question);
            $attributes['buttonColors'] = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findAllByButtonColor($Question);
            $attributes['backgroundColors'] = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findAllByBackgroundColor($Question);
            $attributes['displayTimes'] = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findAllByDisplayTime($Question);
            $attributes['pictures'] = $this->getDoctrine()->getManager()->getRepository(QuestionAttribute::class)->findAllByPicture($Question);

            if ($attributes['pictures'] != null) {
                foreach ($attributes['pictures'] as $picture) {
                    if (!in_array($picture, [])) {
                        $this->deleteFile($picture->getValue());
                        $attributesArray = $picture->getParticipantAnswerAttributes();
                        foreach ($attributesArray as $a) {
                            $picture->removeParticipantAnswerAttribute($a);
                            $entityManager->persist($picture);
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
            if ($attributes['time'] != null) {
                foreach ( $attributes['time'] as $T ) {
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

            $Qattribute = $question->getQuestionAttributes();
            foreach ($Qattribute as $qa) {
                $attribute = $entityManager->getRepository(Attribute::class)->findOneBy(['id' => $qa->getFkAttribute()]);
                if ($attribute->getName() == 'picture'){
                    $this->deleteFile($qa->getValue());
                }
                $Question->removeQuestionAttribute($qa);
                $entityManager->persist($Question);
                $entityManager->flush();
            }

            $Files = $question->getFileS();
            foreach ($Files as $f) {
                $this->deleteFile($f->getName());
                $Question->removeFile($f);
                $entityManager->persist($Question);
                $entityManager->flush();
            }

            $Tests = $question->getTestQuestions();
            foreach ($Tests as $t) {
                $Question->removeTestQuestion($t);
                $entityManager->persist($Question);
                $entityManager->flush();
            }

            $partAnswers = $question->getParticipantAnswers();
            foreach ($partAnswers as $pa) {
                foreach ($pa->getFkAnsweroption() as $a) {
                $pa->removeFkAnsweroption($a);
                $entityManager->persist($pa);
                }
                $Question->removeParticipantAnswer($pa);
                $entityManager->persist($Question);
                $entityManager->flush();
            }

            $entityManager->remove($Question);
            $entityManager->flush();
        }

        $this->addFlash('warning', 'question.flash_message.deleted');
        return $this->redirectToRoute('question_index');
    }

    /**
     * @Route("/question/{id}/copy", name="question_copy", methods={"GET"})
     */
    public function copy(Question $question): Response
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
        $file = $entityManager->getRepository(Files::class)->findOneBy(['fk_question' => $questionQ->getId()]);

        $question = new Question();
        $question->setFkUser($this->getUser());
        $question->setType($questionQ->getType());
        $question->setDescription($questionQ->getDescription());
        if ($questionQ->getFkGroup() != null){
            $question->setFkGroup($questionQ->getFkGroup());
        }
        $question->setQuestionName($questionQ->getQuestionName());
        $question->setRequired($questionQ->getRequired());
        $question->setQuestionWording($questionQ->getQuestionWording());
        $entityManager->persist($question);
        $entityManager->flush();
        if ($file != null) {
            $f = new Files();
            $f->setFkQuestion($question);

            $f->setType($file->getType());
            $f->setName($file->getName());
            $entityManager->persist($f);
            $entityManager->flush();
        }
        if ($answers != null) {
            foreach ($answers as $answer){
                $answerOption = new AnswerOption();
                $answerOption->setAnswer($answer['answer']);
                $answerOption->setFkQuestion($question);
                $entityManager->persist($answerOption);
                $entityManager->flush();
            }
        }
        if ($background != null) {
            foreach ($background as $bg){
                $questionAttribute = new QuestionAttribute();
                $questionAttribute->setFkAttribute($bg->getFkAttribute());
                $questionAttribute->setValue($bg->getValue());
                $questionAttribute->setFkQuestion($question);
                $entityManager->persist($questionAttribute);
                $entityManager->flush();
            }
        }
        if ($buttonColor != null) {
            foreach ($buttonColor as $bC){
                $questionAttribute = new QuestionAttribute();
                $questionAttribute->setFkAttribute($bC->getFkAttribute());
                $questionAttribute->setValue($bC->getValue());
                $questionAttribute->setFkQuestion($question);
                $entityManager->persist($questionAttribute);
                $entityManager->flush();
            }
        }
        if ($time != null) {
            foreach ($time as $t){
                $questionAttribute = new QuestionAttribute();
                $questionAttribute->setFkAttribute($t->getFkAttribute());
                $questionAttribute->setValue($t->getValue());
                $questionAttribute->setFkQuestion($question);
                $entityManager->persist($questionAttribute);
                $entityManager->flush();
            }
        }
        if ($displayTime != null) {
            foreach ($displayTime as $dT){
                $questionAttribute = new QuestionAttribute();
                $questionAttribute->setFkAttribute($dT->getFkAttribute());
                $questionAttribute->setValue($dT->getValue());
                $questionAttribute->setFkQuestion($question);
                $entityManager->persist($questionAttribute);
                $entityManager->flush();
            }
        }
        if ($pictures != null) {
            foreach ($pictures as $picture){
                $questionAttribute = new QuestionAttribute();
                $questionAttribute->setFkAttribute($picture->getFkAttribute());
                $questionAttribute->setValue($picture->getValue());
                $questionAttribute->setFkQuestion($question);
                $entityManager->persist($questionAttribute);
                $entityManager->flush();
            }
        }
        $this->addFlash('success', 'question.flash_message.copy');
        return $this->redirectToRoute('question_index');
    }
}
