<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>Quem é mais lindo?</h1>
<form method="POST" action="codigo.php">
	<label>Eula</label>
	<input type="checkbox" name="nome" value="eula">
	<br><label>Eloa</label>
	<input type="checkbox" name="nome" alue="eloaxx">
	<br><label>Rinho</label>
	<input type="checkbox" name="nome" value="rinho">
	<br><label>Eidi</label>
	<input type="checkbox" name="nome" value="eidi">
	<br><input type="submit" value="enviar">
</form>

<ul>
	<?php $filename = file("tasks.csv");?>	
	<?php foreach ($filename as $key => $value): ?>
		<li>
			<a href=""><?= $key.", nome = ".$value ?></a>
		</li>
	<?php endforeach ?>

</ul>
<?php
$a = "lindo";
$eula = "feia";
if($a = $eula){
	if (isset($Name)) {
	echo $Name;
	}
}
?>
</body>
</html>