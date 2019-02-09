<!DOCTYPE html>
<!-- saved from url=(0031)http://localhost:8000/index.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>my form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Armas</h1>
    <form action="add.php" method="POST">
            <input type="text" name="name" placeholder="Nome da arma">
            <input type="number" name="power" placeholder="Poder de ataque">
            <select name="type" placeholder="hehehe">
                <option value="" disabled="">Tipo de arma</option>
                <option value="" disabled="">--</option>
                                    <option value="espada">espada</option>
                                    <option value="lança">lança</option>
                                    <option value="arco e flecha">arco e flecha</option>
                                    <option value="machado">machado</option>
                                    <option value="adaga dupla">adaga dupla</option>
                            </select>
            <textarea name="history" cols="30" rows="10" placeholder="História da arma"></textarea>
            <input type="submit" value="enviar">
    </form>
    <?php 

	$file = file("tasks.csv");
    if ($file != null) {  ?>
    	
    <table class="weapons">
        <tbody><tr>
            <th>Nome</th>
            <th>Poder</th>
            <th>Tipo</th>
            <th>Ações</th>
        </tr>
        <?php 
        foreach ($file as $key => $value) {
        	$explode = explode("/;/", $file[$key]);
        ?>
        	
        <tr>
            <td><?=$explode[0]?></td>
            <td><?=$explode[1]?></td>
            <td><?=$explode[2]?></td>
            <td>
                <a href="view.php?id=<?=$key?>">historia</a>
                <a href="delete.php?id=<?=$key?>">remover</a>
            </td>
        </tr>
        <?php } 
    		} ?>
            </tbody></table>


</body></html>