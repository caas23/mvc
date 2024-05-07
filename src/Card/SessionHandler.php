<?php

namespace Caas23\Card;

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
     * Add winner to session and add one point.
     */
    public function winnerToSession(
        SessionInterface $session,
        string $sessionVariable
    ): void {
        if (!$session->has($sessionVariable)) {
            $session->set($sessionVariable, 0);
        }
        $session->set($sessionVariable, $session->get($sessionVariable) + 1);
    }

    /**
     * Set value for card, add to total. Check if total > 21, using checkBust().
     */
    public function setValue(
        SessionInterface $session,
        int $value,
        mixed $total,
        bool $bank
    ): void {
        if ($value != 1) {
            $session->set("total", $total + $value);
        } elseif ($bank == false) {
            $session->set("aceCard", true);
        } elseif ($total + 14 <= 21) {
            $session->set("total", $total + 14);
        } elseif ($bank == true) {
            $session->set("total", $total + 1);
        }
        $this->checkBust($session, $total, $bank);
    }

    /**
     * Set ace value, as chosen by player. Add to total. Check if total > 21, using checkBust().
     */
    public function setAceValue(
        SessionInterface $session,
        int $value,
        mixed $total
    ): void {
        $session->set("total", $total + $value);
        $session->set("aceCard", false);
        $this->checkBust($session, $total, false);
    }
    /**
     * Check if total > 21, if so add winner to session. If total <= 21, and game is over, check who won using checkWinner().
     */
    public function checkBust(
        SessionInterface $session,
        mixed $total,
        bool $bank
    ): void {
        if ($total > 21 && $bank == false) {
            $this->winnerToSession($session, "bank_won");
        } elseif ($total > 21 && $bank == true) {
            $this->winnerToSession($session, "player_won");
        } elseif ($total <= 21) {
            $this->checkWinner($session, $total, $bank);
        }
    }

    /**
     * Check if player or bank won, add winner to session using winnerToSession().
     * @SuppressWarnings(PHPMD) (Cyclomatic Complexity of 10)
     */
    public function checkWinner(
        SessionInterface $session,
        mixed $total,
        bool $bank
    ): void {
        $playersTotal = $session->get("players_total");

        if ($bank == false && $total == 21 || ($bank == true && $total >= 17 && $total < $playersTotal)) {
            $this->winnerToSession($session, "player_won");
        } elseif ($bank == true && ($total == 21 || ($total >= 17 && $total >= $playersTotal))) {
            $this->winnerToSession($session, "bank_won");
        }
    }
}
