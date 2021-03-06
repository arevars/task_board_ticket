<?php

namespace Models;

class TicketManager {

    public function __construct($data) {
        $this->data = json_decode($data,true);
    }

    public function getSortedList() {

        // get from and to values to different arrays
        $fromList = array_column($this->data, 'from');
        $toList = array_column($this->data,'to');

        // get first place id by check difference of arrays
        $first = current(array_diff($fromList,$toList));

        // build tree with start point till end point
        $tree = $this->formatTree($this->data,$first);

        // flattening tree
        $it = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($tree));
        $i = 0;

        foreach($it as $key => $v) {
            if($key =='id') {
                $i++;
            }
            $sortedList[$i][$key] = $v;
        }
       //

        return $this->getTicketAsObject($sortedList);
    }

    private function getTicketAsObject($sortedList) {

        foreach($sortedList as $value) {
            $ticket = $this->getTicketByType($value['type']);
            foreach($value as $key=>$attributes) {
                $ticket->setData($key,$attributes);
            }

            $objectList[] = $ticket;
        }
        return $objectList;
    }

    private function formatTree($list, $parent) {
        $sortedList = [];
        foreach ($list as $item) {
            if ($item['from'] == $parent) {
                $sortedList[] = $item;
                $sortedList[] = $this->formatTree($list, $item['to']);
            }
        }
        return $sortedList;
    }

    /**
     * @return mixed
     */
    public static function getType($type=null) {
        $trasportTypes = [
            1 => 'train',
            2 => 'airplane',
            3 => 'bus'
        ];

        return (!empty($type)) ? $trasportTypes[$type] : $trasportTypes;
    }

    public function getTicketByType($type) {
        switch($type) {
            case 1:
                return new TicketTrain();
                break;
            case 2:
                return new TicketAirplane();
                break;
            case 3:
                return new TicketBus();
                break;
        }

        return false;
    }
}


