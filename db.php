<?php
$con = mysqli_connect("https://agritechcycle-app-default-rtdb.firebaseio.com/","root","","Vegetables");
    if (firebase_connect_errno()){
	echo "Failed to connect to DB: " . firebase_connect_error();
	die();
	}
?>	