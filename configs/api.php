<?php
declare(strict_types=1);

use Services\CategoryService;
use Services\ProductService;

return function (string $pattern, mysqli $conn) {
    switch ($pattern) {
        case '/products':
            $productService = new ProductService($conn);
            $products = $productService->fetchAll();
            header('Content-Type: application/json', true, 200);
            return json_encode($products);
        break;
        case '/categories':
            $categoryService = new CategoryService($conn);
            $categories = $categoryService->fetchAll();
            header('Content-Type: application/json', true, 200);
            return json_encode($categories);
        break;
        default:
            header('Content-Type: application/json', true, 404);
            return json_encode(['error' => '404 Not Found']);
    }
};