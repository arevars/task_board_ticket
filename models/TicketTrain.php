<?php

namespace models;

use common\Ticket;
use common\Transport;

class TicketTrain extends Ticket {
    public $seat;
    
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


