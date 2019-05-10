<?php 	
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'instagram');
	$query = mysqli_query($connect, "SELECT * FROM insta WHERE email ='". $_POST['email'] . "' AND password = '". $_POST['password'] . "'");
	$row = $query->fetch_assoc();
	header('Location: http://a.insgtagang/insta.php');
 ?> 