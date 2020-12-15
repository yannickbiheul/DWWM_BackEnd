<?php

    session_start();
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
        if(isset($_SESSION['name'])) {
            echo "<h3 style='margin-bottom: 40px;'>" . $_SESSION['name'] . ", voici la liste des personnes inscrites.</h3>";
        } else {
            echo "<h3 style='margin-bottom: 40px;'>Inconnu, voici la liste des personnes inscrites.</h3>";
        }
    ?>

    <?php

        // Insertion d'une commande SQL dans une variable $sql
        $sql = "SELECT * FROM user";
        // Avec le $connexion de connect.php, enregistrer la requête dans la variable $users
        $users = $connexion->query($sql);
        // fetchALL() retourne un tableau contenant toutes les lignes récupérées dans $users
        $tableauUsers = $users->fetchALL();

        // On créer un tableau HTML
        echo "<table border=1>";
        // On parcourt le tableau $tableauUsers avec un foreach
        foreach ($tableauUsers as $value) {
            // Ici, on insère chacune de ces valeurs dans une ligne de tableau HTML
            echo "<tr><td>" . $value['id'] . "</td><td>" . $value['name'] . "</td><td>" . $value['email'] . "</td></tr>";
        }
        // On ferme le tableau HTML
        echo "</table>";

    ?>

    <a href="accueil.php" class="lienListe">Retour</a>

    </div>

</body>
</html>