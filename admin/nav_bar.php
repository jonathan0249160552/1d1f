<?php
// session_start();
require 'assets/php/session_admin.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="assets/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/css/sweetalert.min.css">
  <script src="assets/js/sweetalert2.min.js"></script>
  <style>
    /* Style for side navigation */
    .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #222;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 18px;
      color: #fff;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    /* Style for open/close button */
    #openBtn {
      font-size: 30px;
      position: fixed;
      z-index: 1;
      top: 20px;
      left: 20px;
      background-color: #222;
      color: #fff;
      border: none;
      cursor: pointer;
      padding: 10px;
    }

    #openBtn:hover {
      color: #f1f1f1;
    }

    /* Add a black background color to the top navigation */
    .topnav {
      background-color: #333;
      overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    /* Add a color to the active/current link */
    .topnav a.active {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>

<body>
  <div class="topnav" class="justify-content-between">
    <a onclick="openNav()" href="#nav"><i class="fa fa-bars "></i></a>
    <a class="active" href="home.php">Dashboard</a>
    <a href="post_gallery.php">Post Gallery</a>
    <a href="applications.php">Jop Application</a>
    <a href="contact.php">Contacts</a>
    <a href="create_account.php" class="link-nav">Add User</a>
    <a href="admin_logout.php" class="link-nav">Logout</a>
  </div>
  <!-- Open button -->


  <!-- Side navigation -->
  <div id="mySidenav" class="sidenav">
    <a class="active" href="dashboard.php">Dashboard</a>
    <a href="users.php">Users</a>
    <a href="customers.php">Customers</a>
    <a href="all_exhibitions.php">All exhibitions</a>
    <a href="exhibitions.php">Post exhibitions</a>
    <a href="all_products.php">All products</a>
    <a href="post_products.php">Post products</a>
    <a href="post_job.php">Post Jobs</a>
    <a href="all_jobs.php">All Jobs</a>
    <a href="all_gallery.php">All Galleries</a>
    <a href="post_gallery.php">Post Gallery</a>
    <a href="applications.php">Jop Applications</a>
    <a href="contact.php">Contacts</a>
    <a href="Blog.php">Blog</a>
    <a href="all_posts.php">All blog post</a>
    <a href="Charts.php">Charts</a>
    <a href="account.php">Account</a>
    <a href="#">Logout</a>
    <a href="javascript:void(0);" class="closebtn" onclick="closeNav()">&times;</a>
  </div>

  <script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/datatables/datatables.min.js"></script>
  <script>
    // Open side navigation
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    // Close side navigation
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>
</body>

</html>