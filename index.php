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
    $trip = new \Controllers\RoadMapController($jsonData);
    $a = $trip->getSortedDestinationsList();
    $b = $trip->getNextDestination();

    var_dump($b);
}
