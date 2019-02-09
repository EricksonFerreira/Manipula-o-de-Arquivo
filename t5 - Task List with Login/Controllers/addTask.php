<?php 
session_start();
$id = $_SESSION['id'];
$user = $_SESSION['user'];
$title = $_POST['title'];
$fopen = fopen('../Tasks/'.$user.'.csv', 'a');
fwrite($fopen, $title."\n");
header('location:../Views/index.php');

 ?>