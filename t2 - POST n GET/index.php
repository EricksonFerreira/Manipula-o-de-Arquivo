<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index.php</title>
	<style>
		*{
			margin:auto;
			padding: 0;
		}
		.form{
			margin-top: 10em;
			background: #000000;
			width: 300px;
			height: : 300px;
		}
		body{
			margin: auto;
		}
	</style>
</head>
<body>
	<div class="form">
		<form method="POST" action="add.php">
			<input type="text" name="task">
			<input type="submit" value="Enviar">
		</form>
		<ul>
			<?php $arquivo= file('tasks.csv');?>
			<?php foreach($arquivo as $key => $value ){?>
				<a href="task.php?id=<?= $key;?>"><?=$value?></a><br>
			<?php } ?>
		</ul>
	</div>
</body>
</html>