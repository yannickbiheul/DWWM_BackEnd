<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objets !</title>
</head>
<body>
    <h1>Titre Principal</h1>

    <?php

    require 'classes/utilisateur.class.php';

    $pierre = new Utilisateur();
    $mathilde = new Utilisateur();

    $pierre->setNom('Pierre');
    $pierre->setPasse('abcdef');

    $mathilde->setNom('Math');
    $mathilde->setPasse(123456);

    echo $pierre->getNom() . '<br>';
    echo $mathilde->getNom() . '<br>';

    ?>

    <p>Un paragraphe</p>
</body>
</html>

