<?php

namespace Caas23\Card;

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
        int $number
        ): ?string
    {  
        if (!$session->has("cards")) {
            $newDeck = new DeckOfCards();
            $session->set("cards", $newDeck->getCards('../public/svg/'));
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
        return $number;
    }
    
    /**
     * Get number of random cards from deck with jokers.
     */
    public function drawMultipleJoker(
        SessionInterface $session,
        int $number
        ): ?string
    {
        if (!$session->has("cardsJoker")) {
            $newDeck = new DeckOfCardsJoker();
            $session->set("cardsJoker", $newDeck->getCards('../public/svg/'));
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
        return $number;
    }
}
