<?php

namespace Caas23\Card;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


/**
 * Test cases for class CardMultiple.
 */
class CardMultipleTest extends TestCase
{
    /**
     * Construct object and verify that the object is a hand.
     */
    public function testCreate(): void
    {
        $cards = new CardMultiple();
        $this->assertInstanceOf("\Caas23\Card\CardMultiple", $cards);
    }

    /**
     * Test draw multiple cards
     */
    public function testDrawMutliple(): void
    {
        $sessionMultiple = $this->createMock(SessionInterface::class);
        $number = 5;
        $path = 'public/svg/';
        $cards = (new CardMultiple())->drawMultiple($sessionMultiple, $number, $path);
        $this->assertInstanceOf("Symfony\Component\HttpFoundation\Session\SessionInterface", $sessionMultiple);
        $this->assertNotEmpty($cards);
        $this->assertEquals((int)$cards, 5);

    }
    
    /**
     * Test draw multiple cards with jokers.
     */
    public function testDrawMutlipleJokers(): void
    {
        $sessionMultiple = $this->createMock(SessionInterface::class);
        $number = 5;
        $path = 'public/svg/';
        $cards = (new CardMultiple())->drawMultipleJoker($sessionMultiple, $number, $path);
        $this->assertInstanceOf("Symfony\Component\HttpFoundation\Session\SessionInterface", $sessionMultiple);
        $this->assertNotEmpty($cards);
        $this->assertEquals((int)$cards, 5);
        
    }
}
