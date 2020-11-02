<?php
    session_start();

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $passwd = filter_input(INPUT_POST, 'passwd', FILTER_SANITIZE_SPECIAL_CHARS);

    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIstema Rocket</title>
    <script src="https://kit.fontawesome.com/51899e6930.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="nav-header">
        <h2 class="label" >Olá, usuário!</h2>
        <i class="fas fa-bars" style="font-size:20px;color:white"></i>
        <h1 class="cor2">ICMC - Instituto de Ciências Matemáticas e de Computação</h1>
		<br />
    </div><!-- nav-header -->
    <div class="main-container"> <!-- main-container terá display flex pra ficar responsivo -->
        <div class="buttons">
            <a href="reservar-sala.php">Reservar Sala</a>
        </div><!-- buttons -->
        <div class="buttons">
            <a href="salas-reservadas.php">Salas Reservadas</a>
        </div><!-- buttons -->
    </div><!-- main-container -->
    <script src="../assets/js/scripts.js"></script>
</body>
</html>