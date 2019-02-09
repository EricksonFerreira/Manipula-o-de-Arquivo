<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="POST" action="add.php">
		<label>Titulo:</label>
		<input type="text" name="title">
		<label>Descrição:</label>
		<input type="text" name="description">
		<input type="submit" value="Enviar"> 
	</form>
	<ul>
		<li>
			<?php $file = file("tasks.csv");?>
			<?php $oi = "sadgsadgas/;/ 
			dfasdasdgasdg/;/
			dfasdfas/;/;asdf";?>
			<?php foreach ($file as $key => $value) { 
				 $explode = explode("/;/", $file[$key]); ?>
			<a href="task.php?id=<?=$key?>"><?= $explode[0]; ?></a><br>
			<?php } ?>
		</li>
	</ul>
</body>
</html>