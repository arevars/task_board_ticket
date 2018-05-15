<?php

namespace controllers;

use Utils\TicketParser;

class RoadMapController {
    
    public function getSortedDestinationsList($jsonData) {
        $ticketData = new TicketParser();

        return $ticketData->getSortedList(json_decode($jsonData, true), 0);
    }

    public function getNextDestination() {

    }


}
