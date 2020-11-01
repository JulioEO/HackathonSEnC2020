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
<body class="telalogin">
	<div class="container" id="container">
    <div class="header">
	<br />
        <img src="../assets/images/logoSSI.png" alt="logo" />
        <h1 class="cor2">SSI</h1>
    </div><!-- header -->
    <div class="login-form">
        <form action="login.php" method="POST">
            <input class="inputInsert" type="text" name="email" placeholder="E-mail" required />
			<br />
			<input class="inputInsert" type="password" name="passwd" placeholder="Senha" required />
			<br />
            <input type="checkbox" name="connected" /><label class="cor2" for="connected"> Mantenha-me conectado</label>
			<br /> <br />
            <input class="inputInsert" type="submit" value="Entrar" />
        </form>
        <a href=""><h3 class="cor" >Sou um administrador</h3></a>
        <a href=""><h3 class="cor2">Esqueci a senha</h3></a>
    </div>
	</div> <!-- login-form -->
</body>
</html>