<?php

namespace Caas23\Card;

use Caas23\Card\Card;

/**
 * CardHand class handling a card hand.
 */
class CardHand
{
    /**
     * @var array $hand
     */
    private array $hand = [];

    /**
     * Add cards to hand, using the Card class.
     */
    public function add(Card $card): void
    {
        $this->hand[] = $card;
    }

    /**
     * Get number of cards in hand.
     */
    public function getNumberOfCards(): int
    {
        return count($this->hand);
    }

    /**
     * Get one card from the hand.
     * @param array $cards
     */
    public function getOneCard($cards): string
    {
        foreach ($this->hand as $card) {
            $oneCard = $card->getOneCard($cards);
        }
        if (isset($oneCard)) {
            return $oneCard;
        } return "";
    }
}
