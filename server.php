<?php

session_start();

$name = "";
$email = "";
$error = array();
$db = mysqli_connect('127.0.0.1', 'root', '', 'testproject') or die('could not connect to database');


////$name = mysqli_real_escape_string($db, $_POST['name']);
//$email = mysqli_real_escape_string($db, $_POST['email']);
////$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
////$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
//
////if(empty($name)) {array_push($error, "Name is required");}
////if(empty($email)) {array_push($error, "Email is required");}
////if(empty($password_1)) {array_push($error, "Password is required");}
////if ($password_1 != $password_2) {array_push($error, "Password do not match");}
//
//
//$name_check_query = "SELECT * FROM users WHERE name = '$name' or email = '$email' LIMIT 1";
//
//$result = mysqli_query($db, $name_check_query);
//$user = mysqli_fetch_assoc($result);
if (isset($_POST['reg_user'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

if(empty($name)) {array_push($error, "Name is required");}
if(empty($email)) {array_push($error, "Email is required");}
if(empty($password_1)) {array_push($error, "Password is required");}
if ($password_1 != $password_2) {array_push($error, "Password do not match");}


    $name_check_query = "SELECT * FROM users WHERE name = '$name' or email = '$email' LIMIT 1";

    $result = mysqli_query($db, $name_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['name'] === $name) {
            array_push($error, "Name already exists");
        }
        if ($user['email'] === $email) {
            array_push($error, "Email already exists");
        }
    }

    if (count($error) == 0) {
        $password = md5($password_1);
        $query = "INSERT INTO users(name, email, password) VALUE ('$name','$email','$password')";
        mysqli_query($db, $query);
        $_SESSION['name'] = $name;
        $_SESSION['success'] = 'You are now logged in!';
        header('location: index.php');
    }
}


if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if(empty($email)) {array_push($error, "Email is required");}
    if(empty($password)) {array_push($error, "Password is required");}
    if (empty($email)) {
        array_push($error,"Email is required");
    }
    if (empty($password)) {
        array_push($error,"Password is required");
    }
    if (count($error)== 0) {

        $password = md5($password);
        $query = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
        $result = mysqli_query($db, $query);

        if(mysqli_num_rows($result)) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "Logged is success";
//            print_r($_SESSION['email']); exit();

            header('location: index.php');
        }
        else {
            array_push($error, 'Wrong email/password combination. Please try again.');
        }
    }
}