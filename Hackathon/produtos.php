<!DOCTYPE html>
<!-- saved from url=(0031)http://localhost:8000/index.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>my form</title>
<link rel="stylesheet" href="123.css">
<style>
    h4{
        color: white;
    }
</style>
</head>
<body>
<a class="w3-button w3-black" href="hackaton.php">Voltar</a>
    <h1>Produtos</h1>
<div class="highlights">
<div class="w3-container">
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Adicionar Produto</button>
    <link rel="stylesheet" href="style.css">

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container" sy>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
         <center><h2>Adicionar Produtos</h2></center>
         <form action="add.php" method="POST" style="           background-color: #666;
">
            <h4>Codigo do Produto:</h4>
            <input type="text" name="codigo" onkeyup="validar(this,'num');" placeholder="Codigo do Produto">
            <h4>Nome do Produto:</h4>
            <input type="text" name="produto" placeholder="Nome do Produto">
            <h4>Tipo do Produto:</h4>
            <select name="unidade">
                <option value="" disabled="">Tipo do Produto</option>
                <option value="" disabled="">--</option>
                                    <option value="kg">KG</option>
                                    <option value="lt">LT</option>
                                    <option value="l">L</option>
                                    <option value="pt">PT</option>
                                    <option value="gf">GF</option>
                                    <option value="cx">CX</option>
                                    <option value="gf">GF</option>
                                    <option value="vd">VD</option>
                            </select>
            <h4>Preço:</h4>
            <input type="text" name="preco"  onkeyup="validar(this,'num');" placeholder="Preço do produto">
            <h4>Saldo Estoque no Sistema:</h4>
            <input type="text" name="SdEstSist"  onkeyup="validar(this,'num');" placeholder="Saldo de Estoque no Sistema">
            <h4>Valor Estoque no Sistema:</h4>
            <input type="text" name="ValEstSist" onkeyup="validar(this,'num');" placeholder="Valor de Estoque no Sistema"> 
            <h4>Estoque no Sistema:</h4>
            <input type="text" name="EstCont" onkeyup="validar(this,'num');" placeholder="Estoque no Sistema">
            <h4>Valor Estoque no Sistema:</h4>
            <input type="text" name="ValEstCont" onkeyup="validar(this,'num');" placeholder="Valor de Estoque no Sistema"><br>  
            <input type="submit" value="Enviar">
         </form> 
      </div>
    </div>
  </div>
</div>
</div>
    <?php 

	$file = file("tasks.csv");
    if ($file != null) {  ?>
    	
    <table class="weapons">
        <tbody><tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Preço</th>
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
                <a class="w3-button w3-black"href="view.php?id=<?=$key?>">detalhes</a>
                <a class="w3-button w3-red"href="delete.php?id=<?=$key?>">remover</a>
            </td>
        </tr>
        <?php } 
    		} ?>
            </tbody></table>


</body>
<script>
   function validar(dom,tipo){
    switch(tipo){
        case'num':var regex=/[A-Za-z]/g;break;
        case'text':var regex=/\d/g;break;
    }
    dom.value=dom.value.replace(regex,'');
}

</script>
</html>