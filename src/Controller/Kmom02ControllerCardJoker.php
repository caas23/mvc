<?php

namespace Caas23\Controller;

use Caas23\Card\Card;
use Caas23\Card\CardHand;
use Caas23\Card\DeckOfCardsJoker;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class Kmom02ControllerCardJoker extends AbstractController
{
    #[Route("/card/deck/joker", name: "card/deck/joker")]
    public function cardDeckJoker(): Response
    {
        $deck = new DeckOfCardsJoker();

        $data = [
            'cards' => $deck->getCards(),
            'shuffle' => false
        ];
        return $this->render('Kmom02/card_deck.html.twig', $data);
    }

    #[Route("/card/deck/joker/shuffle", name: "card/deck/joker/shuffle")]
    public function cardDeckJokerShuffle(
        SessionInterface $session
    ): Response {
        $deck = new DeckOfCardsJoker();

        $cards = $deck->getCardsShuffled();

        $data = [
            'cards' => $cards,
            'shuffle' => true
        ];

        $session->set("cardsJoker", $cards);

        return $this->render('Kmom02/card_deck.html.twig', $data);
    }

    #[Route("/card/deck/joker/draw", name: "card/deck/joker/draw")]
    public function cardDeckJokerDraw(
        SessionInterface $session
    ): Response {
        if (!$session->has("cardsJoker")) {
            $newDeck = new DeckOfCardsJoker();
            $session->set("cardsJoker", $newDeck->getCards());
        }

        $card = new Card();
        $cards = $session->get("cardsJoker");

        $randomCard = $card->getOneCard($cards);
        $session->set("cardsJoker", array_diff($cards, [$randomCard]));

        $data = [
            'card' => $randomCard,
            'cards_left' => count($cards) - 1
        ];

        return $this->render('Kmom02/card_single.html.twig', $data);
    }

    #[Route("/card/deck/joker/deal/{players<\d+>}/{cards<\d+>}", name: "deal_cardhand_joker")]
    public function dealJokerCardHand(
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

            if (!$session->has("cardsJoker")) {
                $newDeck = new DeckOfCardsJoker();
                $session->set("cardsJoker", $newDeck->getCards());
            }

            $cardsOnHand = [];

            for ($k = 1; $k <= $cards; $k++) {
                $cardsDeck = $session->get("cardsJoker");
                $randomCard = $hand->getOneCard($cardsDeck);
                $session->set("cardsJoker", array_diff($cardsDeck, [$randomCard]));
                $cardsOnHand[] = $randomCard;
            }

            $allHands[$player] = $cardsOnHand;
        }

        $data = [
            "hand" => $allHands,
            "players" => array_keys($allHands),
            "cards_left" => count($session->get("cardsJoker"))
        ];

        return $this->render('Kmom02/card_hand.html.twig', $data);
    }
}