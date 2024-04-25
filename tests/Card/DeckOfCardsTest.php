<?php

namespace Caas23\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class DeckOfCards.
 */
class DeckOfCardsTest extends TestCase
{
    /**
     * Construct object and verify that the object is a deck.
     */
    public function testCreateDeck(): void
    {
        $deck = new DeckOfCards();
        $this->assertInstanceOf("\Caas23\Card\DeckOfCards", $deck);
    }

    /**
     * Get deck.
     */
    public function testGetDeckOfCards(): void
    {
        $cards = (new DeckOfCards())->getCards('public/svg/');

        $this->assertIsArray($cards);
        $this->assertEquals(52, count($cards));
    }

    /**
     * Get deck shuffled.
     */
    public function testGetDeckOfCardsShuffled(): void
    {
        $cards = (new DeckOfCards())->getCards('public/svg/');
        $cardsShuffled = (new DeckOfCards())->getCardsShuffled('public/svg/');

        $this->assertIsArray($cardsShuffled);
        $this->assertEquals(52, count($cardsShuffled));
        $this->assertNotEquals($cards, $cardsShuffled);
    }



}
