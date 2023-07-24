<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



require_once 'auths.php';
// $user_id_gen = bin2hex(random_bytes(10));
$user = new Authenticates();
if (isset($_POST['action']) && $_POST['action'] == 'customer_register') {
    $name = $user->test_input($_POST['full_name']);
    $user_name = $user->test_input($_POST['user_name']);
    $email = $user->test_input($_POST['email']);
    $phone = $user->test_input($_POST['phone']);
    $password = $user->test_input($_POST['password']);
    // $hnewPass = Password_hash($password, PASSWORD_DEFAULT);
    $hpass = password_hash($password, PASSWORD_DEFAULT);
    print_r($_POST);


    if ($user->user_exist($user_name)) {

        echo $user->showMessage('warning', 'You can not use this user name its already taken by someone!');
    } else {
        if (

            $user->register_user($name, $user_name, $email, $phone, $hpass)
        ) {

            echo $user->showMessage('success', 'Registration Successful');

            $SESSION['user'] = $user_name;
        } else {
            echo $user->showMessage('danger', 'Sorry Registration Failed, Please Try Again Later');
        }
    }
}



// handle login ajax request

if (isset($_POST['action']) && $_POST['action'] == 'logging') {
    $user_name = $user->test_input($_POST['user_name']);
    $pass = $user->test_input($_POST['login_password']);
    // print_r($_POST);
    $loggedInUser = $user->login_user($user_name);

    if ($loggedInUser != null) {
        if (password_verify($pass, $loggedInUser['password'])) {

            echo "login";
            $_SESSION['user'] = $user_name;
        } else {
            echo $user->showMessage('danger', 'Password is incorrect!');
        }
    } else {
        echo $user->showMessage('danger', 'User does not exist!');
    }
}


if (isset($_POST['action']) && $_POST['action'] == 'contact') {
    $name = $user->test_input($_POST['name']);
    $email = $user->test_input($_POST['email']);
    $contact = $user->test_input($_POST['contact']);
    $subject = $user->test_input($_POST['subject']);
    $message = $user->test_input($_POST['message']);
    // print_r($_POST);
   if ( $user->contactUs($name,$email,$contact,$subject,$message)) {
   echo $user->showMessage('success','Thank you for contacting us we get back to you soon');
   } else {
   echo $user->showMessage('danger','Sorry something went wrong. Please try again later');
   }
   
}


if (isset($_FILES['cv'])) {
    $email = $user->test_input($_POST['email']);
    $name = $user->test_input($_POST['name']);
    $phone = $user->test_input($_POST['phone']);

    $file_name = ($_FILES['cv']['name']);
    $file_size = ($_FILES['cv']['size']);
    $file_tmp =  ($_FILES['cv']['tmp_name']);
    $file_type = ($_FILES['cv']['type']);
    $accept = ["pdf"];

    // print_r($_POST);
    // print_r($_FILES);
    $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    if (in_array($ext, $accept)) {

        if ($file_size <= 2000000) {

            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

            $new_file_name = uniqid() . '.' . $file_ext;

            if (move_uploaded_file($file_tmp, 'files/' . $new_file_name)) {

                $user->post_application(
                    $email,
                    $name,
                    $phone,
                    $new_file_name


                );
                echo  $user->showMessage('success', 'Application successful !');
            } else {
                echo  $user->showMessage('danger', 'File upload error');
            }
        } else {

            echo  $user->showMessage('danger', 'File should be less 2mb');
        }
    } else {

        echo   $user->showMessage('danger', 'Invalid file format');
    }
}
