<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div>
		<?php 
			$connect = mysqli_connect('127.0.0.1', 'root', '', 'instagram');
			$query = mysqli_query($connect, "SELECT * FROM insta");
			$row = $query->fetch_assoc();
		 ?>
		<div>
			<div class="d-flex">
				<h2> <a href=""><?php echo $row['name']; ?></a></h2>
			</div>
			<div>
				<p><a href=""><?php echo $row['login']; ?></a></p>
			</div>
		</div>
		<div class="col-3" style="background: white; border-radius: 15px">
				<form method="POST" action="insert.php" enctype="multipart/form-data">
							<?php echo '<input type="" name="text_post" placeholder="введите текст">'?>
							<?php echo '<input type="file" name="img">'?>
							<button>Опубликовать</button>
						</form>
		</div>
		<div class="col-6 pl-2 row" >
			<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'instagram');
				$query1 = mysqli_query($connect, 'SELECT * FROM post ORDER BY id DESC');
				for($i=0; $i < $query1->num_rows; $i++){

	 			$row1 = $query1->fetch_assoc(); 
	 			?>	 
					<div class="col-2">
						<a href=""><?php echo '<img style = "width:50px; height:50px" src ="images/3.jpeg">'; ?></a>
					</div>
					<div class="col-10">
						<div class="d-flex">
							<div>
								<h2> <a href=""><?php echo $row['login']; ?></a></h2>
							</div>
							<div class="mt-4">
								<p><a href=""><?php echo $row1['text_post']; ?></a></p>
								<a href=""><?php echo '<img style = "width:200px; height:300px" src ="' . $row1['img'] . '">'; ?></a>
							</div>
						</div>
					</div>
					<?php
				}
					?>


				</div>
	</div>
</body>
</html>