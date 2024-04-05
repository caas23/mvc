<?php

namespace App\Card;

class CardJoker_original extends Card_original
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
        $deck = parent::getCards();
        return array_merge($this->deck, $this->joker);
    }
}
