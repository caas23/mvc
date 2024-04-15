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

class Kmom02ControllerCard extends AbstractController
{
    #[Route("/card", name: "card", methods: ['GET'])]
    public function card(): Response
    {
        return $this->render('Kmom02/card.html.twig');
    }

    #[Route("/card/deck", name: "card/deck")]
    public function cardDeck(): Response
    {
        $deck = new DeckOfCards();

        $data = [
            'cards' => $deck->getCards(),
            'shuffle' => false
        ];

        return $this->render('Kmom02/card_deck.html.twig', $data);
    }

    #[Route("/card/deck/shuffle", name: "card/deck/shuffle")]
    public function cardDeckShuffle(
        SessionInterface $session
    ): Response {
        $deck = new DeckOfCards();
        $cards = $deck->getCardsShuffled();

        $data = [
            'cards' => $cards,
            'shuffle' => true
        ];

        $session->set("cards", $cards);

        return $this->render('Kmom02/card_deck.html.twig', $data);
    }

    #[Route("/card/deck/draw", name: "card/deck/draw")]
    public function cardDeckDraw(
        SessionInterface $session
    ): Response {

        if (!$session->has("cards")) {
            $newDeck = new DeckOfCards();
            $session->set("cards", $newDeck->getCards());
        }

        $card = new Card();
        $cards = $session->get("cards");

        $randomCard = $card->getOneCard((array)$cards);
        $session->set("cards", array_diff((array)$cards, (array)$randomCard));

        $data = [
            'card' => $randomCard,
            'cards_left' => count((array)$cards) - 1
        ];

        return $this->render('Kmom02/card_single.html.twig', $data);
    }

    #[Route("/card", name: "card_post", methods: ['POST'])]
    public function cardDeckDrawMultiple(
        Request $request,
        SessionInterface $session
    ): Response {
        $number = $request->request->get('num_cards');

        if ($number == '') {
            $number = $request->request->get('num_cards_joker');
            if (!$session->has("cardsJoker")) {
                $newDeck = new DeckOfCardsJoker();
                $session->set("cardsJoker", $newDeck->getCards());
            }

            $card = new Card();

            $drawnCards = [];

            for ($i = 1; $i <= $number; $i++) {
                $cards = $session->get("cardsJoker");
                $randomCard = $card->getOneCard((array)$cards);
                $session->set("cardsJoker", array_diff((array)$cards, (array)$randomCard));
                $drawnCards[] = $randomCard;
            }
            if (isset($cards)) {
                $session->set("cards_left", $cards);
            }
            $session->set("drawn_cards", $drawnCards);
            return $this->redirectToRoute('drawMulitple', ["number" => $number]);

        } if (!$session->has("cards")) {
            $newDeck = new DeckOfCards();
            $session->set("cards", $newDeck->getCards());
        }

        $card = new Card();

        $drawnCards = [];

        for ($i = 1; $i <= $number; $i++) {
            $cards = $session->get("cards");
            $randomCard = $card->getOneCard((array)$cards);
            $session->set("cards", array_diff((array)$cards, (array)$randomCard));
            $drawnCards[] = $randomCard;
        }
        if (isset($cards)) {
            $session->set("cards_left", $cards);
        }
        $session->set("drawn_cards", $drawnCards);
        return $this->redirectToRoute('drawMulitple', ["number" => $number]);
    }

    #[Route("card/deck/draw/{number<\d+>}", name: "drawMulitple", methods: ['GET'])]
    public function cardDeckShowMultiple(
        SessionInterface $session
    ): Response {
        $data = [
            'cards' => $session->get("drawn_cards"),
            'cards_left' => count((array)$session->get("cards_left")) - 1
        ];
        $session->remove("cards_left");
        $session->remove("drawn_cards");

        return $this->render('Kmom02/card_multiple.html.twig', $data);
    }

    #[Route("/card/deck/deal/{players<\d+>}/{cards<\d+>}", name: "deal_cardhand")]
    public function dealCardHand(
        int $players,
        int $cards,
        SessionInterface $session
    ): Response {

        $allHands = [];
        $player = 0;
        for ($i = 1; $i <= $players; $i++) {
            $player++;
            $hand = new CardHand();
            for ($j = 1; $j <= $cards; $j++) {
                $hand->add(new Card());
            }

            if (!$session->has("cards")) {
                $newDeck = new DeckOfCards();
                $session->set("cards", $newDeck->getCards());
            }

            $cardsOnHand = [];

            for ($k = 1; $k <= $cards; $k++) {
                $cardsDeck = $session->get("cards");
                $randomCard = $hand->getOneCard((array)$cardsDeck);
                $session->set("cards", array_diff((array)$cardsDeck, (array)$randomCard));
                $cardsOnHand[] = $randomCard;
            }

            $allHands[$player] = $cardsOnHand;
        }

        $data = [
            "hand" => $allHands,
            "players" => array_keys($allHands),
            "cards_left" => count((array)$session->get("cards"))
        ];

        return $this->render('Kmom02/card_hand.html.twig', $data);
    }
}
