<?php

namespace Caas23\Card;

/**
 * Card class handling single cards.
 */
class Card
{
    protected ?string $card;

    public function __construct()
    {
        $this->card = null;
    }

    /**
     * Get a random card from given deck.
     * @param array $cards
     */
    public function getOneCard(array $cards): ?string //@phpstan-ignore-line
    {
        $randKey = array_rand($cards, 1);

        $this->card = $cards[$randKey];
        return $this->card;
    }

    /**
     * Get numeric value for given card.
     */
    public function getValue(string $card): int
    {
        $number = explode("-", $card)[1];
        $number = explode(".", $number)[0];

        return (int)$number;
    }
}
