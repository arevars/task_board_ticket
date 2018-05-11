<?php

class Transport {
    
    const TRANSPORT_TYPE_TRAIN = 1;
    const TRANSPORT_TYPE_AIRPLANE = 2;
    const TRANSPORT_TYPE_BUS = 3;
    
    public static function getTransport($type=null) {       
        $trasportTypes = [
            1 => 'train',
            2 => 'airplane',
            3 => 'bus'
        ];
        
        return (!empty($type)) ? $trasportTypes[$type] : $trasportTypes;
    }
}