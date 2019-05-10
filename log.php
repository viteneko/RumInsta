<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<form action="get.php" method="POST">
		<input type="" name="email" placeholder="Введите почту">
		<input type="password" name="password" placeholder="Введите пароль">
		<button >
			Войти
		</button>
		<?php 
			$error = $_GET['error'];;
			echo $error;
		 ?>
	</form>
	
</body>			
</html>
