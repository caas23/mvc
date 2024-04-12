<?php

namespace Caas23\Card;

class DeckOfCardsJoker extends DeckOfCards
{
    private $joker = [
        '_joker1.svg',
        '_joker2.svg'
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function getCards(): array
    {
        return array_merge(parent::getCards(), $this->joker);
    }
}
