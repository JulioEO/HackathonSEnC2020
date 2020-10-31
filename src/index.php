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
            <input type="text" name="email" placeholder="E-mail" required />
            <input type="password" name="passwd" placeholder="Senha" required />
            <input type="checkbox" name="connected" />
            <input type="submit" value="Entrar" />
        </form>
        <h3>Sou um administrador</h3>
        <h3>Esqueci a senha</h3>
    </div><!-- login-form -->
</body>
</html>