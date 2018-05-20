<?php

namespace Models;

use Common\Ticket;

class TicketAirplane extends Ticket {

    public $flightNumber;
    public $gate;
    public $seat;
    public $baggageNumber;
    
    public function getType() {
        return TicketManager::getType(TransportManager::TRANSPORT_TYPE_AIRPLANE);
    }
}


