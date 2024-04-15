<?php

namespace Caas23\Card;

use Caas23\Card\Card;

class CardHand
{   
    /**
     * @var array<mixed> $hand
     */
    private array $hand = [];

    public function add(Card $card): void
    {
        $this->hand[] = $card;
    }

    public function getNumberOfCards(): int
    {
        return count($this->hand);
    }
    
    /**
     * @param array<mixed> $cards
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
