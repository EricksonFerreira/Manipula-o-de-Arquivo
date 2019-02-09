<?php 
$user = $_POST['user'];
$password = $_POST['password']."\n";
$file = file("../users.csv");
$c = 0; 
 
foreach ($file as $key => $value):
	$explode = explode("/;/", $file[$key]);
	$nick = $explode[0];
	if ($user == $nick and $password == $explode[1] ):
		$c = 1;
	endif;
endforeach;

if ($c == 1):
	session_start();
	$_SESSION['id'] = $key;
	$_SESSION['user'] = $user;
	header('location:../Views/index.php');
	exit;
else:
	echo 'Usuario e/ou Senha incorreta<br>';
	echo '<a href="../Views/login.php">Voltar</a>';
endif;