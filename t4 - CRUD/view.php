<?php 
$id = $_GET['id'];
$file = file("tasks.csv");
$explode = explode("/;/", $file[$id]);

 ?>
<!DOCTYPE html>
<!-- saved from url=(0035)http://localhost:8000/view.php?id=0 -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" href="style.css">
    <title><?=$explode[0];?></title>
</head>
<body>
    <div class="weapon">
        <h1><?=$explode[1];?></h1>
        <p>Poder: <strong><?=$explode[2];?></strong></p>
        <p><?=$explode[3];?>
</p>
        <p class="back">
            <a href="index.php">Voltar</a>
        </p>
    </div>

</body></html>