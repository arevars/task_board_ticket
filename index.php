<?php
require_once __DIR__.'/autoloader.php';

$autoloader = new Autoloader();
$autoloader->addNamespace('controllers', 'controllers/');
$autoloader->addNamespace('models', 'models/');
$autoloader->register();
//////////////////////////


if (isset($_POST['ticketData'])) {
    $jsonData = $_POST['ticketData'];

    $parsedData = (new controllers\RoadMapController())->parseTicket($jsonData);

    echo '<pre>';
    print_r($parsedData); exit;

    return $parsedData;
} else {
    return 'no value sent';
}
