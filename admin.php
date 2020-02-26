<?php 
	session_start(); 
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
<!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
			    <form class="login100-form">
			        
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<span class="login100-form-title p-b-34 p-t-27">
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</span>
			</div>
		<?php endif ?>
		
		    <div class="container-login100-form-btn">
				<h2>Admin configurations available</h2>
		    </div>
		
		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
		<div class="text-center p-t-90">
			<a class="txt1">Welcome <strong><?php echo $_SESSION['username']; ?></strong></a>
			<p></p><a class="txt1" href="index.php?logout='1'" >logout</a></p>
		</div>
		<?php endif ?>
		        </form>
			</div>
		</div>
	</div>
		
</body>
</html>