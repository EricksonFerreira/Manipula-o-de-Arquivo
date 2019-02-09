<?php 
session_start();
$id = $_GET['id'];
$user = $_SESSION['user'];
$file = file("../Tasks/".$user.".csv");

unset($file[$id]);
$write = implode('',$file);
file_put_contents("../Tasks/".$user.".csv", $write);
header('location:../Views/index.php');


 ?>