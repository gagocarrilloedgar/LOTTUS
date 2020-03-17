<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en-gb">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160718383-1"></script>
    <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());

     gtag('config', 'UA-160718383-1');
    </script>
    
	<title>Security Button - Lottus</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="ContactFrom/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/css/util.css">
	<link rel="stylesheet" type="text/css" href="ContactFrom/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="popup.php">
				<span class="contact100-form-title">
					¡Our beta launch is closed!
					<?php include('errors.php'); ?>
				</span>
				<span align="center" class="input100" type="text"> Thank for your interest on our App! Register with tyour email If you want to be the first to know when our final App goes to market. We will send you an email plus an offer, so you can enjoy our Smart Button with a reduced price!</span>
				<br><br><br>

				<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="text" name="name" placeholder="Nombre">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter email: e@a.x">
					<input class="input100" type="text" name="email" placeholder="Correo">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" name="reg_int">
						Avísame cuando este disponible
					</button>
				</div>
			</form>

			<div class="contact100-more">
				 Questions?<span class="contact100-more-highlight">+34 693 430 654</span> Call us
			</div>

			<div class="contact100-more" >
				<a class="contact100-more-highlight" href="index.php"> Take me home</a>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="ContactFrom/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom/vendor/bootstrap/js/popper.js"></script>
	<script src="ContactFrom/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom/vendor/daterangepicker/moment.min.js"></script>
	<script src="ContactFrom/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom/https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="ContactFrom/js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
