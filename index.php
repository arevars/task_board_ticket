<?php
require_once __DIR__.'/autoloader.php';

$autoloader = new Autoloader();
$autoloader->addNamespace('Common', 'common/');
$autoloader->addNamespace('Controllers', 'controllers/');
$autoloader->addNamespace('Models', 'models/');
$autoloader->addNamespace('Utils', 'utils/');
$autoloader->register();
//////////////////////////

if (isset($_POST['ticketData'])) {

    $jsonData = $_POST['ticketData'];
    $trip = new \Controllers\RoadMapController();
    $a = $trip->getSortedDestinationsList($jsonData);

    var_dump($a);
}













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
