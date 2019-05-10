<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'instagram');
$query = mysqli_query($connect,"SELECT * FROM users WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'");
$user=$query->fetch_assoc();
		if ($query->num_rows == 0) {
			header('Location: log.php?error=Неправильная%20почта%20или%20пароль');
		}else{
			header("Location: insta.php?name=".$user['name']."&username=".$user['username']."&avatar=".$user['avatar']."&id=".$user['id']."");
		}
?>    