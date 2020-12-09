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
    <link rel='stylesheet' href='css/sega.css'>
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
        <h1>SEGA</h1>
    </header>

    <main>

        <a href="formSega.html" class="plus">
            <h3>+</h3>
        </a>

        <?php 
            $sql = "SELECT * FROM sega";
            $segas = $connexion->query($sql);
            $resultat = $segas->fetchALL();
        ?>

        <div class="containerCategories">
            
                <?php 
                    foreach ($resultat as $value) {
                        echo "<div class='carteCategorie'><img src='" . $value['image'] . "'><p>" . $value['nom'] . "</p><p>" . $value['description'] . "</p><p>" . $value['annee'] . "</p></div>";
                    }
                ?>
            
        </div>
    </main>

    <footer>
        <p>©️ 2020 - Yannick Biheul</p>
    </footer>

</body>
</html>