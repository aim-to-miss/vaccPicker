<?php
require "connect.php";

if(!isset($_POST['email']) && !isset($_POST['password'])){
	exit("404 Not Found!");
}

$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

if ($email == "vaccPicker" && $password=="Bola@Jabena") {
	session_start();
	$_SESSION['uid'] = "9cdfb439c7876e703e307864c9167a15";
	echo "true";
}else echo "false";
exit();

?>