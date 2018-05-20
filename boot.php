<?php
require_once __DIR__.'/autoloader.php';

$autoloader = new Autoloader();
$autoloader->addNamespace('Common', 'src/common/');
$autoloader->addNamespace('Controllers', 'src/controllers/');
$autoloader->addNamespace('Models', 'src/models/');
//$autoloader->addNamespace('Tests', 'tests/');

$autoloader->register();