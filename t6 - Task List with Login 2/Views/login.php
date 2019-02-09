<?php 
session_start();
if (isset($_SESSION['user']) or isset($_SESSION['id'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../Estilo/style.css">
</head>
<body>
    <h1>Login</h1>
        <form method="POST" action="../Controllers/auth.php">
        <input type="text" name="user" placeholder="Usuário">
        <input type="password" name="password" placeholder="Senha">
        <br>
        <input type="submit">
    </form>
    <a href="register.php">Cadastre-se</a>
</body>
</html>