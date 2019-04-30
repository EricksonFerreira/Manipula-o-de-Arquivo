
			<!-- Edição de Produtos -->

<?php
$id =$_GET['id'];
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
	$explode = explode("/;/", $file[$id]);
		$write = fwrite($fopen, $codigo."/;/".$produto."/;/".$unidade."/;/".$preco."/;/".$SdEstSist."/;/".$ValEstSist."/;/".$EstCont."/;/".$ValEstCont."\n");
		header("location:view.php?id=$id");
endif;
?>