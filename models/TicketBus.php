<?php

namespace models;

use common\Ticket;
use common\TicketManager;
use common\TransportManager;

class TicketBus extends Ticket {
    public $seat;
    public $place;
    
    public function getType() {
        return TicketManager::getType(1);
    }

    public function getData() {
        return $this;
    }

    public function setData($key, $value) {
        $this->$key = $value;
    }
    
}


