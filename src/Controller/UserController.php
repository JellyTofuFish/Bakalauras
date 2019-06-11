<?php

namespace App\Controller;

use App\Entity\Test;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormError;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class UserController extends AbstractController
{

    /**
     * @Route("/users", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $uRepositor ): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $uRepositor->findAll(),
        ]);
    }
    /**
     * @Route("/user/new", name="user_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $passwordEncoder, \Swift_Mailer $mailer, ValidatorInterface $validator): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $errorsString='';

        if ($form->isSubmitted() && $form->isValid()) {
            $User = $this->getDoctrine()->getManager()->getRepository(User::class)->findOneBy(['email' => strtolower($form->get('email')->getData())]);
            if ($User != null) {
                $form->addError(new FormError('account_password_reset_error_unique'));
            } else {
                $password = $form->get('password')->getData();
                $user->setPassword(
                    $passwordEncoder->encodePassword(
                        $user,
                        $password
                    )
                );
                $user->setEmail(strtolower($form->get('email')->getData()));
                $user->setActivation(uniqid('', true));
                $user->setRoles(['ROLE_USER']);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();

//                $mail = new PHPMailer;
//                $mail->isSMTP();
//                $mail->Host = 'smtp.mailgun.org';
//                $mail->SMTPAuth = true;
//                $mail->Username = 'postmaster@sandbox78c68edf3c3949e1b35104d8ee44d6dc.mailgun.org'; // SMTP username
//                $mail->Password = 'f9946013d0d7e4df001d4131924249b1-87cdd773-e140eb23';             // SMTP password
//                $mail->SMTPSecure = 'tls';
//                $mail->setLanguage('lt');
//                $mail->isHTML(true);
//
//                $mail->From = 'noreply@sandbox78c68edf3c3949e1b35104d8ee44d6dc.mailgun.org';
//                $mail->FromName = 'KTU-ETS';
//                $mail->addAddress($user->getEmail());
//
//                $mail->Subject = "Hello!";
//                $mail->Body = $this->renderView('user/emails/registration.html.twig',
//                    [
//                        'user' => $user,
//                    ]
//                );
//                if (!$mail->send()) {
//                    $this->addFlash('danger', 'account_mail_error');
//                } else {
//                    $this->addFlash('success', 'user.flash_message.created');
//                }
//                return $this->redirectToRoute('user_index');
                return $this->redirectToRoute('registration_confirm', ['string' => $user->getActivation()]);
            }
        }
        if ($form->isSubmitted()) {
            if (!$form->isValid()) {
                $pass = $form->get('password')->get('first');
                $passConf = $form->get('password')->get('second');
                if ($pass !== $passConf ) {
                    $form->addError(new FormError('account_password_reset_error_new'));
                }
            }
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/confirmation/{string}", name="registration_confirm", methods={"GET","POST"})
     */
    public function newRegistrationConfirm($string): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (null === $User = $entityManager->getRepository(User::class)->findOneBy(['activation'=> $string])) {
            throw $this->createNotFoundException('No user by id '.$User->getId());
        }
        $User->setActivation(1);
        $entityManager->persist($User);
        $entityManager->flush();
        return $this->render('user/registration_confirm.html.twig', [
        ]);
    }

    /**
     * @Route("/user/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $User = $this->getDoctrine()->getManager()->getRepository(User::class)->findOneBy(['email' => strtolower($form->get('email')->getData())]);
            if ($User != null) {
                $this->addFlash('danger', 'account_password_reset_error_unique');
            } else {
                $password = $form->get('password')->getData();
                if ($password != null) {
                    $user->setPassword(
                        $passwordEncoder->encodePassword(
                            $user,
                            $password
                        )
                    );
                }
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'user.flash_message.edited');
            }
            return $this->redirectToRoute('user_index');
        }
        if ($form->isSubmitted()) {
            if (!$form->isValid()) {
                $pass = $form->get('password')->get('first');
                $passConf = $form->get('password')->get('second');
                if ($pass !== $passConf ) {
                    $form->addError(new FormError('account_password_reset_error_new'));
                }
            }
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/user/{id}/delete", name="user_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();

            $questions = $user->getQuestions();
            foreach ($questions as $question){
                $question->setFkUser(null);
                $entityManager->persist($question);
                $entityManager->flush();
            }

            $tests = $user->getTests();
            foreach ($tests as $test){
                $test->setFkUser(null);
                $entityManager->persist($test);
                $entityManager->flush();
            }

            $entityManager->remove($user);
            $entityManager->flush();
            $this->addFlash('warning', 'user.flash_message.deleted');
        }
        return $this->redirectToRoute('user_index');
    }

    /**
     * @Route("/passwordreset", name="user_reset_password", methods={"GET","POST"})
     */
    public function resetPassword(Request $request, \Swift_Mailer $mailer) : Response
    {
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->setAction($this->generateUrl('user_reset_password'))
            ->setMethod('POST')
            ->add('email', EmailType::class, [
                'label' => 'account_password_reset_email',
                'attr' => ['placeholder' => 'account_password_reset_email_placeholder'],
                'required' => true,
            ])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $email = $form->get('email')->getData();

            $entityManager = $this->getDoctrine()->getManager();
            if (null === $User = $entityManager->getRepository(User::class)->findOneBy(['email' => $email])) {
                $form->addError(new FormError('account_password_reset_error'));
            }
            if ($User != null) {
                $User->setReset(uniqid('', true));
                $entityManager->persist($User);
                $entityManager->flush();

//                $mail = new PHPMailer;
//                $mail->isSMTP();
//                $mail->Host = 'smtp.mailgun.org';
//                $mail->SMTPAuth = true;
//                $mail->Username = 'postmaster@sandbox78c68edf3c3949e1b35104d8ee44d6dc.mailgun.org'; // SMTP username
//                $mail->Password = 'f9946013d0d7e4df001d4131924249b1-87cdd773-e140eb23';             // SMTP password
//                $mail->SMTPSecure = 'tls';
//                $mail->setLanguage('lt');
//                $mail->isHTML(true);
//
//                $mail->From = 'noreply@sandbox78c68edf3c3949e1b35104d8ee44d6dc.mailgun.org';
//                $mail->FromName = 'KTU-ETS';
//                $mail->addAddress($User->getEmail());
//
//                $mail->Subject = "Password reset";
//                $mail->Body    =   $this->renderView('user/emails/password.html.twig',
//                    ['user' => $User,]
//                );
//                if(!$mail->send()) {
//                    $this->addFlash('danger', 'account_mail_error');
//                }
//                else {
//                    $this->addFlash('success', 'account_password_reset_success');
//                }
//                return $this->redirectToRoute('home_index');
                return $this->redirectToRoute('user_reset_password_confirm', ['string' => $User->getReset()]);
            }
        }
        return $this->render('user/password_reset.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/passwordreset/{string}", name="user_reset_password_confirm", methods={"GET","POST"})
     */
    public function resetPasswordConfirm($string, Request $request, UserPasswordEncoderInterface $passwordEncoder) : Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (null === $User = $entityManager->getRepository(User::class)->findOneBy(['reset'=> $string])) {
            throw $this->createNotFoundException('No user by id ');
        }
        if ($User != null) {
            $form = $this->createFormBuilder($User)
                ->setAction($this->generateUrl('user_reset_password_confirm', ['string' => $string]))
                ->setMethod('POST')
                ->add('password', RepeatedType::class, [
                    'type' => PasswordType::class,
                    'first_options' => ['label' => 'user.form.password'],
                    'second_options' => array('label' => 'user.form.repeated_password'),
                    'options' => ['attr' => ['placeholder' => 'user.form.password_placeholder', 'minlength' => 6, 'maxlength' => 4096]],
                    'required' => false,
                    'constraints' => [
                        new Length([
                            'min' => 6,
                            'max' => 4096,
                        ]),
                    ],
                ])
                ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $password = $form->get('password')->getData();
                $User->setPassword(
                    $passwordEncoder->encodePassword(
                        $User,
                        $password
                    )
                );
                $User->setReset(null);
                $entityManager->persist($User);
                $entityManager->flush();
                $this->addFlash('success', 'account_password_reset_success_confirm');
                return $this->redirectToRoute('home_index');
            }
            if ($form->isSubmitted()) {
                if (!$form->isValid()) {
                    $pass = $form->get('password')->get('first');
                    $passConf = $form->get('password')->get('second');
                    if ($pass !== $passConf ) {
                        $form->addError(new FormError('account_password_reset_error_new'));
                    }
                }
            }
            $errors = $form->getErrors();
            return $this->render('user/password_reset_confirm.html.twig', [
                'form' => $form->createView(),
                'string' => $string,
                'error' => $errors
            ]);
        }
        else {
            return $this->redirectToRoute('home_index');
        }
    }
    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        // controller can be blank: it will never be executed!
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
}
