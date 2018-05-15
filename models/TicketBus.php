<?php

namespace models;

use common\Ticket;
use common\Transport;

class TicketBus extends Ticket {
    public $seat;
    public $place;
    
    public function getType() {
        return Transport::getTransport(1);
    }

    public function getData() {
        return $this;
    }

    public function setData($key, $value) {
        $this->$key = $value;
    }
    
}


