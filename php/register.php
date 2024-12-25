<?php
//add user to database
include "../php/config.php";

if(isset($_POST['submit'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $passwordConfirmation = $_POST['Confirm'];

    /*ToDO add the weight field*/ 

    if($password == $passwordConfirmation) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, email, password, gender, phone, weight) values ('$username', '$email', '$password', '$gender', '$phone', 75.0)";
        
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo "<script>alert('Failed to register');</script>";
        }else{
            echo "<script>alert('Successfully registered');</script>";
            header("Location: ../views/index.php");
        }
    }else{
        echo "Password confirmation failed";
    }
}else{
    echo "Error: Invalid request method. Please use the POST method to submit the form.";
}
