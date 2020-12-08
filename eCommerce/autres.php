<?php

    $Json = file_get_contents("autres.json");
    // Converts to an array 
    $autres = json_decode($Json, true);
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
        <h1>AUTRES</h1>
    </header>

    <main>
        <div class="containerCategories">
            <div class="carteCategorie">
                <img src="<?php echo $autres[0]["photo"] ?>" alt="autres">
                <h2><?php echo $autres[0]["nom"] ?></h2>
                <p><?php echo $autres[0]["description"] ?></p>
                <p><?php echo $autres[0]["annee"] ?></p>
                <p class="prix"><?php echo $autres[0]["prix"] ?> €</p>
            </div>
            <div class="carteCategorie">
                <img src="<?php echo $autres[1]["photo"] ?>" alt="autres">
                <h2><?php echo $autres[1]["nom"] ?></h2>
                <p><?php echo $autres[1]["description"] ?></p>
                <p><?php echo $autres[1]["annee"] ?></p>
                <p class="prix"><?php echo $autres[1]["prix"] ?> €</p>
            </div>
            <div class="carteCategorie">
                <img src="<?php echo $autres[2]["photo"] ?>" alt="autres">
                <h2><?php echo $autres[2]["nom"] ?></h2>
                <p><?php echo $autres[2]["description"] ?></p>
                <p><?php echo $autres[2]["annee"] ?></p>
                <p class="prix"><?php echo $autres[2]["prix"] ?> €</p>
            </div>
            <div class="carteCategorie">
                <img src="<?php echo $autres[3]["photo"] ?>" alt="autres">
                <h2><?php echo $autres[3]["nom"] ?></h2>
                <p><?php echo $autres[3]["description"] ?></p>
                <p><?php echo $autres[3]["annee"] ?></p>
                <p class="prix"><?php echo $autres[3]["prix"] ?> €</p>
            </div>
            <div class="carteCategorie">
                <img src="<?php echo $autres[4]["photo"] ?>" alt="autres">
                <h2><?php echo $autres[4]["nom"] ?></h2>
                <p><?php echo $autres[4]["description"] ?></p>
                <p><?php echo $autres[4]["annee"] ?></p>
                <p class="prix"><?php echo $autres[4]["prix"] ?> €</p>
            </div>
            <div class="carteCategorie">
                <img src="<?php echo $autres[5]["photo"] ?>" alt="autres">
                <h2><?php echo $autres[5]["nom"] ?></h2>
                <p><?php echo $autres[5]["description"] ?></p>
                <p><?php echo $autres[5]["annee"] ?></p>
                <p class="prix"><?php echo $autres[5]["prix"] ?> €</p>
            </div>
        </div>
    </main>

    <footer>
        <p>©️ 2020 - Yannick Biheul</p>
    </footer>

</body>
</html>