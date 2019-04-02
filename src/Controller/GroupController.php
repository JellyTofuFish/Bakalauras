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
     * @Route("/group/{id}/edit", name="group_edit", methods={"POST"})
     */
    public function edit(Request $request, GroupList $group ): Response
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $desc = $request->get('desc');

        if ( $id == $group->getId() ) {

            $group->setName($name);
            $group->setDescription($desc);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($group);
            $entityManager->flush();
        }

        return $this->redirectToRoute('question_index');
    }

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
        }

        return $this->redirectToRoute('question_index');
    }
    /**
     * @Route("/group/{id}", name="group_delete", methods={"DELETE"})
     */
    public function delete(Request $request, GroupList $group, QuestionRepository $questionRepository): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $count = $questionRepository->GroupCountByQuestion($group);
        $questions = $questionRepository->findAllAndFilterByGroup($group);

        if ($questions != null) {
            for ($i = 0; $i < $count; $i++ ) {
                $questions[$i]->setFkGroup(null);
                $entityManager->persist($questions[$i]);
                $entityManager->flush();
            }
        }
        if ($this->isCsrfTokenValid('delete' . $group->getId(), $request->request->get('_token'))) {

            $entityManager->remove($group);
            $entityManager->flush();
        }

        return $this->redirectToRoute('question_index');
    }
}