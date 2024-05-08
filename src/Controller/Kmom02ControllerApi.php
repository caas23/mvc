<?php

namespace Caas23\Controller;

use Caas23\Card\Card;
use Caas23\Card\CardMultiple;
use Caas23\Card\DeckOfCards;
use Caas23\Card\DeckOfCardsJoker;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class Kmom02ControllerApi extends AbstractController
{
    #[Route("/api/deck", name: "api/deck", methods: ["GET"])]
    public function jsonDeck(): Response
    {
        $deck = new DeckOfCards();

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

    #[Route("/api/deck/shuffle", name: "api/deck/shuffle")]
    public function jsonDeckShuffle(
        SessionInterface $session
    ): Response {
        $deck = new DeckOfCards();
        $cards = $deck->getCardsShuffled('../public/svg/');

        $data = [
            'Kort' => $cards,
        ];

        $session->set("cards", $cards);

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/api/deck/draw", name: "api/deck/draw")]
    public function jsonDeckDraw(
        SessionInterface $session
    ): Response {
        if (!$session->has("cards")) {
            $newDeck = new DeckOfCards();
            $session->set("cards", $newDeck->getCards('../public/svg/'));
        }

        $card = new Card();
        $cards = $session->get("cards");

        $randomCard = $card->getOneCard((array)$cards);
        $session->set("cards", array_diff((array)$cards, (array)$randomCard));

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

    #[Route("/api", name: "api_post", methods: ["POST"])]
    public function apiPost(
        Request $request,
        SessionInterface $session
    ): Response {
        
        $numOfCards = $request->request->get('num_cards');
        
        if ($numOfCards == '') {
            $number = (new CardMultiple())->drawMultipleJoker($request, $session);
        } else {
            $number = (new CardMultiple())->drawMultiple($request, $session);
        } return $this->redirectToRoute('drawMultiple', ["number" => $number]);
    }

    #[Route("api/deck/draw/{number<\d+>}", name: "drawMultiple", methods: ['GET'])]
    public function jsonDeckShowMultiple(
        SessionInterface $session
    ): Response {

        $data = [
            'Dragna kort' => $session->get("drawn_cards"),
            'Kort kvar' => count((array)$session->get("cards_left")) - 1
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
