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
<div class="container" id="container">
    <div class="header">
		<br />
        <img src="../assets/images/logoSSI.png" alt="logo" />
        <h1>SSI</h1>
    </div><!-- header -->
    <div class="form" class="login-form">
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="E-mail" required />
			<br /> <br />
            <input type="password" name="passwd" placeholder="Senha" required />
			<br />
            <input type="checkbox" name="connected" /> <p> mantenha-me conectado </p>
			<br />
            <input type="submit" value="Entrar" />
        </form>
        <p text-decoration:underline;>Sou um administrador</p>
        <p>Esqueci a senha</p>
    </div> 
</div><!-- login-form -->
</body>
</html>