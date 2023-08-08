<?php
// session_start();

// if (isset($_SESSION['user'])) {
// 	header('location:home.php');
// }


?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel="stylesheet" href="assets/css/style-freedom.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	
</head>

<?php  require 'nav_bar.php'?>
<!-- forms-17 -->
<section class="w3l-forms-17">
	<div id="forms-17_sur">
		<div class="wrapper">

			<div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
				<!---728x90--->

			</div>
			<div class="forms-17-top">
				<div class="bg-info p-4" >
					<div class="top p-4">
						<span class="fa fa-user"></span>
						<h4 class="text-white">Create new admin account </h4>
						<p class="text-white">Add new user</p>
					</div>

				</div>
				<div class="forms-17-form">
					<div class="form-17-tp">
						<h6>Login</h6>
						<form action="#c" method="post" id="AdminLoginForm" class="signin-form">
                        <div class="form-input">
								<input type="text" name="full_name" placeholder="Full name" required />
							</div>
							<div class="form-input">
								<input type="text" name="user_name" placeholder="Your user name" required />
							</div>

                            <div class="form-input">
								<input type="email" name="email" placeholder="Email" required />
							</div>

							<div class="form-input">
								<input type="number" name="phone" placeholder="Phone" required />
							</div>

							<div class="form-input">
									<input type="password" id="password" name="password" placeholder="Create password" required />
								</div>
								<div class="form-input">
									<input type="password" id="confirmPassword" placeholder="Confirm password" required />
								</div>
						
							<div id="loginAlert"></div>
							<div class="registerAlert"></div>
							<div class="align-left-right">
							
								<!-- <button  >login</button> -->
                                <input type="submit" class="btn-lg btn bg-success text-white" id="logInButton" value="Create">
							
							</div>
							
						</form>
					</div>
				</div>
			</div>
		
		</div>
	</div>
</section>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script>
	//login ajax request

	// Register Ajax request   
	$("#logInButton").click(function(e) {
			if ($("#AdminLoginForm")[0].checkValidity()) {
				e.preventDefault();
				$("#logInButton").val('Please Wait...');
				if ($("#password").val() != $("#confirmPassword").val()) {
					$('.myAlert').show();
					setTimeout(function() {
						$('.myAlert').fadeOut();;
					}, 3000);
					$("#passError").html('* Password did not matched!');
					$("#logInButton").val('Sign Up');
				} else {
					$("#passError").text(' ');
					$.ajax({
						url: 'assets/php/action_admin.php ',
						method: 'post',
						data: $("#AdminLoginForm").serialize() + '&action=admin_register',
						success: function(response) {
								console.log(response);
								$(".registerAlert").html(response);
							$("#logInButton").val('Create');
				

						}
					});
				}
			}
		});


</script>