<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adicionar</title>
</head>
<body>
	<h1>Adicionar Produtos</h1>
	<form action="add.php" method="post">
		<label for="">Codigo: </label>
		<input type="text" name="codigo" placeholder="codigo" ><br>
		<label for="">Produto: </label>
		<input type="text" name="produto" placeholder="produto"><br>
		<label for="">Unidade: </label>
		<input type="text" name="unidade" placeholder="unidade"><br>
		<label for="">Preco: </label>
		<input type="text" name="preco" placeholder="preco"><br>
		<label for="">Saldo Esoque Sistema: </label>
		<input type="text" name="SdEstSist" placeholder="saldoestoquesist"><br>
		<label for="">Valor EStoque Sistema: </label>
		<input type="text" name="ValEstSist" placeholder="valorestoquesist"><br>
		<label for="">Estoque Cont: </label>
		<input type="text" name="EstCont" placeholder="estoquecont"><br>
		<label for="">Valor Estoque Cont: </label>
		<input type="text" name="ValEstCont" placeholder="valorestoquecont"><br>
		<input type="submit">
	</form>
	<a href="Hackaton.php">Ir para a Index</a>
</body>
</html>