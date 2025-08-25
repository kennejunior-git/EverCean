<?php
session_start();
require_once 'config.php';

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $checkEmail = $conn->query("SELECT email FROM users WHERE email= '$email'");
    if($checkEmail->num_rows > 0){
        $_SESSION['register_error'] = 'Email is already registered!';
        $_SESSION['active_form'] = 'register';
    }else{
            $lat = $_POST['location_lat'] ?? 0;
            $lng = $_POST['location_lng'] ?? 0;

           $conn->query("INSERT INTO users (name, email, password, role, lacation_lat, location_lng) 
                        VALUES ('$name','$email','$password','$role','$lat','$lng')");

        
    }

    header("Location: login.php");
    exit();
}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email= '$email'");
    if($result->num_rows >0){
        $user= $result->fetch_assoc();

        if(password_verify($password, $user['password'])){
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            
            if($user['role'] === 'client'){
                    header("Location: dashboard.php");
                }else{
                header("Location: index.php");
            }
               exit();   
        }
    }

    $_SESSION['login_error'] = 'Incorect email or password';
    $_SESSION['active_form'] = 'Login';

    header("Location: login.php");
    exit();
}
?>