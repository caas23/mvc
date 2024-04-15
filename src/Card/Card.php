<?php

namespace Caas23\Card;

class Card
{
    protected mixed $card;

    public function __construct()
    {
        $this->card = null;
    }

    /**
     * @param array<mixed> $cards
     */
    public function getOneCard(array $cards): mixed
    {
        $randKey = array_rand($cards, 1);

        $this->card = $cards[$randKey];
        return $this->card;
    }
}
