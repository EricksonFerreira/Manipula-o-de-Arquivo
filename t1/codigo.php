<?php
$form= $_POST["nome"];
$file= fopen("tasks.csv", "a");
$nome= fwrite($file, $form . "\n");
 header('location:index.php');
?>
