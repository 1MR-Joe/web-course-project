<?php
declare(strict_types=1);

namespace Services;

use mysqli;

class CategoryService {
    public function __construct(
        private readonly mysqli $conn,
    ) {
    }

    public function fetchAll(): array {
        $query = "SELECT * FROM categories";
        $result = mysqli_query($this->conn, $query);

        if(! $result) {
            error_log("Database query failed: " . mysqli_error($this->conn));
            return [];
        }

        $categories = [];
        while($row = mysqli_fetch_assoc($result)) {
            $categories[] = $row;
        }

        // error_log(print_r($products, true));
        return $categories;
    }
}