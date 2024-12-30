<?php
declare(strict_types=1);

namespace Services;

use mysqli;

class CartItemService{
    public function __construct(
        private readonly mysqli $conn,
    ) {
    }
    
    public function createCartItem(int $productId, int $quantity, int|null $userId = null): bool {
        if(is_null($userId)) {
            if(is_null($_SESSION['user_id'])) {
                // user not logged in
                return false;
            } else {
                // user is logged in, we can use there
                $userId = $_SESSION['user_id'];
            }
        }

        $query = "INSERT INTO cart_items (user_id, product_id, quantity) VALUES ($userId, $productId, $quantity)";
        $result = mysqli_query($this->conn, $query);
        if(! $result) {
            error_log("Database query failed: " . mysqli_error($this->conn));
            return false;
        }

        return true;
    }


    public function deleteCartItem(int $userId, int $productId): bool {
        $query = "DELETE FROM cart_items WHERE user_id = $userId AND product_id = $productId";
        $result = mysqli_query($this->conn, $query);
        if(! $result) {
            error_log("Database query failed: " . mysqli_error($this->conn));
            return false;
        }
        return true;
    }


    public function fetchByUserId(int $userId): array {
        $query = "SELECT * FROM cart_items c JOIN products p ON c.product_id = p.id WHERE c.user_id = $userId";
        $result = mysqli_query($this->conn, $query);

        if(! $result) {
            error_log("Database query failed: " . mysqli_error($this->conn));
            return [];
        }

        $cartItems = [];
        while($row = mysqli_fetch_assoc($result)) {
            $cartItems[] = $row;
        }

        // error_log(print_r($products, true));
        return $cartItems;
    }
}
?>