<?php
declare(strict_types=1);

use Psr\Container\ContainerInterface;
use Slim\App;

/** @var ContainerInterface $container */
$container = require __DIR__ . '/../bootstrap.php';

// get app from container
// the container has all the app configurations
$app = $container->get(App::class);

// run app
$app->run();

// TODO: update anchors to reference routes rather than files
// TODO: instead of CMS use API to create entities