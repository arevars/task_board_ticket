<?php

namespace Utils;

use Utils\LinkedList;
use models\TicketAirplane;
use models\TicketBus;
use models\TicketTrain;

class TicketParser {

    public function __construct($data) {
        $this->data = json_decode($data, true);
    }

    public function getLinkedList() {
        $list = new LinkedList();
//        echo '<pre>';
//var_dump($this->data); exit;
        foreach($this->data as $value) {
            $ticket =
            switch($value['type']) {
                case 1:
                    $ticket = new
                    break;

                default: break;
            }
            $list->insertAtLast($value['to']);
        }
        return $list;
    }

    public function getSortedList() {
        $count = count($this->data);
        $sortedData = [];
        foreach ($this->data as $value) {
            $value['from']
            $value['to']
        }
    }


//    public function parseTicket() {
//
//        $sortedDestinationData = json_decode($this->data, true);
//        array_multisort(array_column($sortedDestinationData, "to"), SORT_ASC, $sortedDestinationData);
//
//        return $sortedDestinationData;
//    }
}


