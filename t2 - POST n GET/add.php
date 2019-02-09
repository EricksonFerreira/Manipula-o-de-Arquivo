<?php

$text = $_POST['task'];
$file = fopen('tasks.csv', 'a');
$writing = fwrite($file, $text."\n");
header('location: index.php');
?>