<?php

namespace models;

use common\Ticket;
use models\TicketManager;
use models\TransportManager;

class TicketAirplane extends Ticket {

    public $flightNumber;
    public $gate;
    public $seat;
    public $baggageNumber;
    
    public function getType() {
        return TicketManager::getType(TRANSPORT_TYPE_AIRPLANE);
    }
}


