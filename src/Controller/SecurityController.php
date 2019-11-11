<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }

    public function accountInfo()
{
    // allow any authenticated user - we don't care if they just
    // logged in, or are logged in via a remember me cookie
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');

    // ...
}

public function resetPassword()
{
    // require the user to log in during *this* session
    // if they were only logged in via a remember me cookie, they
    // will be redirected to the login page
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

    // ...
}
}
