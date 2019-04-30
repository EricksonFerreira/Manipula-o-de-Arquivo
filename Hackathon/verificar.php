
<?php
session_start();
$tabela = file("tasks.csv");
$a = 1;
$codigo = $_POST['codigodebarra'];
$quantidade = $_POST['quantidade'];
$fopen = fopen(	"compras/".$a.".csv", "a");
  // Quando colocar o código de barra mudar a foto e os valores
 foreach ($tabela as $key => $value) {
		$explode = explode("/;/", $tabela[$key]);
 	if($explode[0] == $codigo){
 		$val1 = floatval(str_replace(",", ".", $explode[3]) * $quantidade);
 		$valor = $val1 * $quantidade;
 		echo $val1;
 		fwrite($fopen, $explode[0]."/;/".$explode[1]."/;/".$quantidade."/;/".$explode[3]."/;/".$val1."\n");
 // ai mudaria a foto, o nome do produto e o valor do mesmo
 // $_SESSION['foto']=$tabela[$i]["imagem"];
 		$_SESSION['produto'] = $explode[1];
 		$_SESSION['preco'] = $explode[3];
 		
 		 header("Location:Hackaton.php");
 		break;
 	}
  }
		echo "Não existe esse codigo de barra";
		echo "<br><a href=hackaton.php>Voltar</a>";	
 
?>