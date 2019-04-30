<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hackathon</title>
	<link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="tudo">
	<div class="direita">
		<p class="Caixa">Caixa Aberto</p>
		<a href="produtos.php">Produtos</a>
		<form method="post" action="verificar.php">
			<img src="coca.jpg" alt="" class="imgprod">
			<div class="a1">
				<h2>Codigo de Barra:</h2>
				<input type="text" class="txt" name="codigodebarra" value="" max=13>
			</div>
			<div class="a2">
				<h2>Quantidade:</h2>
				<input type="number" class="txt" name="quantidade" min="1" max="50" value="1">
			</div>
			<input type="submit" style="display: none;" value="">
		</form>

		<div class="prod">
			<?php if (isset($_SESSION['produto']) and isset($_SESSION['preco'])): ?>
				<h1 name="produto"><?= substr($_SESSION['produto'], 0, 26);?></h1>
				<h2>Valor Unitário</h2>
				<h3><?= $_SESSION['preco'] ?></h3>
			<?php endif ?>
		</div>
	</div>
	<div class="esquerda">
		<div class="letreiro"></div>
		<p class="item">Item</p>
		<p class="descricaoproduto">Descrição do Produto</p>	
		<tr>
		<?php 
		$total = 0;
		$file = file("compras/1.csv");
        for ($i=0; $i < sizeof($file); $i++):
			$explode = explode('/;/', $file[$i]);
        ?>
			<td>
				<div class="i i1">
					<h4>00<?=$a= $i+1;?></h4>
				</div>
			</td>	
			<td>
				<div class="p p1">
					<?php if (isset($file[$i])): ?>

					
					<?php $total = $total + floatval($explode[4]);  ?>

					<p class="codigodebarra"><?=$explode[0]?></p>
					<p class="nomedoproduto" size="10" min="2"><?= substr($explode[1],0,25);?></p>
					<p class="quantidade"><?=$explode[2]?></p>
					<p class="preco"><?=$explode[3]?></p>
					<p class="precototprod"><?=number_format(floatval($explode[4]), 2, ',', '.');?></p>
					<!-- <p class="precototprod"><?=$explode[3]*$quantidade?></p> -->
        	<?php endif;?>	
				</div>
		 <?php endfor;?>
	  <?php if (sizeof($file) < 10):
        	$SizeFile = 10 - sizeof($file);
        	  for ($j=0; $j < $SizeFile ; $j++): ?>
				<td>
					<div class="i i1">
						<h4>00<?=$a = ++$a;?></h4>
					</div>
				</td>	
				<td>
					<div class="p p1">
					</div>
        <?php  endfor;
        	endif; ?>
				</td>
		</tr>
		 	<div class="fim">
		 		<p class="total">TOTAL</p>
		 		<input type="text" class="tots" value="<?=number_format($total, 2, ',', '.');?>">
		 	</div>
	</div>
</body>
</html>