<?php
$title = $_POST['title'];
$description = $_POST['description'];
$file = fopen("tasks.csv", "a");
$writing = fwrite($file, $title."/;/".$description."\n");
header("location:index.php");
?>