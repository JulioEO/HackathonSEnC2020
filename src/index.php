<?php
    session_start();

    if (isset($_COOKIE['error'])) {
        alert("Login inválido.");
        $_COOKIE['error'] = '';
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rocket</title>
</head>
<body>
    <div class="header">
        <img src="../assets/images/logo.jpg" alt="logo" />
        <h1>SSI</h1>
    </div><!-- header -->
    <div class="login-form">
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="E-mail" required />
            <label for="passwd">Senha</label><input type="password" name="passwd" placeholder="Senha" required />
            <input type="checkbox" name="connected" /><label for="connected"> Mantenha-me conectado</label>
            <input type="submit" value="Entrar" />
        </form>
        <a href=""><h3>Sou um administrador</h3></a>
        <a href=""><h3>Esqueci a senha</h3></a>
    </div><!-- login-form -->
</body>
</html>