<?php
session_start();

$username = "";
$email    = "";
$check_in = "";
$check_in_date = "";
$check_out = "";
$check_out_date = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'hotel management');

if (isset($_POST['reg_user'])) {

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: home.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
if(isset($_POST['confirm_booking'])){
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$check_in = mysqli_real_escape_string($db, $_POST['check_in']);
	$check_in_date = mysqli_real_escape_string($db, $_POST['check_in_date']);
	$check_out = mysqli_real_escape_string($db, $_POST['check_out']);
	$check_out_date = mysqli_real_escape_string($db, $_POST['check_out_date']);
	$query = "INSERT INTO booking (email, check_in, check_in_date, check_out, check_out_date) 
  			  VALUES('$email', '$check_in', '$check_in_date', '$check_out', '$check_out_date')";
  	mysqli_query($db, $query);
}
if(isset($_POST['cancel'])){
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$query = "DELETE FROM booking WHERE email = '$email'";
	mysqli_query($db, $query);
}
if(isset($_POST['change_slot'])){
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$check_in = mysqli_real_escape_string($db, $_POST['check_in']);
	$check_in_date = mysqli_real_escape_string($db, $_POST['check_in_date']);
	$check_out = mysqli_real_escape_string($db, $_POST['check_out']);
	$check_out_date = mysqli_real_escape_string($db, $_POST['check_out_date']);
	$query = "UPDATE booking SET check_in = '$check_in' WHERE email = '$email'";
	mysqli_query($db, $query);
	$query = "UPDATE booking SET check_in_date = '$check_in_date' WHERE email = '$email'";
	mysqli_query($db, $query);
	$query = "UPDATE booking SET check_out = '$check_out' WHERE email = '$email'";
	mysqli_query($db, $query);
	$query = "UPDATE booking SET check_out_date = '$check_out_date' WHERE email = '$email'";
	mysqli_query($db, $query);
	
}
?>