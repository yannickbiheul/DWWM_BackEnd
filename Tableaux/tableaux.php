<?php

    function dbg($x) {
        echo "<pre>";
        print_r($x);
        echo "</pre>";
    }

    $langages = ["c" =>"Java", "b"=>"PHP", "a"=>"SmallTalk"];
    $systemes = ["w" =>"windows", "x"=>"linux"];

    // Trier le tableau dans l'ordre par clés
    ksort($langages);
    print_r($langages);
    echo "<br>";
    // Trier le tableau dans l'ordre par valeurs
    asort($langages);
    print_r($langages);

    // Affiche les tableaux en propre
    dbg($langages);

    // Affiche les clés
    dbg(array_keys($langages));
    // Affiche les valeurs
    dbg(array_values($langages));

    // Supprimer une variable
    unset($langages['a']);
    print_r($langages);

    echo "<br>";

    // Caster une variable
    $nbr = "5.21";
    echo "<br>";
    echo gettype($nbr);
    echo "<br>";
    $decimal = (float) $nbr;
    echo $decimal;
    echo "<br>";
    echo gettype($decimal);

    // Merger des tableaux
    dbg(array_merge($langages, $systemes));

    // Afficher la taille d'un tableau
    dbg(sizeof($langages));

    // Vérifier qu'une clé existe dans un tableau
    if (array_key_exists("w", $systemes)) {
        echo "La clé w existe !";
    } else {
        echo "La clé w n'existe pas !";
    }

?>
