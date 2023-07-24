<?php
session_start();

require 'auths.php';

$cuser = new Authenticates();


if(!isset($_SESSION['user'])){
    header('location:index.php');
    die;
    
if(!isset($_SESSION['index'])){
       header('location:index.php');
        die;
    }
    
    
}


$cuser_name = $_SESSION['user'];

$data = $cuser->currentUsers($cuser_name);
$cid =$data['id'];
$cname= $data['full_name'];
$cuser_name= $data['user_name'];
$cemail= $data['email'];
$cpass= $data['password'];
$cphone= $data['phone'];
$created=$data['created_at'];
$cuser_profile=$data['profile_pic'];


$reg_on = date('d M Y',strtotime($created));



if(!$data){
   
    unset($_SESSION['user']);
    header('location:signup.php');
}

?>
