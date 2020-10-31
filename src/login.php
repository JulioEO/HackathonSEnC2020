<?php
    session_start();

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $passwd = filter_input(INPUT_POST, 'passwd', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($email == "admin@admin.com" && $passwd == "souAdmin") {
        
    } else {
        $_SESSION['error'] = "Credenciais incorretas.";
        header("Location: index.php");
        exit;
    }
?>