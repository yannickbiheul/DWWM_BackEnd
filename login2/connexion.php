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

    <!-- CONNEXION -->

    <div class='liste'>

    <form method="POST" action="">
        <h2>Connexion</h2>
        <label for="emailC">Email</label>
        <input type="email" name="emailC">
        <label for="passwordC">Mot de passe</label>
        <input type="password" name="passwordC">
        <input type="submit" class="submit">
        <?php
            
            // Vérification de l'entrée des données
            if ((isset($_POST['emailC'])) && (isset($_POST['passwordC']))) {

                // Enregistrement des données dans des variables
                $emailC = $_POST['emailC'];
                $passwordC = $_POST['passwordC'];

                // Sélection de la colonne correspondante
                $sql2 = "SELECT * FROM user WHERE email = '" . $emailC . "'";
                $user = $connexion->query($sql2);
                // $user->fetchALL();
                var_dump($user);
                
                // Vérification concordance mots de passe
                // if (password_verify($passwordC, $user[3])) {
                //     echo "<p class='succes'>Mot de passe correct</p>";
                // } else {
                //     echo "<p class='erreur'>Mot de passe incorrect</p>";
                // }

            }
        ?>
    </form>

    <a href="accueil.php" class="lienListe">Retour</a>

    </div>

</body>
</html>