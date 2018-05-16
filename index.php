<?php
require_once __DIR__.'/autoloader.php';

$autoloader = new Autoloader();
$autoloader->addNamespace('Common', 'common/');
$autoloader->addNamespace('Controllers', 'controllers/');
$autoloader->addNamespace('Models', 'models/');
$autoloader->register();
//////////////////////////

//
//$b = new stdClass();
//$b->id = 263;
//$b->from = 32;
//$b->to = 21;
//$b->type = 1;
//$b->train = "75A";
//$b->seat = "45B";
//
//$c = new stdClass();
//$c->id = 86;
//$c->from = 21;
//$c->to = 93;
//$c->type = 3;
//$b->busNumber = "75A";
//$c->seat = null;
//
//$a = new stdClass();
//$a->id = 26;
//$a->from = 93;
//$a->to = 452;
//$a->type = 2;
//$a->flightNumber = 'SK455';
//$a->gate = '45B';
//$a->seat = '3A';
//$a->baggageNumber = 343;
//
//$d = new stdClass();
//$d->id = 26;
//$d->from = 452;
//$d->to = 34;
//$d->type = 2;
//$d->flightNumber = 'SK22';
//$d->gate = 22;
//$d->seat = '7B';
//$d->baggageNumber = null;
//
//$test_data = json_encode([$a,$b,$c,$d]);

//$trip = new \Controllers\RoadMapController($test_data);
//$a = $trip->getSortedDestinationsList();
//$b = $trip->getNextDestination(21);
//
//var_dump($b);


if (isset($_POST['ticketData'])) {
    $test_data = $_POST['ticketData'];
    $trip = new \Controllers\RoadMapController($test_data);
    $a = $trip->getSortedDestinationsList();
    $b = $trip->getNextDestination(21);

    var_dump($b);


}
