<?php

    // Connexion à la base de données
    try {
        $connex = new PDO("mysql:host=localhost; dbname=essai_import", "root", "");
    } catch (PDOException $e) {
        echo "Problème à la connexion : " . $e->getMessage();
    }

    // Fonction printEcho
    function printEcho($variable) {
        echo "<pre>";
        print_r($variable);
        echo "</pre>";
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

    // On parcourt le tableau $csv pour entrer les données dans la base
    for ($i = 0; $i < sizeof($csv); $i++) {
        $sql = "INSERT INTO csv (id, nom, chiffre, nombre) VALUES ('" . $csv[$i][0] . "', '" . $csv[$i][1] . "', '" . $csv[$i][2] . "', '" . $csv[$i][3] . "')";
        $connex->query($sql);
    }

?>


