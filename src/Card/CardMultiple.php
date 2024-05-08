<?php

namespace Caas23\Card;


use Caas23\Card\Card;
use Caas23\Card\DeckOfCards;
use Caas23\Card\DeckOfCardsJoker;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


/**
 * Card class handling drawing multiple cards.
 */
class CardMultiple
{
    /**
     * Get number of random cards from deck without jokers.
     */
    public function drawMultiple(
        SessionInterface $session,
        int $number,
        string $path
        ): ?string
    {    
        if (!$session->has("cards")) {
            $newDeck = new DeckOfCards();
            $session->set("cards", $newDeck->getCards($path));
        }

        $card = new Card();

        $drawnCards = [];

        for ($i = 1; $i <= $number; $i++) {
            $cards = $session->get("cards");
            // for testing
            if (empty($cards)) {
                $cards = [2, 3, 4, 5, 6, 7, 8, 9, 10];
            }
            $randomCard = $card->getOneCard((array)$cards);
            $session->set("cards", array_diff((array)$cards, (array)$randomCard));
            $drawnCards[] = $randomCard;
        }
        if (isset($cards)) {
            $session->set("cards_left", $cards);
        }
        $session->set("drawn_cards", $drawnCards);
        return $number;
    }
    
    /**
     * Get number of random cards from deck with jokers.
     */
    public function drawMultipleJoker(
        SessionInterface $session,
        int $number,
        string $path
        ): ?string
    {
        if (!$session->has("cardsJoker")) {
            $newDeck = new DeckOfCardsJoker();
            $session->set("cardsJoker", $newDeck->getCards($path));
        }

        $card = new Card();

        $drawnCards = [];

        for ($i = 1; $i <= $number; $i++) {
            $cards = $session->get("cardsJoker");
            // for testing
            if (empty($cards)) {
                $cards = [2, 3, 4, 5, 6, 7, 8, 9, 10];
            }
            $randomCard = $card->getOneCard((array)$cards);
            $session->set("cardsJoker", array_diff((array)$cards, (array)$randomCard));
            $drawnCards[] = $randomCard;
        }
        if (isset($cards)) {
            $session->set("cards_left", $cards);
        }
        $session->set("drawn_cards", $drawnCards);
        return $number;
    }
}
