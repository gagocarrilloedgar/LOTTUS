<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$id = "";
	$longitude = "";
	$latitude = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('remotemysql.com:3306', 'VCigQ9XSQr', 'nYmwhaEv4c', 'VCigQ9XSQr');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		if($username == 'admin' && $password == 'admin'){
		    $_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in as an administrator";
			header('location: admin.php');
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	
	//....
	
	// HELP USER
    	if (isset($_POST['new_help'])) {
		// receive all input values from the form
		
		$longitude = mysqli_real_escape_string($db, $_POST['longitude']);
		$latitude = mysqli_real_escape_string($db, $_POST['latitude']);
		
		//$password = md5($password_1);//encrypt the password before saving in the database
		
		$query2 = "INSERT INTO helplocation (longitude,latitude) 
				  VALUES('$longitude','$latitude')";
		mysqli_query($db, $query2);
	    $_SESSION['success'] = "Help is on its way";
		header('location: help.php');

    	}
?>