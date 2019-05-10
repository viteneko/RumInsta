<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<form method="POST" action="autorisation.php">
		<?php echo '<input type="hidden" name="id">'?>
		<?php echo '<input type="text" name="email" placeholder="Электронный адрес">'?>
		<?php echo '<input type="text" name="password" placeholder="Пароль">'?>
		<button>Войти</button>
	</form>
</body>
</html>