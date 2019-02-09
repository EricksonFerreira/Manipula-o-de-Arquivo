<?php 
$id =  $_GET['id'];
$file = file("tasks.csv");
unset($file[$id]);

$write = implode('', $file);
file_put_contents('tasks.csv', $write);
header("location:index.php");
 ?>