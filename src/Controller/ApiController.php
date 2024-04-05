<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\CardHand;
use App\Card\DeckOfCards;
use App\Card\DeckOfCardsJoker;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    // Kmom01
    #[Route("/api", name: "api", methods: ["GET"])]
    public function api(): Response
    {
        $number = random_int(100, 999);
        $num1 = str_split($number, 1)[0];
        $num2 = str_split($number, 1)[1];
        $num3 = str_split($number, 1)[2];

        $data = [
            'number' => $number,
            'num1' => $num1,
            'num2' => $num2,
            'num3' => $num3
        ];

        return $this->render('Shared/api.html.twig', $data);
    }

    // Kmom01
    #[Route("/api/quote", name: "api/quote")]
    public function jsonQuote(): Response
    {
        $quoteNum = random_int(0, 2);
        $quotes = array(
            "The way to get started is to quit talking and begin doing. -Walt Disney",
            "Be yourself; everyone else is already taken. -Oscar Wilde",
            "You must be the change you wish to see in the world. -Mahatma Gandhi",
        );

        date_default_timezone_set('CET');
        $now = date('Y-m-d H:i:s');

        $data = [
            'Citat' => $quotes[$quoteNum],
            'Citatet genererades' => $now
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    // Kmom02
    #[Route("/api/deck", name: "api/deck", methods: ["GET"])]
    public function jsonDeck(): Response
    {
        $deck = new DeckOfCards();

        $cards = $deck->getCards();

        $data = [
            'Kort' => array_values($cards)
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    // Kmom02
    #[Route("/api/deck/shuffle", name: "api/deck/shuffle")]
    public function jsonDeckShuffle(
        SessionInterface $session
    ): Response {
        $deck = new DeckOfCards();
        $cards = $deck->getCardsShuffled();

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

    // Kmom02
    #[Route("/api/deck/draw", name: "api/deck/draw")]
    public function jsonDeckDraw(
        SessionInterface $session
    ): Response {
        if ($session->has("cards")) {
        } else {
            $NewDeck = new DeckOfCards();
            $session->set("cards", $NewDeck->getCards());
        }

        $card = new Card();
        $cards = $session->get("cards");

        $randomCard = $card->getOneCard($cards);
        $session->set("cards", array_diff($cards, [$randomCard]));

        $data = [
            'Kort' => $randomCard,
            'Kort kvar' => count($cards) - 1
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    // Kmom02
    #[Route("/api/deck/joker", name: "api/deck/joker", methods: ["GET"])]
    public function jsonDeckJoker(): Response
    {
        $deck = new DeckOfCardsJoker();

        $cards = $deck->getCards();

        $data = [
            'Kort' => array_values($cards)
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    // Kmom02
    #[Route("/api/deck/joker/shuffle", name: "api/deck/joker/shuffle")]
    public function jsonDeckJokerShuffle(
        SessionInterface $session
    ): Response {
        $deck = new DeckOfCardsJoker();
        $cards = $deck->getCardsShuffled();


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

    // Kmom02
    #[Route("/api/deck/joker/draw", name: "api/deck/joker/draw")]
    public function jsonDeckJokerDraw(
        SessionInterface $session
    ): Response {
        if ($session->has("cardsJoker")) {
        } else {
            $NewDeck = new DeckOfCardsJoker();
            $session->set("cardsJoker", $NewDeck->getCards());
        }

        $card = new Card();
        $cards = $session->get("cardsJoker");

        $randomCard = $card->getOneCard($cards);
        $session->set("cardsJoker", array_diff($cards, [$randomCard]));

        $data = [
            'Kort' => $randomCard,
            'Kort kvar' => count($cards) - 1
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    // Kmom02
    #[Route("/api", name: "api_post", methods: ["POST"])]
    public function apiPost(
        Request $request,
        SessionInterface $session
    ): Response {
        $number = $request->request->get('num_cards');

        if ($number == '') {
            $number = $request->request->get('num_cards_joker');
            if ($session->has("cardsJoker")) {
            } else {
                $NewDeck = new DeckOfCardsJoker();
                $session->set("cardsJoker", $NewDeck->getCards());
            }

            $card = new Card();

            $drawnCards = [];

            for ($i = 1; $i <= $number; $i++) {
                $cards = $session->get("cardsJoker");
                $randomCard = $card->getOneCard($cards);
                $session->set("cardsJoker", array_diff($cards, [$randomCard]));
                $drawnCards[] = $randomCard;
            }
            $session->set("cards_left", $cards);
        } else {
            if ($session->has("deck")) {
            } else {
                $NewDeck = new DeckOfCards();
                $session->set("cards", $NewDeck->getCards());
            }

            $card = new Card();

            $drawnCards = [];

            for ($i = 1; $i <= $number; $i++) {
                $cards = $session->get("cards");
                $randomCard = $card->getOneCard($cards);
                $session->set("cards", array_diff($cards, [$randomCard]));
                $drawnCards[] = $randomCard;
            }
            $session->set("cards_left", $cards);
        }

        $session->set("drawn_cards", $drawnCards);

        return $this->redirectToRoute('drawMultiple', ["number" => $number]);
    }

    // Kmom02
    #[Route("api/deck/draw/{number<\d+>}", name: "drawMultiple", methods: ['GET'])]
    public function jsonDeckShowMultiple(
        int $number,
        SessionInterface $session
    ): Response {

        $data = [
            'Dragna kort' => $session->get("drawn_cards"),
            'Kort kvar' => count($session->get("cards_left")) - 1
        ];
        $session->remove("cards_left");
        $session->remove("drawn_cards");

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
