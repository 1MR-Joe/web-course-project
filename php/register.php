<?php
declare(strict_types=1);
// TODO: convert to AuthService.php class and move all code here to register function
$errors = [];

if(isset($_POST['submit'])) {
    // TODO: validate all values are not null
    $username = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $passwordConfirmation = $_POST['Confirm'];

    // TODO: add the weight field

    if($password == $passwordConfirmation) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, email, password, gender, phone, weight) values ('$username', '$email', '$password', '$gender', '$phone', 75.0)";
        
        $result = mysqli_query($conn, $sql);
        if(!$result){
            $errors['db'] = 'registration failed';
        }
    }else{
        $errors['Confirm'] = 'password and confirmation are different';
    }
}

return $errors;