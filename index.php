
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<form method="POST" action="reg.php" >
		<?php echo '<input type="" name="email" placeholder="Введите почту">'?>
		<?php echo '<input type="" name="name" placeholder="Введите имя">'?>
		<?php echo '<input type="" name="username" placeholder="Введите логин">'?>
		<?php echo '<input type="password" name="password" placeholder="Введите пароль">'?>
		<button>Зарегистрироваться</button>
	</form>
	<div>
		<a href="log.php">Войти</a>
	</div>
</body>
</html>