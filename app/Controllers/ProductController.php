<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Entities\Product;
use App\Services\ProductService;
use Doctrine\ORM\EntityManager;
use Slim\Views\Twig;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ProductController
{
    public function __construct(
        private readonly Twig $twig,
        private readonly ProductService $productService,
    ){
    }

    public function index(Request $request, Response $response) {
        return $this->twig->render($response, '/views/products.twig');
    }

    public function fetchAll(Request $request, Response $response) {
        $products = $this->productService->fetchAll();

        $response->getBody()->write(json_encode($products));
        return $response->withHeader('Content-Type', 'application/json');
    }
}