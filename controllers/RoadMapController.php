<?php

namespace controllers;

use models\TicketManager;

class RoadMapController {
    public $data;

    public function __construct($jsonData) {
        $this->data = $jsonData;
    }

    public function getSortedDestinationsList() {
        $ticketData = new TicketManager($this->data);

        return $ticketData->getSortedList();
    }

    public function getNextDestination($from) {
        $sortedList = $this->getSortedDestinationsList($this->data);

        foreach($sortedList as $place) {
            if($place['from'] == $from) {
                return $place;
            }
        }
        return 'Something going wrong';

    }


}
