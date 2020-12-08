<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Essai PHP</title>
</head>
<body>

<?php

    echo "<h1>Récupération de données de formulaire</h1>";
    echo "Bonjour " . htmlspecialchars($_POST['fname']) . " " . htmlspecialchars($_POST['lname']) . " ! ";

?>

</body>
</html>