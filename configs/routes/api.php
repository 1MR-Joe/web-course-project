<?php
declare(strict_types=1);

use App\Controllers\ProductController;
use Slim\App;
use Slim\Routing\RouteCollectorProxy;

return function (App $app) {
    $app->group('/api', function (RouteCollectorProxy $group) {
        $group->get('/products', [ProductController::class, 'fetchAll']);
    });
};