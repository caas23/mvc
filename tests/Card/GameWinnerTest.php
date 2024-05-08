<?php

namespace Caas23\Card;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * Test cases for class DiceHand.
 */
class GameWinnerTest extends TestCase
{
    /**
     * Construct object and verify that the object is a deck.
     */
    public function testCreateParent(): void
    {
        $parent = new GameWinner();
        $this->assertInstanceOf("\Caas23\Card\SessionHandler", $parent);
    }


    /**
     * Test add a winner to session.
     */
    public function testAddWinnerToSession(): void
    {
        $session = $this->createMock(SessionInterface::class);
        (new GameWinner())->winnerToSession($session, "Player");

        $this->assertInstanceOf("Symfony\Component\HttpFoundation\Session\SessionInterface", $session);
    }
    
    /**
     * Test check winner, bank's turn.
     */
    public function testcheckWinnerBanksTurn(): void
    {
        $session = $this->createMock(SessionInterface::class);
        (new GameWinner())->checkWinnerBanksTurn($session, 21, 20);
        (new GameWinner())->checkWinnerBanksTurn($session, 17, 20);

        $this->assertInstanceOf("Symfony\Component\HttpFoundation\Session\SessionInterface", $session);
    }
    
    /**
     * Test check winner, players's turn.
     */
    public function testcheckWinnerPlayersTurn(): void
    {
        $session = $this->createMock(SessionInterface::class);
        (new GameWinner())->checkWinnerPlayersTurn($session, 21);
        (new GameWinner())->checkWinnerPlayersTurn($session, 22);

        $this->assertInstanceOf("Symfony\Component\HttpFoundation\Session\SessionInterface", $session);
    }

}
