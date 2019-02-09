<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task</title>
</head>
<body>
	<?php $id = $_GET['id'];?>
	<?php $file = file("tasks.csv");?>
	<?php $explode = explode("/;/", $file[$id]);?>
		<h1><?=$explode[0]?></h1>
		<p><?=$explode[1]?></p>
		<a href="index.php">Voltar</a>
</body>
</html>