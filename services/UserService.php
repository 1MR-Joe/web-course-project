<?php
declare(strict_types=1);

namespace Services;

use mysqli;

class UserService {
    public function __construct(
        private readonly mysqli $conn,
    ){

    }

    public function fetchUserbyId(int $id): array {
        $query = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($this->conn, $query);


        if(! $result) {
            error_log("Database query failed: " . mysqli_error($this->conn));
            return[];
        }

        $user = mysqli_fetch_assoc($result);
        return $user;

    }     
}