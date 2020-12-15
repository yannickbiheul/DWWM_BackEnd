<?php

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

    <!-- INSCRIPTION -->

    <div class='liste'>

    <form method="POST" action="">
        <h2>Inscription</h2>
        <label for="name" class="prenom">Prénom</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="password">Mot de passe</label>
        <input type="password" name="password">
        <input type="submit" class="submit">
        <?php

            // Vérification de l'entrée des données
            if ((isset($_POST['name'])) && (isset($_POST['email'])) && (isset($_POST['password']))) {

                // Enregistrement des données dans des variables
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                // Cryptage du mot de passe
                $password_encrypted = password_hash($password, PASSWORD_BCRYPT);

                // Enregistrement des données dans la base, table "user"
                $sql = "INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES (NULL, '" . $name . "', '" . $email . "', '" . $password_encrypted . "');";
                $connexion->query($sql);

                // Création d'un pargraphe pour confirmer l'inscription
                echo "<p class='succes'>Inscription enregistrée !</p>";

            }
        ?>
    </form>

    <a href="accueil.php" class="lienListe">Retour</a>

    </div>

</body>
</html>