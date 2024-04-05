<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\CardHand;
use App\Card\DeckOfCards;
use App\Card\DeckOfCardsJoker;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class Kmom02ControllerTwig extends AbstractController
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
            'card' => $randomCard,
            'cards_left' => count($cards) - 1
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
            if ($session->has("cards")) {
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

        return $this->redirectToRoute('drawMulitple', ["number" => $number]);
    }

    #[Route("card/deck/draw/{number<\d+>}", name: "drawMulitple", methods: ['GET'])]
    public function cardDeckShowMultiple(
        int $number,
        SessionInterface $session
    ): Response {
        $data = [
            'cards' => $session->get("drawn_cards"),
            'cards_left' => count($session->get("cards_left")) - 1
        ];
        $session->remove("cards_left");
        $session->remove("drawn_cards");

        return $this->render('Kmom02/card_multiple.html.twig', $data);
    }

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
            'card' => $randomCard,
            'cards_left' => count($cards) - 1
        ];

        return $this->render('Kmom02/card_single.html.twig', $data);
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

            if ($session->has("cards")) {
            } else {
                $NewDeck = new DeckOfCards();
                $session->set("cards", $NewDeck->getCards());
            }

            $cardsOnHand = [];

            for ($k = 1; $k <= $cards; $k++) {
                $cardsDeck = $session->get("cards");
                $randomCard = $hand->getOneCard($cardsDeck);
                $session->set("cards", array_diff($cardsDeck, [$randomCard]));
                $cardsOnHand[] = $randomCard;
            }

            $allHands[$player] = $cardsOnHand;
        }

        $data = [
            "hand" => $allHands,
            "players" => array_keys($allHands),
            "cards_left" => count($session->get("cards"))
        ];

        return $this->render('Kmom02/card_hand.html.twig', $data);
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

            if ($session->has("cardsJoker")) {
            } else {
                $NewDeck = new DeckOfCardsJoker();
                $session->set("cardsJoker", $NewDeck->getCards());
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

    #[Route("/session", name: "session")]
    public function session(
        SessionInterface $session
    ): Response {
        session_name('caas23');
        session_start();

        $data = [
            'session' => $_SESSION
        ];

        return $this->render('Kmom02/session.html.twig', $data);
    }

    #[Route("/session/delete", name: "session/delete")]
    public function sessionDelete(
        Request $request,
        SessionInterface $session
    ): Response {
        session_name("caas23");
        session_start();

        $_SESSION = [];

        $this->addFlash(
            'notice',
            'Sessionen har raderats!'
        );

        return $this->redirectToRoute('session');
    }
}
