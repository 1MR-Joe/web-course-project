<?php
declare(strict_types=1);

use Services\CategoryService;
use Services\ProductService;
use Services\CartItemService;
use Services\EnrollmentService;
use Services\PlanService;
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
                        header('Content-Type: application/json', true, 200);
                        return json_encode(['message' => 'added to cart successfully']);
                    } catch (mysqli_sql_exception $e) {
                        header('Content-Type: application/json', true, 400);
                        return json_encode(['error' => 'Item already in cart!']);
                    }

                } else {
                    if($_GET['product_id']) {
                        // specific cart item id, will delete that cart item
                        try{
                            $cartItemService = new CartItemService($conn);
                            $cartItems = $cartItemService->deleteCartItem((int) $_SESSION['user_id'], (int) $_GET['product_id']);

                            header('Content-Type: application/json', true, 200);
                            return json_encode(['message' => 'removed from cart successfully']);

                        } catch(Exception $e) {
                            header('Content-Type: application/json', true, 400);
                            return json_encode(['error' => 'Error Removing product!']);
    
                        }
                    } else {
                        // no id specified, will fetch all items
                        $cartItemService = new CartItemService($conn);
                        $cartItems = $cartItemService->fetchByUserId((int) $_SESSION['user_id']);
                        header('Content-Type: application/json', true, 200);
                        return json_encode($cartItems);
                    }
                }
            } else {
                header('Content-Type: application/json', true, 400);
                return json_encode(['error' => 'please log in']);
            }
        break;
        case '/membership':
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                if(isset($_SESSION['user_id'])) {
                    $planId = $_POST['plan_id'];
                    if(is_null($planId)) {
                        header('Content-Type: application/json', true, 400);
                        return json_encode(['error' => 'please provide plan Id']);
                    }

                    $userId = $_SESSION['user_id'];

                    try {
                        $enrollmentService = new EnrollmentService($conn);
                        $enrollmentService->createEnrollment((int) $userId, (int) $planId);
                        
                        header('Content-Type: application/json', true, 201);
                        return json_encode(['message' => 'enrollment created!']);

                    } catch(mysqli_sql_exception $e) {
                        header('Content-Type: application/json', true, 400);
                        return json_encode(['error' => 'error creating enrollment']);
                    }

                } else {
                    header('Content-Type: application/json', true, 400);
                    return json_encode(['error' => 'please log in']);    
                }
            } else {
                header('Content-Type: application/json', true, 404);
                return json_encode(['error' => '404 Not Found']);
            }
        break;
        default:
            header('Content-Type: application/json', true, 404);
            return json_encode(['error' => '404 Not Found']);
    }
};