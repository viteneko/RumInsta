<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'instagram');
	$query = mysqli_query($connect, "INSERT INTO posts (text_post, user_id, post_img) VALUES ('" . $_POST['text_post'] . "', '" . $_POST['id'] . "', '" . $_FILES['post_img']['name'] . "') ");
	move_uploaded_file($_FILES['post_img']['tmp_name'], 'images/'.$_FILES['post_img']['name'] );
	header('Location: http://AAAAAAinstagram/insta.php?id='. $_POST['id']);

?>

  