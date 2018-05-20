<?php

namespace Models;

use Common\Ticket;

class TicketBus extends Ticket {
    public $busNumber;
    public $seat;

    public function getType() {
        return TicketManager::getType(TransportManager::TRANSPORT_TYPE_BUS);
    }

    public function getData() {
        return $this;
    }

    public function setData($key, $value) {
        $this->$key = $value;
    }
    
}


