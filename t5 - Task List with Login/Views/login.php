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
    <h1>Login</h1>
        <form method="POST" action="../Controllers/auth.php">
        <input type="text" name="user" placeholder="Usuário">
        <input type="text" name="password" placeholder="Senha">
        <br>
        <input type="submit">
    </form>
    <a href="register.php">Cadastre-se</a>
</body>
</html>