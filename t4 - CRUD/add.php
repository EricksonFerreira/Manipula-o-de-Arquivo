<?php 
$name = $_POST['name'];
$power = $_POST['power'];
$type = $_POST['type'];
$history = $_POST['history'];

$file = fopen("tasks.csv", "a");
$write = fwrite($file, $name."/;/".$power."/;/".$type."/;/".$history."\n");
header("location:index.php");
?>