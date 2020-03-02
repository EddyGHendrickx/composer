<?php
declare(strict_types = 1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;
use Monolog\Handler\BrowserConsoleHandler;

// Create the logger
$logger = new Logger('my_logger');
// Now add some handlers
$logger->pushHandler(new StreamHandler(__DIR__.'/debug.log', Logger::DEBUG));
$logger->pushHandler(new StreamHandler(__DIR__.'/info.log', Logger::INFO));
$logger->pushHandler(new StreamHandler(__DIR__.'/info.log', Logger::INFO));
$logger->pushHandler(new StreamHandler(__DIR__.'/info.log', Logger::INFO));

$logger->pushHandler(new FirePHPHandler());

// You can now use your logger
$logger->info('My logger is now ready');

require 'buttons.html';

