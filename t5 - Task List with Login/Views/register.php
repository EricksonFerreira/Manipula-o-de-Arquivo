<?php
session_start();
if (isset($_SESSION['user'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../Estilos/style.css">
</head>
<body>
    <h1>Cadastro de Usuário</h1>
        <form method="POST" action="../Controllers/add.php" class="add-user">
        <input type="text" name="user" placeholder="User" value='123'>
        <br>
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password2" placeholder="Confirm password">
        <br>
        <input type="submit">
    </form>
    <a href="login.php">Login</a>
</body>
</html>