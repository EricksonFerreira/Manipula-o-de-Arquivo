<?php 
session_start();
$user = $_SESSION['user'];
$id = $_GET['id'];
$file = file('../Tasks/'.$user.'.csv');
unset($file[$id]);

$write = implode('', $file);
file_put_contents('../Tasks/'.$user.'.csv', $write);
header('location:../Views/index.php');
 ?>