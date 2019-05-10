<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'instagram');
	$query = mysqli_query($connect, "SELECT * FROM posts INNER JOIN users ON posts.user_id = users.id ORDER BY posts.id DESC");
	$query2 = mysqli_query($connect, "SELECT * FROM users WHERE id = ".$_GET['id']);
	$logo2 = $query2->fetch_assoc();
	?>
	<?php 
	echo '<h2>' . $logo2['name'] . '</h2>';
	echo '<h5>' . $logo2['username'] . '</h5>';
	echo '<img src="' . $logo2['avatar'] . '"style="height: 140px;width: 130px">';
	?>
	<form method="POST" action="insert.php" enctype="multipart/form-data">
			<?php echo '<input type="" name="text_post" placeholder="введите текст">'?>
			<?php echo '<input type="hidden" name="user_id">'?>
			<?php echo '<input type="file" name="post_img">'?>
			<?php echo '<input type="hidden" name="id" value = "'. $_GET['id'] .'">' ?>
	<button>Добавить</button>
</form>
	<?php
	for($i = 0; $i < $query->num_rows; $i++){ 

	$logo = $query->fetch_assoc(); ?>
	<div>
		<div class="d-flex">
		<?php echo '<img src="'.$logo['avatar'].'" style="height: 50px;width: 40px">'?>
		<?php  echo '<h5>' . $logo['username'] . '</h5>'; ?>
		</div>
		<div>
			<?php  echo '<h3>' . $logo['text_post'] . '</h3>'; ?>
		</div>
		<div>
		<?php echo '<img src="'.$logo['post_img'].'" style="height: 300px;width: 500px">' ?>
		</div>
	</div>	
	<?php } ?>
</body>
</html>