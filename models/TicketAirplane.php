<?php

namespace models;

use common\Ticket;
use common\Transport;

class TicketAirplane extends Ticket {

    public $flightNumber;
    public $gate;
    public $seat;
    public $baggageNumber;
    
    public function getType() {
        return Transport::getTransport(2);
    }

    public function getData() {
        return $this;
    }

}


