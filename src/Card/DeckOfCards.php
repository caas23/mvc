<?php

namespace App\Card;

class DeckOfCards
{
    protected $deck;

    public function __construct()
    {
        $this->deck = null;
    }

    public function getCards(): array
    {
        $this->deck = array_diff(scandir('../public/svg/'), array('..', '.', '_joker1.svg', '_joker2.svg'));
        return $this->deck;
    }

    public function getCardsShuffled(): array
    {
        $this->deck = $this->getCards();
        shuffle($this->deck);

        return $this->deck;

    }
}
