<?php

namespace Caas23\Controller;

use Caas23\Card\Card;
use Caas23\Card\SessionHandler;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class Kmom03Controller extends AbstractController
{
    #[Route("/game", name: "game", methods: ['GET'])]
    public function gameIntro(): Response
    {
        return $this->render('Kmom03/21-landing.html.twig');
    }

    #[Route("/game", name: "game_post", methods: ['POST'])]
    public function initGame(
        SessionInterface $session
    ): Response {
        (new SessionHandler())->sessionInit($session, '../public/svg/');

        return $this->redirectToRoute('game/play');
    }

    #[Route("/game/doc", name: "game/doc")]
    public function gameDoc(): Response
    {
        return $this->render('Kmom03/21-doc.html.twig');
    }

    #[Route("/game/play", name: "game/play", methods: ['GET'])]
    public function gamePlay(): Response
    {
        return $this->render('Kmom03/21-play.html.twig');
    }

    #[Route("/game/play", name: "game/play_post", methods: ['POST'])]
    public function drawCard(
        Request $request,
        SessionInterface $session
    ): Response {
        $card = new Card();
        $handleSession = new SessionHandler();

        if ($request->request->get("21") == "Spela igen!") {
            return $this->redirectToRoute('game');
        }

        if ($request->request->get("21") == "Stanna") {
            $session->set("players_total", $session->get("total"));
            return $this->redirectToRoute('game/play/bank');
        }

        if ($request->request->get("21") == "Dra nytt kort") {
            $cards = $session->get("cards");
            $drawn = (array)$session->get("drawn");

            $randomCard = $card->getOneCard((array)$cards);
            $drawn[] = $randomCard;

            $handleSession->setValue($session, $card->getValue($randomCard), $session->get("total"), false);

            $session->set("cards", array_diff((array)$cards, (array)$randomCard));
            $session->set("drawn", $drawn);
            $session->set("drawn_player", $drawn);
        }

        if ($request->request->get("21") == "Ange värde") {
            $handleSession->setAceValue($session, (int)$request->request->get("ace"), $session->get("total"));
        }

        $data = [
            'drawn' => $session->get("drawn"),
            'total' => $session->get("total"),
            'aceCard' => $session->get("aceCard")
        ];

        return $this->render('Kmom03/21-play.html.twig', $data);
    }

    #[Route("/game/play/bank", name: "game/play/bank")]
    public function drawCardBank(
        SessionInterface $session
    ): Response {
        $handleSession = new SessionHandler();
        $session->set("total", 0);
        $total = $session->get("total");

        while ($total < 17) {
            $card = new Card();
            $cards = $session->get("cards");
            $drawn = (array)$session->get("drawn");

            $randomCard = $card->getOneCard((array)$cards);
            $drawn[] = $randomCard;

            $handleSession->setValue($session, $card->getValue($randomCard), $session->get("total"), true);

            $session->set("cards", array_diff((array)$cards, (array)$randomCard));
            $session->set("drawn", $drawn);
            $total = $session->get("total");

            if (isset($cards)) {
                $session->set("drawn_bank", array_diff((array)$drawn, (array)$session->get("drawn_player")));
            }
        }

        $data = [
            'drawn_bank' => $session->get("drawn_bank"),
            'drawn_player' => $session->get("drawn_player"),
            'total' => $session->get("total"),
            'players_total' => $session->get("players_total")
        ];

        return $this->render('Kmom03/21-play-bank.html.twig', $data);
    }
}
