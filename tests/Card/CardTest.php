<?php

namespace Caas23\Card;

use PHPUnit\Framework\TestCase;
use Caas23\Card\DeckOfCards;

/**
 * Test cases for class Card.
 */
class CardTest extends TestCase
{
    /**
     * Construct object and verify that the object is a card.
     */
    public function testCreateCard(): void
    {
        $card = new Card();
        $this->assertInstanceOf("\Caas23\Card\Card", $card);
    }

    /**
     * Get one card from deck.
     */
    public function testGetOneCard(): void
    {
        $card = new Card();
        $cards = (new DeckOfCards())->getCards('public/svg/');

        $res = $card->getOneCard($cards);
        $this->assertNotEmpty($res);
        $this->assertIsString($res);
    }

    /**
     * Get numeric value of one card.
     */
    public function testGetValueOfCard(): void
    {
        $card = new Card();
        $cards = (new DeckOfCards())->getCards('public/svg/');

        $oneCard = $card->getOneCard($cards);
        $res = $card->getValue($oneCard);

        $this->assertNotEmpty($res);
        $this->assertIsInt($res);
        $this->assertGreaterThanOrEqual(1, $res);
        $this->assertLessThanOrEqual(13, $res);
    }
}
