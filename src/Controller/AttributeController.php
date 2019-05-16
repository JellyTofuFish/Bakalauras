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

/**
 * @Route("/attribute")
 */
class AttributeController extends AbstractController
{
    /**
     * @Route("/", name="attribute_index", methods={"GET"})
     */
    public function index(AttributeRepository $attributeRepository): Response
    {
        return $this->render('attribute/index.html.twig', [
            'attributes' => $attributeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="attribute_new", methods={"GET","POST"})
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

            return $this->redirectToRoute('attribute_index');
        }

        return $this->render('attribute/new.html.twig', [
            'attribute' => $attribute,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}/edit", name="attribute_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Attribute $attribute): Response
    {
        $form = $this->createForm(AttributeType::class, $attribute);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('attribute_index', [
                'id' => $attribute->getId(),
            ]);
        }

        return $this->render('attribute/edit.html.twig', [
            'attribute' => $attribute,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="attribute_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Attribute $attribute): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        if (null === $Attribute = $entityManager->getRepository(Attribute::class)->find($attribute->getId())) {
            throw $this->createNotFoundException('No Attribute for id '.$attribute->getId());
        }
        if ($this->isCsrfTokenValid('delete'.$attribute->getId(), $request->request->get('_token'))) {

            $Qattribute = $Attribute->getQuestionAttributes();
            foreach ($Qattribute as $qa) {
                $Attribute->removeQuestionAttribute($qa);
                $entityManager->persist($Attribute);
                $entityManager->flush();
            }
            $entityManager->remove($attribute);
            $entityManager->flush();
        }

        return $this->redirectToRoute('attribute_index');
    }
}