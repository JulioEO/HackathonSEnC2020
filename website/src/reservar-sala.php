<?php
    session_start();
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
        <i class="fas fa-bars"></i>
        <h1>ICMC - Instituto de Ciências Matemáticas e de Computação</h1>
    </div><!-- nav-header -->
    <div class="main-container"> <!-- main-container terá display flex pra ficar responsivo -->

    <?php for ($i = 1; $i < 9; $i++) { ?>
        <div class="buttons">
            <a href="bloco<?php echo $i; ?>.php">Bloco <?php echo $i; ?></a>
        </div><!-- buttons -->
    <?php } ?>

    </div><!-- main-container -->
</body>
</html>