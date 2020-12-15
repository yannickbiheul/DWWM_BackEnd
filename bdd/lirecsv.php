<?php

    try {
        $connex = new PDO("mysql:host=localhost; dbname=essai_import", "root", "");
    } catch (PDOException $e) {
        echo "Problème à la connexion : " . $e->getMessage();
    }

    function read($csv) {
        $file = fopen($csv, 'r');
        while (!feof($file)) {
            $line[] = fgetcsv($file, 1024, ";");
        }
        fclose($file);
        return $line;
    }

    $csv = "myfile.csv";
    $csv = read($csv);
    echo '<pre>';
    print_r($csv);
    echo '</pre>';

    // foreach sur $line
    foreach ($line as $l) {
        $sql = "INSERT INTO 'csv' ('id', 'nom', 'chiffre', 'nombre') VALUES ($l[0], $l[1], $l[2], $l[3])";
    }

?>


