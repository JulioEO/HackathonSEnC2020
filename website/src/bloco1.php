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
        <i class="fas fa-bars" style="font-size:20px;color:white"></i>
        <h1 class="cor2">Bloco 1</h1>
    </div><!-- nav-header -->
	<br />
	<div class="search-data">
        <input type="datetime-local" name="date" />
    </div>
    <div class="main-container"> <!-- main-container terá display flex pra ficar responsivo -->
    <?php for ($i = 1; $i < 10; $i++) { ?>
        <div class="buttons">
            <button id="btnSala">Sala <?php echo "1-00" . $i; ?></button>
        </div><!-- buttons -->
    <?php } ?>
    
    <div class="overlay"></div>
    </div><!-- main-container -->
	<div class="confirm">
            <form action="sala1004.php" method="GET">
			<br />
                <h2>Confirma a reserva para </h2>
                <input type="submit" value="Confirmar" />
            </form>
        </div><!-- confirm -->
    <script src="../assets/js/scripts.js"></script>
</body>
</html>