<?php
declare(strict_types=1);

namespace Services;

use mysqli;

class ProductService {
    public function __construct(
        private readonly mysqli $conn,
    ) {
    }

    public function fetchAll(): array {
        $query = "SELECT * FROM products";
        $result = mysqli_query($this->conn, $query);

        if(! $result) {
            error_log("Database query failed: " . mysqli_error($this->conn));
            return [];
        }

        $products = [];
        while($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }

        // error_log(print_r($products, true));
        return $products;
    }
}