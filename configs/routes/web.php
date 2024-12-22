<?php
declare(strict_types=1);

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\ProfileController;
use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

return function(App $app) {
    $container = $app->getContainer();
    $container->get(Twig::class);
    // TODO: add DB connection to container
    // TODO: abstract EntityManager (DB) access to service layer
    // TODO: update anchors to reference routes rather than files

    $app->get('/', [HomeController::class, 'index']);

    $app->get('/products', [ProductController::class, 'index']);

    $app->get('/profile', [ProfileController::class, 'index']);

};