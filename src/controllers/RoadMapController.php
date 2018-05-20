<?php

namespace Controllers;

use Models\TicketManager;

class RoadMapController {
    public $data;

    public function __construct($jsonData) {
        $this->data = $jsonData;
    }

    public function getSortedDestinationsList() {
        $ticketData = new TicketManager($this->data);

        return $ticketData->getSortedList();
    }

    /**
     * @param $from
     * @return string
     */
    public function getNextDestination($from) {
        $sortedList = $this->getSortedDestinationsList();

        foreach($sortedList as $place) {
            if($place->from == $from) {
                return $place;
            }
        }
        return 'Destination unknown';

    }
}
