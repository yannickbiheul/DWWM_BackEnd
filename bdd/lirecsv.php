<?php

    // Connexion à la base de données
    try {
        $connex = new PDO("mysql:host=localhost; dbname=essai_import", "root", "");
    } catch (PDOException $e) {
        echo "Problème à la connexion : " . $e->getMessage();
    }

    // Création d'une fonction pour lire le fichier .csv
    function read($csv) {

        /* fopen() ouvre un fichier ou une URL
        'r' ouvre en lecture seule, et place le pointeur de fichier au début du fichier. */
        $file = fopen($csv, 'r');

        /* feof() teste la fin du fichier.
        Retourne TRUE si le pointeur handle est à la fin du fichier ou si une erreur survient, sinon, retourne FALSE. */
        while (!feof($file)) {

            // fgetcsv() obtient une ligne depuis un pointeur de fichier et l'analyse pour des champs CSV.
            $line[] = fgetcsv($file, 1024, ";");
        }

        // fclose() ferme le fichier.
        fclose($file);
        // On retourne la variable $line.
        return $line;
        
    }

    // On place le chemin d'accès du fichier dans la variable $csv.
    $csv = "myfile.csv";

    // On appelle la fonction read() sur la variable $csv.
    $csv = read($csv);

    // On teste la variable $csv
    echo '<pre>';
    print_r($csv);
    echo '</pre>';

    // On teste la variable $line
    echo '<pre>';
    print_r($line);
    echo '</pre>';

    // foreach sur $line
    foreach ($line as $l) {
        for ($i = 0; $i < $l.length; $i++) {
            $sql = "INSERT INTO 'csv' ('id', 'nom', 'chiffre', 'nombre') VALUES ($l[$i], $l[$i], $l[$i], $l[$i])";
        }
    }

?>


