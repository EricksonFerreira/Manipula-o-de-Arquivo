
			<!-- Adicionando Produtos -->

<?php 
$codigo		= $_POST['codigo'];
$produto 	= $_POST['produto'];
$unidade 	= $_POST['unidade'];
$preco 		= $_POST['preco'];
$SdEstSist 	= $_POST['SdEstSist'];
$ValEstSist = $_POST['ValEstSist'];
$EstCont 	= $_POST['EstCont'];
$ValEstCont = $_POST['ValEstCont'];
$fopen = fopen("tasks.csv", "a");

if (file_exists("tasks.csv")):
	$file = file("tasks.csv");
	$c=0;
	foreach ($file as  $key => $value):
	$explode = explode("/;/", $file[$key]);
		if ($codigo == $explode[0]):
		 	$c++;
		endif;
	endforeach;
	if ($c == 0):
		$write = fwrite($fopen, $codigo."/;/".$produto."/;/".$unidade."/;/".$preco."/;/".$SdEstSist."/;/".$ValEstSist."/;/".$EstCont."/;/".$ValEstCont."\n");
		header("location:produtos.php");
	else:
		echo "Já existe um produto com esse codigo de barra";
		echo "<br><a href=produtos.php>Voltar</a>";	
	endif;
endif;
?>
<!-- codigo/;/produto/;/unidade/;/preco/;/saldoestoquesist/;/valorestoqsist/;/estoquecont/;/valorestoquecont -->