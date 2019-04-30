<?php 
$id = $_GET['id'];
$file = file("tasks.csv");
$explode = explode("/;/", $file[$id]);

 ?>
<!DOCTYPE html>
<link rel="stylesheet" href="123.css">
    <link rel="stylesheet" href="style.css">
<!-- saved from url=(0035)http://localhost:8000/view.php?id=0 -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<a class="w3-button w3-black" href="hackaton.php">Voltar</a>
    <title><?=$explode[1];?></title>
</head>
<body>
    <div class="weapon">
        <h1><?=$explode[1];?></h1>
        <p><strong>Codigo de barra: </strong><?=$explode[0];?></p>
        <p><strong>Tipo do produto:</strong><?=$explode[2];?></p>
        <p><strong>Preço: </strong><?=$explode[3];?></p>
        <p><strong>Saldo no Estoque do Sistema: </strong><?=$explode[4];?></p>
        <p><strong>Valor no Estoque do Sistema: </strong><?=$explode[5];?></p>
        <p><strong>Estoque no Sistema: </strong><?=$explode[6];?></p>
        <p><strong>Valor do Estoque no Sistema: </strong><?=$explode[7];?></p>
        <p class="back">
            <a class="w3-button w3-black" href="edit.php?id=<?=$id?>">Editar</a><br>
        </p>
    </div>

</body></html>