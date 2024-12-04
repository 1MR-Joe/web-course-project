<?php
declare(strict_types=1);

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require __DIR__ . '/../bootstrap.php';

// app creation and configuration
$app = AppFactory::create();

// adding twig middleware to the app
$twig = Twig::create(VIEWS_PATH, ['cache' => false]);
$app->add(TwigMiddleware::create($app, $twig));

// attaching routes to the app object
$routes = require __DIR__ . '/../configs/routes/web.php';
$routes($app);

$app->run();