<?php

class TicketAirplane extends Ticket {
    public $flight;
    public $classType;
    
    public function __construct($flight,$classType) {
        $this->flight = $flight;
        $this->classType = $classType;
    }
    
    public function getTicketData() {
        return $this;
    }
    
    public function setTicketData() {}
    
}


