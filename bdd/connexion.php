<?php

    try {
        $connex = new PDO("mysql:host=localhost; dbname=garage", "root", "");
    } catch (PDOException $e) {
        echo "Problème à la connexion : " . $e->getMessage();
    }
    

?>