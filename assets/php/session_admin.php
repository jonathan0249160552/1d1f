<?php
session_start();

require 'auths_admin.php';

$x_user = new Authenticates();


if(!isset($_SESSION['admin'])){
    header('location:index.php');
    die;
    
// if(!isset($_SESSION['index'])){
//        header('location:admin.php');
//         die;
//     }
    
    
}


$x_user_name = $_SESSION['admin'];

$data = $x_user->currentAdmin($x_user_name);
$cid =$data['id'];
$cname= $data['full_name'];
$x_user_name= $data['user_name'];
$cemail= $data['email'];
$cpass= $data['password'];
$cphone= $data['phone'];
$created=$data['created_at'];
$x_user_profile=$data['profile_pic'];


$reg_on = date('d M Y',strtotime($created));



if(!$data){
   
    unset($_SESSION['admin']);
    header('location:index.php');
}

?>
