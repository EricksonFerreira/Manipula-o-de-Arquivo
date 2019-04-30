<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hackathon</title>
	<style>
		*{margin:0px; padding: 0px};
		body{background-color: #043247; 
		width: 1280px;
		margin: 0 auto;
		}
		h1{	font-size: 1.7em;text-align: center;color:red;}
		h2{	font-size: 1.5em;text-align: center;color:#000;}
		h3{	font-size: 1.5em;text-align: center;color:#000;}
		h4{	font-size: 1em;text-align: center;color:#000; margin-top: 1em;}

		.tudo{
			margin:0px;
			 padding: 0px;
			width: 1080px; 
			position: absolute;
			border: 1px solid red;}
		.esquerda{
			margin-top: -38.4em;
			float: left;
			width: 46%;
			height: 47em;
/*			background: #343434;
			border: 1px solid #dddddd;
*/		}
		.letreiro{float: left;
			width: 100%;
			height: 10em;
			background-color: #666;
		}
		.item{
			width: 25%;
			float: left;
			text-align: center;
			border: 1px solid #000;
			background-color: #fff;
		}
		.descricaoproduto{float: left;
			width: 74%;
			text-align: center;
			border: 1px solid #000;
			background-color: #fff;
		}
		.direita{
			float: left;
			width: 59%;
			margin-left: 40%;
		}
		.Caixa{
		float: left;
		margin-left: 1.5em;
		font-size: 5em;
		text-align: center;
		}
		.imgprod{
		float: left;
		border: 1px solid #333;	
		border-radius: 1em 1em 1em;
		margin-left: 8em;
		width: 25em;
		height: 20em;
		}	
		.a1{
		margin-top: 2em;
		margin-left: 5em;
		float: left;
		width: 35%;height: 5em;
		}
		.a2{
		float: left;
		margin-top: 2em;
		margin-left: 3em;
		width: 35%;height: 5em;
		}
		.prod{
			float: left;
			width: 90%;height: 1em;
/*			background: red;
*/			margin-left: 5%;
		}
		.txt{
		width: 100%;
		border-radius: 1em 1em 1em;
		height: 2em;
		text-align: center;
		font-size: 1em
		}
		.i{
			float: left;
			width: 25%;
			height: 3em;
			border:1px solid black;
		}
		.p{
			float: left;
			width: 74%;
			height: 3em;
			border:1px solid black;
		}
		.codigodebarra{
			height: 1em;width: 30%;
			float: left;
			margin-left: 0em;
			margin-top:0.2em; 
		}
		.nomedoproduto{float: left; margin-left: 4%; height: 1em; width: 65%; margin-top:0.2em; font-size: 1em;}
		.quantidade{float: left; margin-left: 4%; height: 1em; width: 25%; margin-top:0.5em; text-align: center;}
		.preco{float: left; margin-left: 4%; height: 1em; width: 25%; margin-top:0.5em; text-align: center;}
		.precototprod{float: left; margin-left: 4%; height: 1em; width: 25%; margin-top:0.5em; text-align: center;}
		.fim{float:left;width: 100%; height:4.5em; background: #666}
		.total{float: left; margin-top: .6em; margin-left: 1.5em;font-size: 2em;font-weight: bold;}
		.tots{float: left; margin-top: .95em; margin-left: 1.0em; width: 6em; height: 1em; text-align: center; font-size: 1.5em;border-radius: 1em 1em 1em}
	</style>
</head>
<body>
<div class="tudo">
	<div class="direita">
		<p class="Caixa">Caixa Aberto</p>
		<img src="coca.jpg" alt="" class="imgprod">
		<div class="a1">
			<h2>Codigo de Barra:</h2>
		<form method="post" action="Hackaton.php">
			<input type="text" class="txt" name="codigodebarra" max=13>
			<input type="submit" name="verificar" value="verificar">
		</form>
		</div>
		<div class="a2">
			<h2>Quantidade:</h2>
			<input type="number" class="txt">
		</div>
		<div class="prod">
			<h1 name="produto">REFRIGERANTE DE 2L</h1>
			<h2>Valor Unitário</h2>
			<h3 name="valor">2.90</h3>
		</div>
	</div>
				<div class="esquerda">
				<div class="letreiro"></div>
				<div class="item">Item</div>
				<div class="descricaoproduto">Descrição do Produto</div>	
				<div class="i i1">
					<h4>001</h4>
				</div>
				<div class="p p1">
					<p class="codigodebarra">1234567891234</p>
					<p class="nomedoproduto">ACUCAR MASCAVO</p>
					<p class="quantidade">25x</p>
					<p class="preco">25.50</p>
					<p class="precototprod">150.50</p>
				 </div>
				<div class="i i2">
					<h4>002</h4>
				</div>
				<div class="p p2">
					<p class="codigodebarra">1234567891234</p>
					<p class="nomedoproduto">ACUCAR MASCAVO</p>
					<p class="quantidade">25x</p>
					<p class="preco">25.50</p>
					<p class="precototprod">150.50</p>
				 </div>
				<div class="i i3">
					<h4>003</h4>
				</div>
				<div class="p p3">
					<p class="codigodebarra">1234567891234</p>
					<p class="nomedoproduto">ACUCAR MASCAVO</p>
					<p class="quantidade">25x</p>
					<p class="preco">25.50</p>
					<p class="precototprod">150.50</p>
				 </div>
				<div class="i i4">
					<h4>004</h4>
				</div>
				<div class="p p4">
					<p class="codigodebarra">1234567891234</p>
					<p class="nomedoproduto">ACUCAR MASCAVO</p>
					<p class="quantidade">25x</p>
					<p class="preco">25.50</p>
					<p class="precototprod">150.50</p>
				 </div>
				<div class="i i5">
					<h4>005</h4>
				</div>
				<div class="p p5">
					<p class="codigodebarra">1234567891234</p>
					<p class="nomedoproduto">ACUCAR MASCAVO</p>
					<p class="quantidade">25x</p>
					<p class="preco">25.50</p>
					<p class="precototprod">150.50</p>
				 </div>
				<div class="i i6">
					<h4>006</h4>
				</div>
				<div class="p p6">
					<p class="codigodebarra">1234567891234</p>
					<p class="nomedoproduto">ACUCAR MASCAVO</p>
					<p class="quantidade">25x</p>
					<p class="preco">25.50</p>
					<p class="precototprod">150.50</p>
				 </div>
				<div class="i i7">
					<h4>007</h4>
				</div>
				<div class="p p7">
					<p class="codigodebarra">1234567891234</p>
					<p class="nomedoproduto">ACUCAR MASCAVO</p>
					<p class="quantidade">25x</p>
					<p class="preco">25.50</p>
					<p class="precototprod">150.50</p>
				 </div>
				<div class="i i8">
					<h4>008</h4>
				</div>
				<div class="p p8">
					<p class="codigodebarra">1234567891234</p>
					<p class="nomedoproduto">ACUCAR MASCAVO</p>
					<p class="quantidade">25x</p>
					<p class="preco">25.50</p>
					<p class="precototprod">150.50</p>
				 </div>
				<div class="i i9">
					<h4>009</h4>
				</div>
				<div class="p p9">
					<p class="codigodebarra">1234567891234</p>
					<p class="nomedoproduto">ACUCAR MASCAVO</p>
					<p class="quantidade">25x</p>
					<p class="preco">25.50</p>
					<p class="precototprod">150.50</p>
				 </div>
				<div class="i i10">
					<h4>010</h4>
				</div>
				<div class="p p10">
					<p class="codigodebarra">1234567891234</p>
					<p class="nomedoproduto">ACUCAR MASCAVO</p>
					<p class="quantidade">25x</p>
					<p class="preco">25.50</p>
					<p class="precototprod">150.50</p>
				 </div>
				 	<div class="fim">
				 		<p class="total">TOTAL</p>
				 		<input type="text" class="tots" value="">
				 	</div>
	</div>
<?php
$tabela=[
["codigo"=>"00254", "cb" => "00000", "produto"=>"ACUCAR CRISTAL PETRIBÚ", "unidade"=>"KG","preco"=>"R$ 1.80", "saldoestoqueSist"=>1211,"valorestoqueSist"=>"R$ 2.179.80","estoqueCont"=>1211, "valorestoqueCont"=>"R$ 2.179.80"],
["codigo"=>"00256", "produto"=>"
", "unidade"=>"KG","preco"=>"R$ 5.60", "saldoestoqueSist"=>98,"valorestoqueSist"=>"R$ 548.80","estoqueCont"=>98, "valorestoqueCont"=>"R$ 548.80"],
["codigo"=>"00259", "produto"=>"ADOCANTE LIQUIDO","unidade"=>"UN","preco"=>"R$ 6.50", "saldoestoqueSist"=>120,"valorestoqueSist"=>"R$ 780.00","estoqueCont"=>120, "valorestoqueCont"=>"R$ 780.00"],
["codigo"=>"07727", "produto"=>"AMACIANTE DE CARNE","unidade"=>"KG","preco"=>"R$ 10.20", "saldoestoqueSist"=>25,"valorestoqueSist"=>"R$ 255.00","estoqueCont"=>25, "valorestoqueCont"=>"R$ 255.00"],
["codigo"=>"00265", "produto"=>"AMEIXA EM CALDA","unidade"=>"LT","preco"=>"R$ 4.50", "saldoestoqueSist"=>324,"valorestoqueSist"=>"R$ 1.458.00","estoqueCont"=>324, "valorestoqueCont"=>"R$ 1.458.00"],
["codigo"=>"00272", "produto"=>"ARROZ ARBORIO","unidade"=>"KG","preco"=>"R$ 12.30", "saldoestoqueSist"=>76,"valorestoqueSist"=>"R$ 934.80","estoqueCont"=>76, "valorestoqueCont"=>"R$ 934.80"],
["codigo"=>"00276", "produto"=>"ARROZ PARBOLIZADO EMOÇÕES", "unidade"=>"KG"	,"preco"=>"R$ 1.95", "saldoestoqueSist"=>1860,"valorestoqueSist"=>"R$ 3.627.00","estoqueCont"=>1680, "valorestoqueCont"=>"R$ 3.276.00"],
["codigo"=>"06459", "produto"=>"ARROZ SELVAGEM","unidade"=>"KG","preco"=>"R$ 72.40", "saldoestoqueSist"=>82,"valorestoqueSist"=>"R$ 5.936.80","estoqueCont"=>64, "valorestoqueCont"=>"R$ 4.633.60"],
["codigo"=>"20538", "produto"=>"AZEITE EXT. VIR. ANDORINHA VINTAGE 500ML", "unidade"=>"GF","preco"=>"R$ 12.50", "saldoestoqueSist"=>240,"valorestoqueSist"=>"R$ 3.000.00","estoqueCont"=>240, "valorestoqueCont"=>"R$ 3.000.00"],
["codigo"=>"19904", "produto"=>"AZEITE OLITALIA EXTRA VIRGEM 500ML", "unidade"=>"UN","preco"=>"R$ 10.50", "saldoestoqueSist"=>182,"valorestoqueSist"=>"R$ 1.911.00","estoqueCont"=>182, "valorestoqueCont"=>"R$ 1.911.00"],
["codigo"=>"11160", "produto"=>"BOLACHA CREAM CRAKER" ,"unidade"=>"PT","preco"=>"R$ 1.80", "saldoestoqueSist"=>56,"valorestoqueSist"=>"R$ 100.80","estoqueCont"=>56, "valorestoqueCont"=>"R$ 100.80"],
["codigo"=>"00314", "produto"=>"CAFE DESCAFEINADO SOLUVEL", "unidade"=>"VD","preco"=>"R$ 3.50", "saldoestoqueSist"=>42,"valorestoqueSist"=>"R$ 147.00","estoqueCont"=>42, "valorestoqueCont"=>"R$ 147.00"],
["codigo"=>"04722", "produto"=>"CAFE EM PO", "unidade"=>"KG","preco"=>"R$ 8.90", "saldoestoqueSist"=>32,"valorestoqueSist"=>"R$ 284.80","estoqueCont"=>32, "valorestoqueCont"=>"R$ 284.80"],
["codigo"=>"00344", "produto"=>"CHA MATE SOLUVEL", "unidade"=>"VD","preco"=>"R$ 4.60", "saldoestoqueSist"=>10,"valorestoqueSist"=>"R$ 46.00","estoqueCont"=>10, "valorestoqueCont"=>"R$ 46.00"],
["codigo"=>"10112", "produto"=>"CHA VERDE COM LIMAO", "unidade"=>"CX","preco"=>"R$ 3.20", "saldoestoqueSist"=>42,"valorestoqueSist"=>"R$ 134.40","estoqueCont"=>42, "valorestoqueCont"=>"R$ 134.40"],
["codigo"=>"00377", "produto"=>"COGUMELO FUNGHI FRESCO", "unidade"=>"KG","preco"=>"R$ 89.30", "saldoestoqueSist"=>18,"valorestoqueSist"=>"R$ 1.607.40","estoqueCont"=>18, "valorestoqueCont"=>"R$ 1.607.40"],
["codigo"=>"00381", "produto"=>"COGUMELO SHIMEJI FRESCO", "unidade"=>"KG","preco"=>"R$ 52.40", "saldoestoqueSist"=>24,"valorestoqueSist"=>"R$ 1.257.60","estoqueCont"=>24, "valorestoqueCont"=>"R$ 1.257.60"],
["codigo"=>"00402", "produto"=>"EXTRATO DE TOMATE", "unidade"=>"LT","preco"=>"R$ 1.80", "saldoestoqueSist"=>162,"valorestoqueSist"=>"R$ 291.60","estoqueCont"=>162, "valorestoqueCont"=>"R$ 291.60"],
["codigo"=>"00408", "produto"=>"FARINHA DE MANDIOCA", "unidade"=>"KG","preco"=>"R$ 7.40", "saldoestoqueSist"=>420,"valorestoqueSist"=>"R$ 3.108.00","estoqueCont"=>420, "valorestoqueCont"=>"R$ 3.108.00"],
["codigo"=>"00410", "produto"=>"FARINHA DE TRIGO", "unidade"=>"KG","preco"=>"R$ 3.20", "saldoestoqueSist"=>680,"valorestoqueSist"=>"R$ 2.176.00","estoqueCont"=>680, "valorestoqueCont"=>"R$ 2.176.00"],
["codigo"=>"00416", "produto"=>"FEIJAO MULATINHO  LEGAL", "unidade"=>"KG","preco"=>"R$ 6.30", "saldoestoqueSist"=>1230,"valorestoqueSist"=>"R$ 7.749.00","estoqueCont"=>1180, "valorestoqueCont"=>"R$ 7.434.00"],
["codigo"=>"00417", "produto"=>"FEIJAO PRETO", "unidade"=>"KG","preco"=>"R$ 4.50", "saldoestoqueSist"=>650,"valorestoqueSist"=>"R$ 2.925.00","estoqueCont"=>65, "valorestoqueCont"=>"R$ 292.50"],
["codigo"=>"00124", "produto"=>"FLOCÃO MARATÁ", "unidade"=>"KG","preco"=>"R$ 1.90", "saldoestoqueSist"=>450,"valorestoqueSist"=>"R$ 855.00","estoqueCont"=>540, "valorestoqueCont"=>"R$ 1.026.00"],
["codigo"=>"18006", "produto"=>"GELATINA EM PO TANGERINA ZERO", "unidade"=>"CX","preco"=>"R$ 2.00", "saldoestoqueSist"=>46,"valorestoqueSist"=>"R$ 92.00","estoqueCont"=>46, "valorestoqueCont"=>"R$ 92.00"],
["codigo"=>"00438", "produto"=>"GELEIA DE AMEIXA", "unidade"=>"LT","preco"=>"R$ 45.00", "saldoestoqueSist"=>32,"valorestoqueSist"=>"R$ 1.440.00","estoqueCont"=>32, "valorestoqueCont"=>"R$ 1.440.00"],
["codigo"=>"00467",	"produto"=>"LEITE INTEGRAL LONGA VIDA", "unidade"=>"L","preco"=>"R$ 1.90", "saldoestoqueSist"=>1940,"valorestoqueSist"=>"R$ 3.686.00","estoqueCont"=>1490, "valorestoqueCont"=>"R$ 2.831.00"],
["codigo"=>"00476", "produto"=>"MACARRAO PARAFUSO", "unidade"=>"PT","preco"=>"R$ 2.50", "saldoestoqueSist"=>140,"valorestoqueSist"=>"R$ 350.00","estoqueCont"=>140, "valorestoqueCont"=>"R$ 350.00"],
["codigo"=>"00479", "produto"=>"MACARRAO ESPAGUETE VITARELLA", "unidade"=>"KG","preco"=>"R$ 2,00", "saldoestoqueSist"=>290,"valorestoqueSist"=>"R$ 580,00","estoqueCont"=>290, "valorestoqueCont"=>"R$ 580,00"],
["codigo"=>"00498", "produto"=>"MILHO VERDE EM CONSERVA", "unidade"=>"LT","preco"=>"R$ 1.20", "saldoestoqueSist"=>80,"valorestoqueSist"=>"R$ 96.00","estoqueCont"=>80, "valorestoqueCont"=>"R$ 96.00"],
["codigo"=>"00504", "produto"=>"MOLHO DE PIMENTA TABASCO VERMELHO", "unidade"=>"VD","preco"=>"R$ 8.70", "saldoestoqueSist"=>46,"valorestoqueSist"=>"R$ 400.20","estoqueCont"=>46, "valorestoqueCont"=>"R$ 400.20"],
["codigo"=>"00507", "produto"=>"MOLHO INGLES", "unidade"=>"GF","preco"=>"R$ 2.50", "saldoestoqueSist"=>26,"valorestoqueSist"=>"R$ 65.00","estoqueCont"=>26, "valorestoqueCont"=>"R$ 65.00"],
["codigo"=>"00514", "produto"=>"MOSTARDA DIJON", "unidade"=>"VD","preco"=>"R$ 9.60", "saldoestoqueSist"=>20,"valorestoqueSist"=>"R$ 192.00","estoqueCont"=>20, "valorestoqueCont"=>"R$ 192.00"],
["codigo"=>"00517", "produto"=>"MUCILON ARROZ", "unidade"=>"LT","preco"=>"R$ 7.80", "saldoestoqueSist"=>12,"valorestoqueSist"=>"R$ 93.60","estoqueCont"=>12, "valorestoqueCont"=>"R$ 93.60"],
["codigo"=>"20239", "produto"=>"NESCAU PO LATA DE 400G", "unidade"=>"UN","preco"=>"R$ 5.60", "saldoestoqueSist"=>22,"valorestoqueSist"=>"R$ 123.20","estoqueCont"=>22, "valorestoqueCont"=>"R$ 123.20"],
["codigo"=>"00529", "produto"=>"OLEO DE GIRASSOL", "unidade"=>"GF","preco"=>"R$ 9.10", "saldoestoqueSist"=>42,"valorestoqueSist"=>"R$ 382.20","estoqueCont"=>24, "valorestoqueCont"=>"R$ 218.40"],
["codigo"=>"00530", "produto"=>"OLEO DE MILHO", "unidade"=>"GF","preco"=>"R$ 8.20", "saldoestoqueSist"=>36,"valorestoqueSist"=>"R$ 295.20","estoqueCont"=>36, "valorestoqueCont"=>"R$ 295.20"],
["codigo"=>"00531", "produto"=>"OLEO DE SOJA", "unidade"=>"GF","preco"=>"R$ 3.50", "saldoestoqueSist"=>420,"valorestoqueSist"=>"R$ 1.470.00","estoqueCont"=>420, "valorestoqueCont"=>"R$ 1.470.00"],
["codigo"=>"00535", "produto"=>"PALMITO DE JUCARA EM CONSERVA", "unidade"=>"VD","preco"=>"R$ 9.50", "saldoestoqueSist"=>160,"valorestoqueSist"=>"R$ 1.520.00","estoqueCont"=>160, "valorestoqueCont"=>"R$ 1.520.00"],
["codigo"=>"09806", "produto"=>"REFRESCO EM PO LIGHT LIMAO", "unidade"=>"UN","preco"=>"R$ 1.10", "saldoestoqueSist"=>24,"valorestoqueSist"=>"R$ 26.40","estoqueCont"=>24, "valorestoqueCont"=>"R$ 26.40"],
["codigo"=>"00562", "produto"=>"SAL GROSSO PARA CHURRASCO", "unidade"=>"KG","preco"=>"R$ 1.80", "saldoestoqueSist"=>40,"valorestoqueSist"=>"R$ 72.00","estoqueCont"=>40, "valorestoqueCont"=>"R$ 72.00"],
["codigo"=>"00598", "produto"=>"TORRADA LEVE SALGADA", "unidade"=>"UN","preco"=>"R$ 0.90", "saldoestoqueSist"=>210,"valorestoqueSist"=>"R$ 189.00","estoqueCont"=>210, "valorestoqueCont"=>"R$ 189.00"],
["codigo"=>"00601", "produto"=>"VINAGRE DE ARROZ", "unidade"=>"GF","preco"=>"R$ 6.30", "saldoestoqueSist"=>48,"valorestoqueSist"=>"R$ 302.40","estoqueCont"=>48, "valorestoqueCont"=>"R$ 302.40"]
];

for ($i=0; $i <sizeof($tabela) ; $i++) { 
	for ($j=0; $j <1 ; $j++) { 
		// echo $tabela[$i]["codigo"], PHP_EOL;
	}
}

for ($i=0; $i <sizeof($tabela) ; $i++) { 
	for ($j=0; $j <1 ; $j++) { 
		$acuracidade=($tabela[$i]["estoqueCont"]/$tabela[$i]["saldoestoqueSist"])*100;
		// echo $acuracidade, PHP_EOL;
	}
}

for ($i=0; $i <sizeof($tabela) ; $i++) { 
	for ($j=0; $j <1 ; $j++) { 
		// $acuracidade=($tabela[$i]["valorestoqueCont"]/$tabela[$i]["saldoestoqueSist"])*100;
		// echo $acuracidade, PHP_EOL;
	}
}
/* Quando colocar o código de barra mudar a foto e os valores
for ($i=0; $i <sizeof($tabela) ; $i++) { 
	if($_SESSION['codigodebarra']==$tabela[$i]["cb"]){
 ai mudaria a foto, o nome do produto e o valor do mesmo
$_SESSION['foto']=$tabela[$i]["imagem"];
$_SESSION['produto']=$tabela[$i]["produto"];
$_SESSION['valor']=$tabela[$i]["preco"];
	}
}
if(clickar em enviar){
	cada classe do p seria uma variavel, ai atribuiria o valor do array para essa variavel; 
}


//$tabela[$i]["cb"]==00000

/*Codigo pra ver as informações do codigo de Barra
for ($i=0; $i <sizeof($tabela) ; $i++) { 
	if($tabela[$i]["preco"]=="R$ 6.50"){
	    echo "6.5";
	}*/
?>
</div>
</body>
</html>