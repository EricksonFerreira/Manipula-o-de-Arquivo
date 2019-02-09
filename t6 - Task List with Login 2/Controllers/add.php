<?php 
$user = $_POST['user'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$file = file("../users.csv");
$fopen = fopen("../users.csv", "a");
$a = 0;

if ($password == $password2) {
	foreach ($file as  $key => $value) {
	$explode = explode("/;/", $file[$key]);
		if ($user == $explode[0]) {
			$a++;
		}
		//echo $explode[0]."<br>";	
		// echo $key."<br>";
		// echo $value."<br>";
	}
	if ($a == 0) {
		$write = fwrite($fopen, $user."/;/".$password."\n");
		header("location:../Views/login.php");			
	}else{
		echo "Já Existe um Usuário com esse nome";
		// echo $a."<br>";
		echo "<br><a href=../Views/register.php>Voltar</a>";
	}
}else{
	echo "Senhas diferentes";
	echo "<br><a href=../Views/register.php>Voltar</a>";
}
?>
