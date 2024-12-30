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

            $userId = (int) $_GET['user_id'];
            if($userId){
                $cartItemService = new CartItemService($conn);
                $cartItems = $cartItemService->fetchByUserId($userId);
                header('Content-Type: application/json', true, 200);
                return json_encode($cartItems);

            }else if($_POST['user_id'] && $_POST['product_id'] && $_POST['quantity']){
                $userId = $_POST['user_id'];
                $productId = $_POST['product_id'];
                $quantity = $_POST['quantity'];
                $cartItemService = new CartItemService($conn);
                $cartItemService->createCartItem($userId, $productId, $quantity);
                header('Content-Type: application/json', true, 201);
                return json_encode(['message' => 'Cart item created']);
            }else{
                header('Content-Type: application/json', true, 400);
                return json_encode(['error' => 'Bad Request']);
            }
        default:
            header('Content-Type: application/json', true, 404);
            return json_encode(['error' => '404 Not Found']);
    }
};