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
     * Test check if bust.
     */
    public function testcheckBust(): void
    {
        $session = $this->createMock(SessionInterface::class);
        (new SessionHandler())->checkBust($session, 22, false);
        (new SessionHandler())->checkBust($session, 22, true);
        $this->assertInstanceOf("Symfony\Component\HttpFoundation\Session\SessionInterface", $session);
    }


}
