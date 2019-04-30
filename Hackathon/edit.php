<?php 
$id = $_GET['id'];
$file = file("tasks.csv");
$explode = explode("/;/", $file[$id]);
$tipo = ['kg','lt','l','pt','cx','gf','vd'];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Editar</title>
    <link rel="stylesheet" href="123.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a class="w3-button w3-black" href="view.php?id=<?=$id?>">Voltar</a><br>
    <center><h2>Editar Produto</h2></center>     
    <form action="update.php?id=<?=$id?>" method="POST" style="background-color: #666;color: white;">
        <h4>Codigo do Produto:</h4>
            <input type="text" name="codigo" value="<?=$explode[0]?>" onkeyup="validar(this,'num');" placeholder="Codigo do Produto">
        <h4>Nome do Produto:</h4>
            <input type="text" name="produto" value="<?=$explode[1]?>" placeholder="Nome do Produto">
        <h4>Tipo do Produto:</h4>
            <select name="unidade"> 
                <option value="" disabled="">Tipo do Produto</option>
                <option value="" disabled="">--</option>
                <?php foreach($tipo as $key => $value):?>
                        <?php echo $tipo[$key]; ?>
                    <option value="<?=$tipo[$key];?>" 
                        <?php if($explode[2] == strtoupper($tipo[$key])): 
                            echo "selected";  
                        endif;?>
                        ><?= strtoupper($tipo[$key])?>
                    </option>
                <?php endforeach?> 
            </select>
        <h4>Preço:</h4>
            <input type="text" name="preco"  value="<?=$explode[3]?>" onkeyup="validar(this,'num');" placeholder="Preço do produto">
        <h4>Saldo Estoque no Sistema:</h4>
            <input type="text" name="SdEstSist" value="<?=$explode[4]?>" onkeyup="validar(this,'num');" placeholder="Saldo de Estoque no Sistema">
        <h4>Valor Estoque no Sistema:</h4>
            <input type="text" name="ValEstSist" value="<?=$explode[5]?>" onkeyup="validar(this,'num');" placeholder="Valor de Estoque no Sistema"> 
        <h4>Estoque no Sistema:</h4>
            <input type="text" name="EstCont" value="<?=$explode[6]?>" onkeyup="validar(this,'num');" placeholder="Estoque no Sistema">
        <h4>Valor Estoque no Sistema:</h4>
            <input type="text" name="ValEstCont" value="<?=$explode[7]?>" onkeyup="validar(this,'num');" placeholder="Valor de Estoque no Sistema"><br>  
        <input type="submit" value="Enviar">
    </form> 
   </body>
</html>
