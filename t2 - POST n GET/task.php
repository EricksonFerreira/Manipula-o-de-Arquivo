<?php $id = $_GET['id'];?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task</title>
</head>
<body>
	<?php
	$text = file('tasks.csv');?>
	<h1><?= $text[$id];?></h1>
		

</body>
</html>