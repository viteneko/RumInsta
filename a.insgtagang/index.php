<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<form action="registrarion.php" method="POST">
		<?php echo '<input type="hidden" name="id">'?>
		<?php echo '<input type="mail" name="email" placeholder="Электронный адрес">'?>
		<?php echo '<input type="text" name="name" placeholder="Имя и фамилия">'?>
		<?php echo '<input type="text" name="login" placeholder="Имя пользователя">'?>
		<?php echo '<input type="password" name="password" placeholder="Пароль">'?>
		<button>Регистрация</button>
	</form>

</body>
</html>  