<?php

//error_reporting(0);


$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "vaccpicker";


$con = mysqli_connect($host, $db_user, $db_pass, $db_name);

//$con = new mysqli($hostname, $username, $passward, $db_name);


if (!$con) {
  echo "Database connection failed".mysqli_error($con);

	//header('location: error_db.php');
	//exit;
}

date_default_timezone_set('Asia/Dhaka');

?>
