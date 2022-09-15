<?php
$con = mysqli_connect("localhost:3306","agritec1_db","","agritec1_db");
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
	}
?>	