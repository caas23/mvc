<?php

namespace Caas23\Card;

/**
 * DeckOfCards class handling a deck.
 */
class DeckOfCards
{
    protected mixed $deck;

    public function __construct()
    {
        $this->deck = null;
    }

    /**
     * Get deck of cards.
     * @return array<mixed>
     */
    public function getCards(string $path): array
    {
        $this->deck = array_diff((array)scandir($path), array('..', '.', '_joker1.svg', '_joker2.svg'));
        return $this->deck;
    }

    /**
     * Get deck of cards shuffled.
     * @return array<mixed>
     */
    public function getCardsShuffled(string $path): array
    {
        $this->deck = $this->getCards($path);
        shuffle($this->deck);

        return $this->deck;

    }
}
