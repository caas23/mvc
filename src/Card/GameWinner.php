<?php

namespace Caas23\Card;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * GameWinner class handling winner of game 21.
 */
class GameWinner extends SessionHandler
{
    public function __construct()
    {
        parent::__construct();
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
     * Check if player or bank won, add winner to session using winnerToSession().
     * @SuppressWarnings(PHPMD.ElseExpression)
     */
    public function checkWinner(
        SessionInterface $session,
        mixed $total,
        bool $bank
    ): void {
        $playersTotal = $session->get("players_total");

        if ($bank === true) {
            $this->checkWinnerBanksTurn($session, $total, $playersTotal);
        } else {
            $this->checkWinnerPlayersTurn($session, $total);
        }
    }

    /**
     * Check winner if it's the bank's turn.
     */
    public function checkWinnerBanksTurn(
        SessionInterface $session,
        mixed $total,
        mixed $playersTotal
    ): void {
        if ($total === 21 || $total >= 17 && $total >= $playersTotal) {
            $this->winnerToSession($session, "bank_won");
        } elseif ($total >= 17 && $total < $playersTotal) {
            $this->winnerToSession($session, "player_won");
        }
    }

    /**
     * Check winner if it's the player's turn.
     */
    public function checkWinnerPlayersTurn(
        SessionInterface $session,
        mixed $total
    ): void {
        if ($total === 21) {
            $this->winnerToSession($session, "player_won");
        } elseif ($total > 21) {
            $this->winnerToSession($session, "bank_won");
        }
    }


}
