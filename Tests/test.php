<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Essai PHP</title>
</head>
<body>

<?php

    echo "<h1>Tableau !!!</h1>";
    $tableau = array("un", "deux", "trois", "quatre");
    var_dump($tableau);

    $tableau2 = array(
        "un" => "motUn",
        "deux" => 2,
        "trois" => "motTrois",
        "quatre" => 45.6,
        "Server" => $_SERVER['SERVER_NAME']
    );

    echo "<pre>";
    var_dump($tableau2);
    echo "</pre>";

    echo "<p>$tableau[0]</p>";

?>

</body>
</html>