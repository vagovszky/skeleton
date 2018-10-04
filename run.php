<?php

use Vagovszky\Skeleton\Skeleton;

use Zend\Console\Console;
use ZF\Console\Application;
use ZF\Console\Dispatcher;

require_once __DIR__ . '/vendor/autoload.php';

define('VERSION', '0.0.0');

$dispatcher = new Dispatcher();
$dispatcher->map('hello-world', new Skeleton());

$routes = array(
    array(
        'name'  => 'hello-world', 
        'description' => 'Prints hello world.',
        'short_description' => 'Prints hello world.'
    )
);

$application = new Application(
    'Skeleton',
    VERSION,
    $routes,
    Console::getInstance(),
    $dispatcher
);
$exit = $application->run();
exit($exit);