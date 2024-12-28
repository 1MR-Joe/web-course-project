<?php
declare(strict_types=1);

namespace Services;

use mysqli;
use Exception;

class AuthService {
    public function __construct(
        private readonly mysqli $conn,
    ){
    }

    public function register(array $data): array {
        $username = $data['name'];
        $email = $data['email'];
        $gender = $data['gender'];
        $phone = $data['phone'];
        $password = $data['password'];
        $passwordConfirmation = $data['Confirm'];

        // TODO: add the weight field
        // validation
        $errors = [];

        if($password !== $passwordConfirmation) {
            $errors['Confirm'] = 'password and confirmation must be the same';
        }

        // retrieve all emails
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($this->conn, $query);
        
        if(mysqli_num_rows($result) > 0) {
            $errors['email'] = 'used email already exists';
        }

        if(sizeof($errors) === 0) {
            $query = "INSERT INTO users (name, email, password, gender, phone, weight) values ('$username', '$email', '$password', '$gender', '$phone', 75.0)";
            $result = mysqli_query($this->conn, $query);

            if(! $query) {
                $error_message = 'Database insert error: ' . mysqli_error($this->conn);
                throw new Exception($error_message);
            }
        }

        return $errors;
    }

    public function login(array $data) : array{
        $email = $data['email'];
        $password = $data['password'];

        $query = "SELECT * FROM users WHERE email = '$email'";

        $user = mysqli_query($this->conn, $query);

        if(mysqli_num_rows($user) === 0) {
            return ['email' => 'user not found'];
        }

        $user = mysqli_fetch_assoc($user);

        if(password_verify($password, $user['password'])) {
            return [];
        }else{
            return ['password' => 'wrong password'];
        }

    }
}