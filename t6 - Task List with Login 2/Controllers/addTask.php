<?php 
session_start();
$user = $_SESSION['user'];
$title = $_POST['title'];
$amount = $_POST['amount'];
$todo = 0;
$fopen = fopen('../Tasks/'.$user.'.csv', 'a');
$write = fwrite($fopen, $amount."/;/".$title.'/;/'.$todo."\n");
$file = $user.'.csv';
header('location:../Views/index.php');
 ?>