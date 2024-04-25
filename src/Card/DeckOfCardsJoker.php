<?php

namespace Caas23\Card;

/**
 * DeckOfCardsJoker class handling a deck including jokers.
 */
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
     * Get deck of cards, including jokers.
     * @return array<mixed>
     */
    public function getCards(string $path): array
    {
        return array_merge(parent::getCards($path), (array)$this->joker);
    }
}
