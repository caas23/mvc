<?php

namespace App\Card;

class Card
{
    protected $card;

    public function __construct()
    {
        $this->card = null;
    }

    public function getOneCard($cards): string
    {
        $rand_key = array_rand($cards, 1);

        $this->card = $cards[$rand_key];
        return $this->card;
    }
}
