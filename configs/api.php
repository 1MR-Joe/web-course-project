<?php
declare(strict_types=1);

use Services\CategoryService;
use Services\ProductService;
use Services\CartItemService;
use Services\UserService;

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
        case '/cart':

            if(isset($_SESSION['user_id'])) {
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $userId = $_SESSION['user_id'];
                    error_log(print_r($_POST, true));
                    $quantity = $_POST['quantity'] ?? null;
                    $productId = $_POST['product_id'] ?? null;
                    
                    if (is_null($quantity) || is_null($productId)) {
                        header('Content-Type: application/json', true, 400);
                        return json_encode(['error' => 'please provide quantity and product Id']);
                    }

                    try {
                        $cartItemService = new CartItemService($conn);
                        $cartItemService->createCartItem((int) $productId, (int) $quantity, (int) $userId);
                        header('Content-Type: application/json', true, 201);
                        return json_encode(['message' => 'Cart item created']);
                    } catch (mysqli_sql_exception $e) {
                        header('Content-Type: application/json', true, 400);
                        return json_encode(['error' => 'Item already in cart!']);
                    }

                } else {
                    $cartItemService = new CartItemService($conn);
                    $cartItems = $cartItemService->fetchByUserId((int) $_SESSION['user_id']);
                    header('Content-Type: application/json', true, 200);
                    return json_encode($cartItems);
                }
            } else {
                header('Content-Type: application/json', true, 400);
                return json_encode(['error' => 'please log in']);
            }
        default:
            header('Content-Type: application/json', true, 404);
            return json_encode(['error' => '404 Not Found']);
    }
};