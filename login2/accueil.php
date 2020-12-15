<?php

    require_once("connect.php");

?>

<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Accueil</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Un essai de login'>
    <!-- CSS -->
    <link rel='stylesheet' href='css/style.css'>
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
</head>

<body>

    <?php

        if ((isset($_POST['emailC'])) && (isset($_POST['passwordC']))) {
            $userName = $_POST['name'];
        } else {
            $userName = "inconnu";
        }

    ?>

    <div class="accueil">
        <h1>Bienvenue sur le site, <?php echo $userName; ?> !</h1>
        <a href="inscription.php">Inscription</a>
        <a href="connexion.php">Connexion</a>
        <a href="liste.php">Liste</a>
    </div>

</body>
</html>