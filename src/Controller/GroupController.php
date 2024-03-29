<?php

namespace App\Controller;

use App\Entity\GroupList;
use App\Entity\Question;
use App\Form\GroupSimpleType;
use App\Form\GroupType;
use App\Repository\GroupRepository;
use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GroupController extends AbstractController {

    /**
     * @Route("/group/new/simple", name="group_new_simple", methods={"POST"})
     */
    public function newSimple(Request $request)
    {
        $group = new GroupList();
        $form = $this->createForm(GroupSimpleType::class, $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($group);
            $entityManager->flush();
        }
        return new JsonResponse(['id'=> $group->getId(), 'value'=> $group->getName()]);
    }

    /**
     * @Route("/group/new", name="group_new", methods={"POST"})
     */
    public function new(Request $request): Response
    {
        $group = new GroupList();
        $form = $this->createForm(GroupType::class, $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($group);
            $entityManager->flush();
            $this->addFlash('success', 'group.flash_message.created');
        }
        return $this->redirectToRoute('question_index');
    }

    /**
     * @Route("/group/{id}/edit", name="group_edit", methods={"POST"})
     */
    public function edit(Request $request, GroupList $group ): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $groupByID = $entityManager->getRepository(GroupList::class)->findOneBy(['id'=> $group->getId()]);
        if ($groupByID != null) {
            $group->setName($_POST['group']['name']);
            $group->setDescription($_POST['group']['description']);
            $entityManager->persist($group);
            $entityManager->flush();
            $this->addFlash('success', 'group.flash_message.edited');
        }
        return $this->redirectToRoute('question_index');
    }

    /**
     * @Route("/group/{id}", name="group_delete", methods={"DELETE"})
     */
    public function delete(Request $request, GroupList $group): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        if (null === $Group = $entityManager->getRepository(GroupList::class)->find($group->getId())) {
            throw $this->createNotFoundException('No group for id '.$group->getId());
        }

        if ($this->isCsrfTokenValid('delete' . $group->getId(), $request->request->get('_token'))) {

            $questions = $Group->getQuestions();
            foreach ($questions as $question){
                $question->setFkGroup(null);
                $entityManager->persist($question);
                $entityManager->flush();
            }

            $entityManager->remove($Group);
            $entityManager->flush();
            $this->addFlash('warning', 'group.flash_message.deleted');
        }
        return $this->redirectToRoute('question_index');
    }
}