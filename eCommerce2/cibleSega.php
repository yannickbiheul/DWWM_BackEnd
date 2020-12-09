<?php

    require_once("connexion.php");

?>
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>RetroMachin BDD</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='RetroMachin avec base de données'>
    <!-- CSS -->
    <link rel='stylesheet' href='css/retrobdd.css'>
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <!-- JAVASCRIPT -->
    <script src='js/retrobdd.js' defer></script>
</head>

<body>

    <?php 
    
        $infos = [$_POST['nom'], $_POST['description'], $_POST['annee'], $_POST['image'], $_POST['prix']]; 

        foreach ($infos as $v) {
            echo "<p>" . $v . "</p>";
        }

        echo "<p>La console " . $_POST['nom'] . " a bien été ajoutée !</p>";

        echo "<a href='formSega.html'>RETOUR</a>";

        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $annee = $_POST['annee'];
        $image = $_POST['image'];
        $prix = $_POST['prix'];

        $sql = "INSERT INTO `sega` (`id`, `nom`, `description`, `annee`, `image`, `prix`) VALUES (NULL, '" . $nom . "', '" . $description . "', $annee, '" . $image . "', $prix);";
        $connexion->query($sql);

        

    ?>
    

</body>
</html>