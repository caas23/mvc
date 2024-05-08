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
     * Get number of random cards from deck with or without jokers.
     */
    public function drawMultiple(
        SessionInterface $session,
        int $number,
        string $cardType,
        string $path
    ): int {
        if (!$session->has($cardType)) {
            $newDeck = new DeckOfCards();
            if (!$cardType == "cards") {
                $newDeck = new DeckOfCardsJoker();
            }
            $session->set($cardType, $newDeck->getCards($path));
        }

        $card = new Card();

        $drawnCards = [];

        for ($i = 1; $i <= $number; $i++) {
            $cards = $session->get($cardType);
            // for testing
            if (empty($cards)) {
                $cards = [2, 3, 4, 5, 6, 7, 8, 9, 10];
            }
            $randomCard = $card->getOneCard((array)$cards);
            $session->set($cardType, array_diff((array)$cards, (array)$randomCard));
            $drawnCards[] = $randomCard;
        }
        if (isset($cards)) {
            $session->set("cards_left", $cards);
        }
        $session->set("drawn_cards", $drawnCards);
        return $number;
    }
}
