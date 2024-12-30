<?php
declare(strict_types=1);

namespace Services;

use mysqli;
use Exception;

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
    

    public function updateUser(array $data): array {
        
        $user_id = $_SESSION['user_id'];
        $username = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];

        // TODO: add the weight field
        // validation
        $query = "UPDATE users SET name = '$username', email = '$email', phone = '$phone' WHERE id = $user_id";
        $result = mysqli_query($this->conn, $query);

        if (!$result) {
            error_log("Database update failed: " . mysqli_error($this->conn));
            return [];
        }

        return $data;
    } 
}