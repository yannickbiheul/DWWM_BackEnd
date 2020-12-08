<?php

    $Json = file_get_contents("sega.json");
    // Converts to an array 
    $sega = json_decode($Json, true);
    // var_dump($myarray); // prints array

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
        <div class="containerCategories">
            <div class="carteCategorie">
                <img src="<?php echo $sega[0]["photo"] ?>" alt="sega">
                <h2><?php echo $sega[0]["nom"] ?></h2>
                <p><?php echo $sega[0]["description"] ?></p>
                <p><?php echo $sega[0]["annee"] ?></p>
                <p class="prix"><?php echo $sega[0]["prix"] ?> €</p>
            </div>
            <div class="carteCategorie">
                <img src="<?php echo $sega[1]["photo"] ?>" alt="sega">
                <h2><?php echo $sega[1]["nom"] ?></h2>
                <p><?php echo $sega[1]["description"] ?></p>
                <p><?php echo $sega[1]["annee"] ?></p>
                <p class="prix"><?php echo $sega[1]["prix"] ?> €</p>
            </div>
            <div class="carteCategorie">
                <img src="<?php echo $sega[2]["photo"] ?>" alt="sega">
                <h2><?php echo $sega[2]["nom"] ?></h2>
                <p><?php echo $sega[2]["description"] ?></p>
                <p><?php echo $sega[2]["annee"] ?></p>
                <p class="prix"><?php echo $sega[2]["prix"] ?> €</p>
            </div>
            <div class="carteCategorie">
                <img src="<?php echo $sega[3]["photo"] ?>" alt="sega">
                <h2><?php echo $sega[3]["nom"] ?></h2>
                <p><?php echo $sega[3]["description"] ?></p>
                <p><?php echo $sega[3]["annee"] ?></p>
                <p class="prix"><?php echo $sega[3]["prix"] ?> €</p>
            </div>
            <div class="carteCategorie">
                <img src="<?php echo $sega[4]["photo"] ?>" alt="sega">
                <h2><?php echo $sega[4]["nom"] ?></h2>
                <p><?php echo $sega[4]["description"] ?></p>
                <p><?php echo $sega[4]["annee"] ?></p>
                <p class="prix"><?php echo $sega[4]["prix"] ?> €</p>
            </div>
            <div class="carteCategorie">
                <img src="<?php echo $sega[5]["photo"] ?>" alt="sega">
                <h2><?php echo $sega[5]["nom"] ?></h2>
                <p><?php echo $sega[5]["description"] ?></p>
                <p><?php echo $sega[5]["annee"] ?></p>
                <p class="prix"><?php echo $sega[5]["prix"] ?> €</p>
            </div>
        </div>
    </main>

    <footer>
        <p>©️ 2020 - Yannick Biheul</p>
    </footer>

</body>
</html>