<?php

namespace App\Controller;

use App\Entity\Attribute;
use App\Entity\Question;
use App\Form\AttributeType;
use App\Repository\AttributeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AttributeController extends AbstractController
{
    /**
     * @Route("/attributes", name="attribute_index", methods={"GET"})
     */
    public function index(AttributeRepository $attributeRepository): Response
    {
        return $this->render('attribute/index.html.twig', [
            'attributes' => $attributeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/attribute/new", name="attribute_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $attribute = new Attribute();
        $form = $this->createForm(AttributeType::class, $attribute);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($attribute);
            $entityManager->flush();

            $this->addFlash('success', 'attribute.flash_message.created');
            return $this->redirectToRoute('attribute_index');
        }

        return $this->render('attribute/new.html.twig', [
            'attribute' => $attribute,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/attribute/{id}/edit", name="attribute_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Attribute $attribute): Response
    {
        $form = $this->createForm(AttributeType::class, $attribute);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'attribute.flash_message.edited');
            return $this->redirectToRoute('attribute_index');
        }

        return $this->render('attribute/edit.html.twig', [
            'attribute' => $attribute,
            'form' => $form->createView(),
        ]);
    }

}
