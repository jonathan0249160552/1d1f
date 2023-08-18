<?php
session_start();

require 'auths_admin.php';

$x_user = new Authenticates();


if(!isset($_SESSION['admin'])){
    header('location:index.php');
    die;
    
if(!isset($_SESSION['index'])){
       header('location:admin.php');
        die;
    }
    
    
}


$x_user_name = $_SESSION['admin'];

$data = $x_user->currentAdmin($x_user_name);
$cid =$data['id'];
$admin_id =$data['admin_id'];
$x_name= $data['full_name'];
$x_user_name= $data['user_name'];
$x_email= $data['email'];
$x_pass= $data['password'];
$x_phone= $data['phone'];
$created=$data['created_on'];
// $x_user_profile=$data['profile_pic'];


$reg_on = date('d M Y',strtotime($created));



if(!$data){
   
    unset($_SESSION['admin']);
    header('location:index.php');
}

?>
