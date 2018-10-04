<?php

use Vagovszky\Skeleton\Skeleton;

use Zend\Console\Console;
use ZF\Console\Application;
use ZF\Console\Dispatcher;

require_once __DIR__ . '/vendor/autoload.php';

define('VERSION', '0.0.0');

$dispatcher = new Dispatcher();
$dispatcher->map('hello-world', new Skeleton());

$application = new Application(
    'Skeleton',
    VERSION,
    include __DIR__ . '/config/routes.php',
    Console::getInstance(),
    $dispatcher
);
$exit = $application->run();
exit($exit);