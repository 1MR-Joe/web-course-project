<?php

declare(strict_types=1);

use Dotenv\Dotenv;
use Psr\Container\ContainerInterface;

// load packages downloaded by composer
require __DIR__ . '/vendor/autoload.php';

// load path constants
require __DIR__ . '/configs/path_constants.php';

// load environment variables from .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// import container
// the container holds the whole application configuration
/** @var ContainerInterface $container */
$container = require CONFIGS_PATH . '/container/container.php';
return $container;