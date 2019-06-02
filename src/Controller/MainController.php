<?php

namespace App\Controller;

use App\Entity\TestParticipation;
use App\Repository\QuestionRepository;
use App\Repository\TestRepository;
use DateTimeZone;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Validator\Constraints\Blank;
use Symfony\Component\Validator\Constraints\DateTime;

class MainController extends AbstractController
{

    /**
     * @Route("/", name="home_index")
     */
    public function index(AuthenticationUtils $authenticationUtils, TestRepository $testRepository, Request $request) {

        // last username entered by the user
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        $defaultData = ['message' => 'Code'];
        $form = $this->createFormBuilder($defaultData)
            ->setAction($this->generateUrl('home_index'))
            ->setMethod('POST')
            ->add('code', TextType::class, [
                'attr' => ['placeholder' => 'test.form.code_test_start', 'minlength' => 8, 'maxlength' => 8],
                'required' => true,
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $data = $form->getData();
            $activeTest = $testRepository->findActiveTestByCode(end ($data));

            if ($activeTest != null) {
                if ($activeTest->getIsActive() ) {
                    if ( $activeTest->getTestStart() > new \DateTime('now') ) {
                        $time = (string)$activeTest->getTestStart()->format('Y-m-d H:i:s');
                        $this->addFlash('warning', 'test.flash_message.not_started' );
                        $this->addFlash('warning', $time);

                        return $this->render('main/index.html.twig', [
                            'last_username' => $lastUsername,
                            'form' => $form->createView(),
                        ]);
                    }
                    if ($activeTest->getTestEnd() != null ) {
                        if ($activeTest->getTestEnd() < new \DateTime('now') ) {
                            $activeTest->setIsActive(false);
                            $entityManager->persist($activeTest);
                            $entityManager->flush();
                            $this->addFlash('warning', 'test.flash_message.expired');
                            return $this->render('main/index.html.twig', [
                                'last_username' => $lastUsername,
                                'form'=>$form->createView(),
                            ]);
                        }
                    }
                    $testParticipation = new TestParticipation();
                    $testParticipation->setFkTest($activeTest);
                    $testParticipation->setTestStartedAt();
                    $testParticipation->setIsTestOver(0);
                    $entityManager->persist($testParticipation);
                    $entityManager->flush();
                    return $this->redirectToRoute('test_new_start', [
                        'id' => $activeTest->getId(),
                        'testPart' => $testParticipation->getId()
                    ]);
                }
            }
            else {
                $this->addFlash('warning', 'test.flash_message.warning');
            }
        }

        return $this->render('main/index.html.twig', [
            'last_username' => $lastUsername,
            'form'=>$form->createView(),
            'error' => $error
        ]);
    }
}
