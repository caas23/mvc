<?php

namespace Caas23\Card;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * Test cases for class DiceHand.
 */
class SessionHandlerTest extends TestCase
{
    /**
     * Construct object and verify that the object is a deck.
     */
    public function testCreateParent(): void
    {
        $parent = new SessionHandler();
        $this->assertInstanceOf("\Caas23\Card\DeckOfCards", $parent);
    }

    /**
     * Test init a new session.
     */
    public function testSessionInit(): void
    {
        $session = $this->createMock(SessionInterface::class);
        (new SessionHandler())->sessionInit($session, 'public/svg/');

        $this->assertInstanceOf("Symfony\Component\HttpFoundation\Session\SessionInterface", $session);
    }

    /**
     * Test add a winner to session.
     */
    public function testAddWinnerToSession(): void
    {
        $session = $this->createMock(SessionInterface::class);
        (new SessionHandler())->winnerToSession($session, "Player");

        $this->assertInstanceOf("Symfony\Component\HttpFoundation\Session\SessionInterface", $session);
    }

    /**
     * Test set a value for a card.
     */
    public function testSetValue(): void
    {
        $session = $this->createMock(SessionInterface::class);
        (new SessionHandler())->setValue($session, 01, 10, true);
        (new SessionHandler())->setValue($session, 01, 10, false);
        (new SessionHandler())->setValue($session, 02, 10, true);

        $this->assertInstanceOf("Symfony\Component\HttpFoundation\Session\SessionInterface", $session);
    }

    /**
     * Test set a value for an ace.
     */
    public function testSetAceValue(): void
    {
        $session = $this->createMock(SessionInterface::class);
        (new SessionHandler())->setAceValue($session, 14, 01);

        $this->assertInstanceOf("Symfony\Component\HttpFoundation\Session\SessionInterface", $session);
    }
}
