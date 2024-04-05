<?php

namespace App\Card;

use App\Card\Card;

class CardHand
{
    private $hand = [];

    public function add(Card $card): void
    {
        $this->hand[] = $card;
    }

    public function getNumberOfCards(): int
    {
        return count($this->hand);
    }

    public function getOneCard($cards)
    {
        $oneCard;
        foreach ($this->hand as $card) {
            $oneCard = $card->getOneCard($cards);
        }
        return $oneCard;
    }
}
