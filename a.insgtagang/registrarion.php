<?php
echo $_POST["email"] . ' ' . $_POST["name"] . ' ' . $_POST["login"] . ' ' . $_POST["password"];
mail($_POST["email"], "Поздравляем с успешной регистрацией", "'Ваш логин' '". $_POST['login'] . "' и пароль '". $_POST['password'] . "'" );

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'instagram');
	$lol = mysqli_query($connect, "INSERT INTO insta (email, name, login, password) VALUES ('" . $_POST['email'] . "', '" . $_POST['name'] . "', '" . $_POST['login'] . "', '" . $_POST['password'] . "') ");

?>  