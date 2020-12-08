<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
</head>
<body>

<?php

    if (isset($_GET['fruit']) && is_array($_GET['fruit'])) {
        foreach($_GET['fruit'] as $fruit) {
            echo "<p>" . $fruit . ".</p>";
        }
    } else {
        echo "Aucun fruit choisi !";
    }

?>
    
</body>
</html>

