<?php

namespace Caas23\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class DeckOfCardsJoker.
 */
class DeckOfCardsJokerTest extends TestCase
{
    /**
     * Construct object and verify that the object is a deck.
     */
    public function testCreateDeck(): void
    {
        $deck = new DeckOfCardsJoker();
        $this->assertInstanceOf("\Caas23\Card\DeckOfCards", $deck);
    }

    /**
     * Get deck with jokers.
     */
    public function testGetDeckOfCards(): void
    {
        $cards = (new DeckOfCardsJoker())->getCards('public/svg/');

        $this->assertIsArray($cards);
        $this->assertEquals(54, count($cards));
        $this->assertContains("_joker1.svg", array_values($cards));
        $this->assertContains("_joker2.svg", array_values($cards));
    }

}
