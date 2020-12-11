<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register_login";

$errors = array();

//database connect
$con = mysqli_connect($servername, $username, $password, $dbname);



//registration of users
if (isset($_POST['uniquename'])){
$myname = mysqli_real_escape_string($con, $_POST['uniquename']);
$password1 = mysqli_real_escape_string($con, $_POST['registerpass']);
$password2 =mysqli_real_escape_string($con, $_POST['confirmpass']);

if (empty($myname)) {array_push($errors, "uniquename is required");}
if (empty($password1)) {array_push($errors, "password is required");}
if (empty($password2)) {array_push($errors, "password confirmation is required");}
if ($password1 != $password2) {array_push($errors, "passwords should match");}

//checking if the user is already registered in the database

$check_user_existance = "SELECT * from registrationdetails where username = '$myname' and password = '$password1' limit 1";

$results = mysqli_query($con, $check_user_existance);
$user = mysqli_fetch_assoc($results);
if($user['username'] === $myname && $user['password'] === $password1) {array_push($errors, "That user is already registered");}

//register the user if there is no error.
if(count($errors) == 0){
	$password = password_hash($password_1, PASSWORD_DEFAULT);
	$query = "INSERT INTO registrationdetails(username, password) VALUES ('$myname', '$password1')";

	mysql_query($con, $query);
	//echo "<script>alert('registered successfully')</script>";
	$_SESSION['username'] = $myname;
	$_SESSION['success'] = "You are successfully logged in";
	header('location: login_register.php');
}
}

?>