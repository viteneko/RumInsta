<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'instagram');
	$query = mysqli_query($connect, "SELECT * FROM users WHERE email ='" . $_POST['email']. "' AND password = '". $_POST['password'] . "'");
	
?>