<?php

namespace Caas23\Card;

class Card
{
    protected $card;

    public function __construct()
    {
        $this->card = null;
    }

    public function getOneCard($cards): string
    {
        $randKey = array_rand($cards, 1);

        $this->card = $cards[$randKey];
        return $this->card;
    }
}
