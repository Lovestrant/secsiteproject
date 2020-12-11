<?php
 $servername = "localhost";
 $username = "root";
 $pass = "";
 $dbname = "register_login";

 $con = mysqli_connect($servername, $username, $pass, $dbname);

if(isset($_POST['updatenow'])){

	$id = $_POST['id'];
	$password = $_POST['passwordupdate'];
	$userN = $_POST['usernameupdate'];

	$query =  "UPDATE 'registrationdetails' SET 'password' = $password WHERE username = $userN;";
	$query_run = mysqli_query($con, $query);

	if(query_run){
		echo "<script>alert('Updated successfully')</script>";
	} else

		echo "<script>alert('Update unsuccessfully')</script>";
}




?>