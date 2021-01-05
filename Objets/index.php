<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objets !</title>
</head>
<body style="display:flex; flex-direction:column; justify-content: center; align-items: center;">

    <h1>Titre Principal</h1>

    <?php

    require 'classes/utilisateur.class.php';
    require 'classes/admin.class.php';
    require 'classes/abonne.class.php';

    $pierre = new Admin('Pierre', 'abcdef', 'Sud');
    $mathilde = new Admin('Mathilde', 123456, 'Nord');
    $florian = new Abonne('Florian', 'flotri', 'Est');

    $pierre(1234);
    
    ?>

    <p>Un paragraphe</p>

</body>
</html>

