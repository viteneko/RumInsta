<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'instagram');
	$lol = mysqli_query($connect, "INSERT INTO post (text_post, img)  VALUES ('" . $_POST['text_post'] . "', '" . $_FILES['img']['name'] . "') ");
	move_uploaded_file($_FILES['img']['name'], "images/".$_FILES['img']['tmp_name']);
	header('Location: http://a.insgtagang/insta.php');
 ?>