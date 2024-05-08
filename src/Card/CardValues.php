<?php

namespace Caas23\Card;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * CardValues class handling card values.
 */
class CardValues extends SessionHandler
{
    public function __construct()
    {
        parent::__construct();
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
        } elseif ($bank === false) {
            $session->set("aceCard", true);
        } elseif ($total + 14 <= 21) {
            $session->set("total", $total + 14);
        } else {
            $session->set("total", $total + 1);
        }
        parent::checkBust($session, $session->get("total"), $bank);
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
        parent::checkBust($session, $session->get("total"), false);
    }
}
