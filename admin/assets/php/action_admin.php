<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



require_once 'auths_admin.php';

$admin_id = bin2hex(random_bytes(15));
$user = new Authenticates();

if (isset($_POST['action']) && $_POST['action'] == 'admin_register') {
    $name = $user->test_input($_POST['full_name']);
    $user_name = $user->test_input($_POST['user_name']);
    $email = $user->test_input($_POST['email']);
    $phone = $user->test_input($_POST['phone']);
    $password = $user->test_input($_POST['password']);
    // $hnewPass = Password_hash($password, PASSWORD_DEFAULT);
    $hpass = password_hash($password, PASSWORD_DEFAULT);
    // print_r($_POST);


    if ($user->user_admin_exist($user_name)) {

        echo $user->showMessage('warning', 'You can not use this user name its already taken by someone!');
    } else {
        if (

            $user->register_admin($name, $user_name, $admin_id, $email, $phone, $hpass)
        ) {

            echo $user->showMessage('success', 'Registration Successful');
            echo "login";
            $SESSION['admin'] = $user_name;
        } else {
            echo $user->showMessage('danger', 'Sorry Registration Failed, Please Try Again Later');
        }
    }
}

if (isset($_POST['action']) && $_POST['action'] == 'adminLogin') {
    $user_name = $user->test_input($_POST['user_name']);
    $pass = $user->test_input($_POST['password']);
    // print_r($_POST);
    $loggedInUser = $user->login_admin($user_name);

    if ($loggedInUser != null) {
        if (password_verify($pass, $loggedInUser['password'])) {

            echo "login";
            $_SESSION['admin'] = $user_name;
        } else {
            echo $user->showMessage('danger', 'Password is incorrect!');
        }
    } else {
        echo $user->showMessage('danger', 'User does not exist!');
    }
}
