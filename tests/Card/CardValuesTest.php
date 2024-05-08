<?php

namespace Caas23\Card;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * Test cases for class DiceHand.
 */
class CardValuesTest extends TestCase
{
    /**
     * Construct object and verify that the object is a deck.
     */
    public function testCreateParent(): void
    {
        $parent = new CardValues();
        $this->assertInstanceOf("\Caas23\Card\SessionHandler", $parent);
    }

    /**
     * Test set a value for a card.
     */
    public function testSetValue(): void
    {
        $session = $this->createMock(SessionInterface::class);
        (new CardValues())->setValue($session, 1, 10, true);
        (new CardValues())->setValue($session, 1, 10, false);
        (new CardValues())->setValue($session, 2, 10, true);
        (new CardValues())->setValue($session, 1, 5, true);

        $this->assertInstanceOf("Symfony\Component\HttpFoundation\Session\SessionInterface", $session);
    }

    /**
     * Test set a value for an ace.
     */
    public function testSetAceValue(): void
    {
        $session = $this->createMock(SessionInterface::class);
        (new CardValues())->setAceValue($session, 14, 1);

        $this->assertInstanceOf("Symfony\Component\HttpFoundation\Session\SessionInterface", $session);
    }
}
