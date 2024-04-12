<?php

namespace Caas23\Controller;

use Caas23\Card\Card;
use Caas23\Card\CardHand;
use Caas23\Card\DeckOfCards;
use Caas23\Card\DeckOfCardsJoker;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class SessionController extends AbstractController
{
    #[Route("/session", name: "session")]
    public function session(
        SessionInterface $session
    ): Response {
        session_name('caas23');
        session_start();

        $data = [
            'session' => $session->getBag("attributes")->all()
        ];

        return $this->render('Kmom02/session.html.twig', $data);
    }

    #[Route("/session/delete", name: "session/delete")]
    public function sessionDelete(
        SessionInterface $session
    ): Response {
        session_name("caas23");
        session_start();

        $session->clear();

        $this->addFlash(
            'notice',
            'Sessionen har raderats!'
        );

        return $this->redirectToRoute('session');
    }
}
