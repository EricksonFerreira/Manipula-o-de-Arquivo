<?php  
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');
}
// $id = $_SESSION['id'];
$user = $_SESSION['user'];
if(file_exists("../Tasks/".$user.".csv")){
    $file = file("../Tasks/".$user.".csv");
}; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../Estilos/style.css">
</head>
<body>
    <h1>Minha lista de tarefas</h1>
    <p>Usuário: <?=$user;?> | <a class="logout" href="../Controllers/logout.php">Sair</a></p>
    <form action="../Controllers/addTask.php" method="POST" class="addtask">
        <table class="tasks">
            <tr>
                <th>Tarefa</th>
                <th>Ações</th>
            </tr>
      <?php if (file_exists("../Tasks/".$user.".csv")):   
                foreach ($file as $key => $value): ?>
                    <tr class="task">
                        <td class="todo"><?=$value;?></td>
                        <td class="action">
                            <a class="rmtask" href="../Controllers/rmTask.php?id=<?=$key?>">&#10007;</a>
                        </td>
                    </tr>
          <?php endforeach;
            endif ?>
            <tr>
                <td><input type="text" name="title" placeholder="Tarefa" required></td>
                <td class="action"><input type="submit" value="ok"></td>
            </tr>
        </table>
    </form>
</body>
</html>