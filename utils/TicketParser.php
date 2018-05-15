<?php

namespace Utils;

use Utils\LinkedList;
use models\TicketAirplane;
use models\TicketBus;
use models\TicketTrain;

class TicketParser {
//
//    public function __construct($data) {
//        $this->data = json_decode($data, true);
//    }



    public function getSortedList($list) {

        $fromList = array_column($list, 'from');
        $toList = array_column($list,'to');

        $last = current(array_diff($fromList,$toList));

        $sortedList = $this->formatTree($list,$last);

//        foreach($list as $item) {
////            if($item['to'])
//        }
        $sortedList = array_column($sortedList,'next');

        return $sortedList;
    }

    private function formatTree($list, $parent)
    {


        foreach ($list as $item) {
            if ($item['from'] == $parent) {
                $sortedList[] = $item;
                $sortedList2[] = $item;
                $sortedList[]['next'] = $this->formatTree($list, $item['to']);
            }
        }

        return $sortedList2;

//        foreach ($list as $item) {
//            if ($item['from'] == $parent) {
//                $sortedList[$item['to']] = $item;
////                $sortedList[$item['to']]['child'] = $this->formatTree($list, $item['to']);
//                $sortedList[] = $this->formatTree($list, $item['to']);
//            }
//        }
//
//        return $sortedList;
    }






//    public function parseTicket() {
//
//        $sortedDestinationData = json_decode($this->data, true);
//        array_multisort(array_column($sortedDestinationData, "to"), SORT_ASC, $sortedDestinationData);
//
//        return $sortedDestinationData;
//    }
}


