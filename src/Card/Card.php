<?php

namespace Caas23\Card;

class Card
{
    protected ?string $card;

    public function __construct()
    {
        $this->card = null;
    }

    /**
     * @param array $cards
     */
    public function getOneCard(array $cards): string
    {
        $randKey = array_rand($cards, 1);

        $this->card = $cards[$randKey];
        return $this->card;
    }

    public function getValue(string $card): int
    {
        $number = explode("-", $card)[1];
        $number = explode(".", $number)[0];

        return (int)$number;
    }
}
