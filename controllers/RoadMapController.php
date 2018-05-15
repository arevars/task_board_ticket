<?php

namespace controllers;

use Utils\TicketParser;

class RoadMapController {
    
    public function getSortedDestinationsList($jsonData) {
        $ticketData = new TicketParser($jsonData);

        return $ticketData->getLinkedList();
    }

    public function getNextDestination() {

    }


}
