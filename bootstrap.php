<?php

declare(strict_types=1);

use Dotenv\Dotenv;

// load packages downloaded by composer
require __DIR__ . '/vendor/autoload.php';

// load path constants
require __DIR__ . '/configs/path_constants.php';

// load environment variables from .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// TODO: configure the DI container
// TODO: move app object configuration to the container
// TODO: return the container from this file
// TODO: document the process