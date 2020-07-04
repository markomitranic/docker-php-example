<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controller;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

$logger = new Logger('stdout', [new StreamHandler('php://stdout', Logger::WARNING)]);
$controller = new Controller($logger);

$controller->index();
