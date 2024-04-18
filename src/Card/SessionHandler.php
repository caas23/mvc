<?php

namespace Caas23\Card;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SessionHandler extends DeckOfCards
{
    public function __construct()
    {
        parent::__construct();
    }

    public function sessionInit(
        SessionInterface $session
    ): void {
        $session->set("cards", parent::getCardsShuffled());
        $session->set("drawn", []);
        $session->set("drawn_player", []);
        $session->set("total", 0);
        $session->set("players_total", 0);
        $session->set("aceCard", false);
    }

    public function winnerToSession(
        SessionInterface $session,
        string $sessionVariable
    ): void {
        if (!$session->has($sessionVariable)) {
            $session->set($sessionVariable, 0);
        }
        $session->set($sessionVariable, $session->get($sessionVariable) + 1);
    }

    public function setValue(
        SessionInterface $session,
        int $value,
        bool $bank
    ): void {
        $total = $session->get("total");
        if ($value != 01) {
            $session->set("total", $total + $value);
        } elseif ($bank == false) {
            $session->set("aceCard", true);
        } elseif ($total + 14 <= 21) {
            $session->set("total", $total + 14);
        } elseif ($bank == true) {
            $session->set("total", $total + 1);
        }
        $this->checkBust($session, $bank);
    }

    public function setAceValue(
        SessionInterface $session,
        Request $request
    ): void {
        $total = $session->get("total");
        $session->set("total", $total + (int)$request->request->get("ace"));
        $session->set("aceCard", false);
    }

    public function checkBust(
        SessionInterface $session,
        bool $bank
    ): void {
        $total = $session->get("total");
        if ($total > 21 && $bank == false) {
            $this->winnerToSession($session, "bank_won");
        } elseif ($total > 21 && $bank == true) {
            $this->winnerToSession($session, "player_won");
        } elseif ($total <= 21) {
            $this->checkWinner($session, $bank);
        }
    }

    public function checkWinner(
        SessionInterface $session,
        bool $bank
    ): void {
        $total = $session->get("total");
        $playersTotal = $session->get("players_total");

        if ($bank == false && $total == 21 || ($bank == true && $total >= 17 && $total < $playersTotal)) {
            $this->winnerToSession($session, "player_won");
        } elseif ($bank == true && ($total == 21 || ($total >= 17 && $total >= $playersTotal))) {
            $this->winnerToSession($session, "bank_won");
        }
    }
}
