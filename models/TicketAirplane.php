<?php

namespace Models;

use Common\Ticket;
use Models\TicketManager;
use Models\TransportManager;

class TicketAirplane extends Ticket {

    public $flightNumber;
    public $gate;
    public $seat;
    public $baggageNumber;
    
    public function getType() {
        return TicketManager::getType(TRANSPORT_TYPE_AIRPLANE);
    }
}


