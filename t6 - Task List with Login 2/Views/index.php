<?php 
session_start();
if (!isset($_SESSION['user']) or !isset($_SESSION['id'])) {
    header('location:login.php');
}
$user = $_SESSION['user'];
$id = $_SESSION['id'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../Estilo/style.css">
</head>
<body>
    <h1>Minha lista de tarefas</h1>
    <p>Usuário: <?=$user?> | <a class="logout" href="../Controllers/logout.php">Sair</a></p>
    <form action="../Controllers/addTask.php" method="POST" class="addtask">
        <table class="tasks">
            <tr>
                <th>Quantidade</th>
                <th>Tarefa</th>
                <th>Ações</th>
            </tr>
            <?php 
                $tag = 'todo';
                if (file_exists('../Tasks/'.$user.'.csv')):
                    $file = file('../Tasks/'.$user.'.csv');
                    foreach ($file as $key => $value):
                        $explode = explode('/;/', $file[$key]);
                
            ?>
            <tr class="task">
                
                <td class=<?= $tag = ($explode[2] == 0) ? "todo" : "done";?>><?=$explode[0];?></td>
                <td class=<?= $tag = ($explode[2] == 0) ? "todo" : "done";?>><?=$explode[1];?></td>
                
                <td class="action">
                    <?php if ($explode[1] == 0):  ?>
                        <a class="taskdone" href="../Controllers/taskDone.php?id=<?=$key?>&amount=<?=$explode[0]?>&title=<?=$explode[1];?>">
                            &#10004;
                        </a>
                    <?php endif; ?>
                    <a class="rmtask" href="../Controllers/rmTask.php?id=<?=$key?>">&#10007;</a>
                </td>
            </tr>
        <?php       endforeach;
                endif; ?>
            <tr>
                <td><input type="number" name="amount" placeholder="Quantidade" required></td>
                <td><input type="text" name="title" placeholder="Prato" required></td>
                <td class="action"><input type="submit" value="ok"></td>
            </tr>
        </table>
    </form>
</body>
</html>