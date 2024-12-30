<?php
declare(strict_types=1);

namespace Services;

use mysqli;

class UserService {
    public function __construct(
        private readonly mysqli $conn,
    ){

    }

    public function fetchById(int $id): array {
        $query = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($this->conn, $query);


        if(! $result) {
            error_log("Database query failed: " . mysqli_error($this->conn));
            return[];
        }

        $user = mysqli_fetch_assoc($result);
        return $user;

    }     

    public function fetchByEmail(string $email): array {
        $query = "SELECT * FROM users WHERE email = '$email'";

        $user = mysqli_query($this->conn, $query);

        if(! $user) {
            error_log("Database query failed: " . mysqli_error($this->conn));
            return[];
        }

        if(mysqli_num_rows($user) === 0) {
            return ['email' => 'user not found'];
        }

        $user = mysqli_fetch_assoc($user);
        return $user;
    }
}