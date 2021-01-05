<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Port en PHP</title>
</head>
<body>
    
    <h1>La POO en PHP : Les Ports.</h1>

    <?php

        require 'classes/Amarrable.interface.php';
        require 'classes/port.class.php';
        require 'classes/bateau.class.php';
        require 'classes/montgolfiere.class.php';

        $port1 = new Port('Port de Brest', 50);
        echo "<p>Un nouveau port à été ajouté : C'est le " . $port1->getNom() . ".</p>";

        $bateau1 = new Bateau("Mer d'alors", 500);
        echo "<p>Un bateau vient d'arriver au " . $port1->getNom() . ", c'est le " . $bateau1->getNom() . " !</p>";

        $port1->accueilEngin($bateau1);

        $mont1 = new Montgolfiere("Vent d'ici", 550);
        echo "<p>Une montgolfière vient d'arriver au " . $port1->getNom() . ", c'est le " . $mont1->getNom() . " !</p>";

        $port1->accueilEngin($mont1);

    ?>


</body>
</html>