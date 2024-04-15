<?php

namespace Caas23\Card;

class DeckOfCards
{
    protected mixed $deck;

    public function __construct()
    {
        $this->deck = null;
    }

    /**
     * @return array<mixed>
     */
    public function getCards(): array
    {
        $this->deck = array_diff((array)scandir('../public/svg/'), array('..', '.', '_joker1.svg', '_joker2.svg'));
        return $this->deck;
    }

    /**
     * @return array<mixed>
     */
    public function getCardsShuffled(): array
    {
        $this->deck = $this->getCards();
        shuffle($this->deck);

        return $this->deck;

    }
}
