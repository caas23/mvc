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
        Request $request,
        SessionInterface $session
        ): ?string
    {
        $number = $request->request->get('num_cards');
    
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
        Request $request,
        SessionInterface $session
        ): ?string
    {
        $number = $request->request->get('num_cards_joker');
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
