<?php

    session_start();
    session_destroy();
    require_once("connect.php");

?>

<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Inscription / Connexion</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Un essai de login'>
    <!-- CSS -->
    <link rel='stylesheet' href='css/style.css'>
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
</head>

<body>

    <div class="liste">
        <?php
            echo "<h3>Vous êtes déconnecté !</h3>";
        ?>
        <a href='accueil.php' style="margin-top:40px;">Retour</a>
    </div>

</body>
</html>