<?php
declare(strict_types=1);

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

return function(App $app) {

    $app->get('/', function (Request $request, Response $response) {
        $htmlContent = file_get_contents(VIEWS_PATH . '/home.html');
        $response->getBody()->write($htmlContent);
        return $response;
    });

    $app->get('/products', function (Request $request, Response $response) {
        $htmlContent = file_get_contents(VIEWS_PATH . '/products.html');
        $response->getBody()->write($htmlContent);
        return $response;
    });

};