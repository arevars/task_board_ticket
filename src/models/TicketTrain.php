<?php

namespace Models;

use Common\Ticket;


class TicketTrain extends Ticket {
    public $train;
    public $seat;

    public function getType() {
        return TicketManager::getType(TransportManager::TRANSPORT_TYPE_TRAIN);
    }
}


