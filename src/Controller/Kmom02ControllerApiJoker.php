<?php

namespace Caas23\Controller;

use Caas23\Card\Card;
use Caas23\Card\DeckOfCards;
use Caas23\Card\DeckOfCardsJoker;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class Kmom02ControllerApiJoker extends AbstractController
{
    #[Route("/api/deck/joker", name: "api/deck/joker", methods: ["GET"])]
    public function jsonDeckJoker(): Response
    {
        $deck = new DeckOfCardsJoker();

        $cards = $deck->getCards('../public/svg/');

        $data = [
            'Kort' => array_values($cards)
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/api/deck/joker/shuffle", name: "api/deck/joker/shuffle")]
    public function jsonDeckJokerShuffle(
        SessionInterface $session
    ): Response {
        $deck = new DeckOfCardsJoker();
        $cards = $deck->getCardsShuffled('../public/svg/');


        $data = [
            'Kort' => $cards,
        ];

        $session->set("cardsJoker", $cards);

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/api/deck/joker/draw", name: "api/deck/joker/draw")]
    public function jsonDeckJokerDraw(
        SessionInterface $session
    ): Response {
        if (!$session->has("cardsJoker")) {
            $newDeck = new DeckOfCardsJoker();
            $session->set("cardsJoker", $newDeck->getCards('../public/svg/'));
        }

        $card = new Card();
        $cards = $session->get("cardsJoker");

        $randomCard = $card->getOneCard((array)$cards);
        $session->set("cardsJoker", array_diff((array)$cards, (array)$randomCard));

        $data = [
            'Kort' => $randomCard,
            'Kort kvar' => count((array)$cards) - 1
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
