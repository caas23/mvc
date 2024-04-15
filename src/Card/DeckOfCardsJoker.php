<?php

namespace Caas23\Card;

class DeckOfCardsJoker extends DeckOfCards
{
    private mixed $joker = [
        '_joker1.svg',
        '_joker2.svg'
    ];

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return array<mixed>
     */
    public function getCards(): array
    {
        return array_merge(parent::getCards(), (array)$this->joker);
    }
}
