<?php
session_start();

if (isset($_SESSION['customer'])) {
	header('location:home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel="stylesheet" href="assets/css/style-freedom.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	
</head>


<!-- forms-17 -->
<section class="w3l-forms-17">
	<div id="forms-17_sur">
		<div class="wrapper">

			<div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
				<!---728x90--->

			</div>
			<div class="forms-17-top">
				<div class="forms-17-text">
					<div class="top">
						<span class="fa fa-user"></span>
						<h4>Hey, welcome back</h4>
						<p>Login to your account now</p>
					</div>

				</div>
				<div class="forms-17-form">
					<div class="form-17-tp">
						<h6>Login</h6>
						<form action="#" method="post" id="loginForm" class="signin-form">
							<div class="form-input">
								<input type="text" name="user_name" placeholder="Your user name" required />
							</div>
							<div class="form-input">
								<input type="password" name="login_password" placeholder="Your password" required />
							</div>
							<div class="forget">
								<a href="#url" class="forget-pas">Forgot password?</a>
							</div>
							<div id="loginAlert"></div>
							<div class="align-left-right">
								<button class="btn loginBtn" id="">login</button>
								<!-- <ul class="login-social">
										<li><a href="#" class="facebook"><span class="fa fa-facebook-square"></span></a>
										</li>
										<li><a href="#" class="twitter"><span class="fa fa-twitter-square"></span></a>
										</li>
										<li><a href="#" class="instagram"><span class="fa fa-instagram"></span></a></li>
									</ul> -->
							</div>
							<div class="bottom-login">
								<p>Not a customer? <a href="signup.php">Sign Up</a></p>
								<p>Are you an admin? <a href="admin/index.php">Admin</a></p>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- <div class="btn btn-home text-center">
					<a href="index.php" class="">Back to home <span class="fa fa-long-arrow-right"></a>
				</div> -->
		</div>
	</div>
</section>
<script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
<!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script>
	//login ajax request

	$(".loginBtn").click(function(e) {
		if ($("#loginForm")[0].checkValidity()) {
			e.preventDefault();

			$(".loginBtn").val('Please Wait...');
			$.ajax({
				url: 'assets/php/action.php',
				method: 'post',
				data: $("#loginForm").serialize() + '&action=logging',
				success: function(response) {
					// console.log(response);
					$(".loginBtn").val('Sign In');
					if (response === 'login') {
						window.location = 'home.php';
						// window.location.reload()
					
					} else {
						$("#loginAlert").html(response);

					}
				}
			});
		}
	});


	// // Register Ajax request   
	// $("#signUpBtn").click(function(e) {
	// 		if ($("#createAccountForm")[0].checkValidity()) {
	// 			e.preventDefault();
	// 			$("#signUpBtn").val('Please Wait...');
	// 			if ($("#password").val() != $("#confirmPassword").val()) {
	// 				$('.myAlert').show();
	// 				setTimeout(function() {
	// 					$('.myAlert').fadeOut();;
	// 				}, 3000);
	// 				$("#passError").html('* Password did not matched!');
	// 				$("#signUpBtn").val('Sign Up');
	// 			} else {
	// 				$("#passError").text(' ');
	// 				$.ajax({
	// 					url: 'assets/php/action.php ',
	// 					method: 'post',
	// 					data: $("#createAccountForm").serialize() + '&action=customer_register',
	// 					success: function(response) {
	// 							console.log(response);
	// 							$("#registerAlert").html(response);
	// 						$("#signUpBtn").val('Create');
				

	// 					}
	// 				});
	// 			}
	// 		}
	// 	});
</script>
