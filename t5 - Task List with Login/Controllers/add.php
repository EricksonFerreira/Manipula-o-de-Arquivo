<?php 
$user = $_POST['user'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$fopen = fopen('../users.csv', 'a');
$file = file('../users.csv');
$c = 0;

if ($password == $password2) :
	foreach ($file as $key => $value) :
		$explode = explode("/;/", $file[$key]);
	// echo $explode[0]." - ";
		if ($user == $explode[0]):
			$c = 1;
		endif;
	endforeach;
	if ($c == 1){
		echo 'Já existe um usuário com esse nome<br>';
		echo '<a href="../Views/register.php">Voltar</a>';
	}else{
		fwrite($fopen, $user."/;/".$password.PHP_EOL);
		 header('location:../Views/login.php');
	}
else:
	echo 'As Senhas estão diferentes<br>';
	echo '<a href="../Views/register.php">Voltar</a>';
endif; 

 ?>