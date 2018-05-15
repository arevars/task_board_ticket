<?php
require_once __DIR__.'/autoloader.php';

$autoloader = new Autoloader();
$autoloader->addNamespace('Common', 'common/');
$autoloader->addNamespace('Controllers', 'controllers/');
$autoloader->addNamespace('Models', 'models/');
$autoloader->addNamespace('Utils', 'utils/');
$autoloader->register();
//////////////////////////
//
//if (isset($_POST['ticketData'])) {
//
//    $jsonData = $_POST['ticketData'];
//    $trip = new \Controllers\RoadMapController();
//    $a = $trip->getSortedDestinationsList($jsonData);
//
//    var_dump($a);
//}


$testData = json_encode([
    [
        'id' => 26,
        'from' => 93,
        'to' => 19,
        'type' => 3,
        'baggage' => 29,
        'seat' => "15A",
    ],
    [
        'id' => 263,
        'from' => 32,
        'to' => 21,
        'type' => 2,
        'baggage' => null,
        'seat' => "56B",
    ],
    [
        'id' => 9852,
        'from' => 21,
        'to' => 93,
        'type' => 2,
        'baggage' => null,
        'seat' => null,
    ],
    [
        'id' => 3569,
        'from' => 6,
        'to' => 32,
        'type' => 1,
        'baggage' => 344,
        'seat' => "45A",
    ],
    [
        'id' => 598,
        'from' => 19,
        'to' => 65,
        'type' => 3,
        'baggage' => null,
        'seat' => "23C",
    ], [
        'id' => 1254,
        'from' => 65,
        'to' => 39,
        'type' => 1,
        'baggage' => null,
        'seat' => null,
    ]
], JSON_FORCE_OBJECT);

$trip = new \Controllers\RoadMapController();
$a = $trip->getSortedDestinationsList($testData);

var_dump($a);










//
//
//
//$a = new \models\TicketAirplane();
//$a->setData('flightNumber', 'SK455');
//$a->setData('from', 'SK455');
//$a->setData('to', 'SK455');
//
//$a->getData();
//
//var_dump($a);
//



//
//if (isset($_POST['ticketData'])) {
//
//    $jsonData = $_POST['ticketData'];
//    $a = new \models\TicketParser($jsonData);
//
//
//
//    $parsedData = $a->parseTicket();
//
//    echo '<pre>';
//    print_r($parsedData); exit;
//
//    return $parsedData;
//} else {
//    return 'no value sent';
//}
