<?php session_start();

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
        <h1 class="cor2">Sala 1-004</h1>
    </div><!-- nav-header -->
    <div class="main-container"> <!-- main-container terá display flex pra ficar responsivo -->
    <?php for ($i = 0; $i <3; $i++) { ?>
    <?php
        $arrayID = ["ac", "pc", "light"];
        $arrayNames = ["Ar-condicionado", "Computador", "Iluminação"];
    ?>
        <div class="buttons">
            <?php
                if ($i == 2) {
                    $arrayNames[$i] = "Iluminacao";
                }
            ?>
            <a id="<?php echo $arrayID[$i]; ?>" href="<?php echo $arrayNames[$i] . ".html"; ?>"><?php echo $arrayNames[$i]; ?></a>
        </div><!-- buttons -->
    <?php } ?>
    </div><!-- main-container -->
</body>
</html>