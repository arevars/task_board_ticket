<?php

namespace common;


use models\TicketAirplane;
use models\TicketBus;
use models\TicketTrain;

class Transport {

    const TRANSPORT_TYPE_TRAIN = 1;
    const TRANSPORT_TYPE_AIRPLANE = 2;
    const TRANSPORT_TYPE_BUS = 3;


//    public function getTransport($type) {
//        switch($type) {
//            case 1:
//                return new TicketTrain();
//                break;
//            case 2:
//                return new TicketAirplane();
//                break;
//            case 3:
//                return new TicketBus();
//                break;
//        }
//
//        return false;
//    }
}


