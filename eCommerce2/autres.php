<?php

    require_once("connexion.php");

?>

<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>RetroMachin PHP</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Le site retroMachin en PHP !'>
    <!-- CSS -->
    <link rel='stylesheet' href='css/autres.css'>
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <!-- JAVASCRIPT -->
    <script src='js/main.js' defer></script>
</head>

<body>

    <header>
        <a href="retroMachin.html">ACCUEIL</a>
        <h1>Autres</h1>
        <?php
            $moyennePrix = "SELECT AVG(prix) FROM autres";
            $moyenne = $connexion->query($moyennePrix);
            $laMoyenne = $moyenne->fetch();
            echo "<p class='moyenne'>Prix moyen des consoles : " . (int)$laMoyenne[0] . "€</p>";
        ?>
    </header>

    <main>

        <a href="formAutres.html" class="plus">
            <h4>+</h4>
        </a>

        <?php 
            $sql = "SELECT * FROM autres ORDER BY annee ASC";
            $autres = $connexion->query($sql);
            $resultat = $autres->fetchALL();
        ?>

        <div class="containerCategories">
            
                <?php 
                    foreach ($resultat as $value) {
                        echo "<div class='carteCategorie'><img src='" . $value['image'] . "'><h3>" . $value['nom'] . "</h3><p>" . $value['annee'] . "</p><p class='prix'>" . $value['prix'] . "€</p></div>";
                    }
                ?>
            
        </div>
    </main>

    <footer>
        <p>©️ 2020 - Yannick Biheul</p>
    </footer>

</body>
</html>