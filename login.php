<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "register_login";

$conn = mysqli_connect($host, $dbuser, $dbpass, $db);


$username = $_post['uniquename'];
$password = $_post['password'];

if (isset($_POST['login'])){

$sql = "SELECT `username`, `password` FROM `registrationdetails` WHERE `username` = $username and `password`= $password ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if($row['username'] == $username && $row['password'] == $password){
	
	echo "<script>alert(' you are successfully logged in')</script>";
	echo "<script>location.replace('main.html');</script>";
		}

else{
	echo "<script>alert(' Unsuccessful. Please enter your credentials correctly')</script>";
	echo "<script>location.replace('login_register.html');</script>";
}

}

?>


