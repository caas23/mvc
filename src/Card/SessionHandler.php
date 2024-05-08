<?php

namespace Caas23\Card;

use Caas23\Card\GameWinner;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * SessionHandler class handling the session.
 */
class SessionHandler extends DeckOfCards
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Init new session.
     */
    public function sessionInit(
        SessionInterface $session,
        string $path
    ): void {
        $session->set("cards", parent::getCardsShuffled($path));
        $session->set("drawn", []);
        $session->set("drawn_player", []);
        $session->set("total", 0);
        $session->set("players_total", 0);
        $session->set("aceCard", false);
    }

    /**
     * Check if total > 21, if so add winner to session. If total <= 21, and game is over, check who won using checkWinner().
     */
    public function checkBust(
        SessionInterface $session,
        mixed $total,
        bool $bank
    ): void {
        $gameWinner = new GameWinner();
        if ($total > 21 && $bank === false) {
            $gameWinner->winnerToSession($session, "bank_won");
        } elseif ($total > 21 && $bank === true) {
            $gameWinner->winnerToSession($session, "player_won");
        } elseif ($total <= 21) {
            $gameWinner->checkWinner($session, $total, $bank);
        }
    }
}
