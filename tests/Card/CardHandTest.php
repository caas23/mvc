<?php

namespace Caas23\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardHand.
 */
class CardHandTest extends TestCase
{
    /**
     * Construct object and verify that the object is a hand.
     */
    public function testCreateHand(): void
    {
        $hand = new CardHand();
        $this->assertInstanceOf("\Caas23\Card\CardHand", $hand);
    }

    /**
     * Stub the cards and count cards in hand.
     */
    public function testAddStubbedCards(): void
    {
        $stub = $this->createMock(Card::class);
        $stub->method('getOneCard');

        $hand = new CardHand();
        $hand->add(clone $stub);
        $hand->add(clone $stub);
        $res = $hand->getNumberOfCards();
        $this->assertIsInt($res);
        $this->assertEquals(2, $res);
    }

    /**
     * Get one card from hand.
     */
    public function testGetOneCardFromHand(): void
    {
        $stub = $this->createMock(Card::class);
        $stub->method('getOneCard');

        $hand = new CardHand();
        $hand->add(clone $stub);
        $hand->add(clone $stub);
        $hand->add(clone $stub);
        $hand->add(clone $stub);
        $hand->add(clone $stub);


        $res = $hand->getOneCard((array)$hand);
        $this->assertIsString($res);
    }

    /**
     * Return empty string if no card is fetched (empty hand).
     */
    public function testGetCardEmptyHand(): void
    {
        $hand = new CardHand();

        $res = $hand->getOneCard((array)$hand);
        $this->assertEquals("", $res);
    }
}
