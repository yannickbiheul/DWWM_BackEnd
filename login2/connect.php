<?php
    // Connexion à la base de données
        try {
            $connexion = new PDO("mysql:host=localhost; dbname=login", "root", "");
        } catch (PDOException $e) {
            echo "Problème à la connexion : " . $e->getMessage();
        }

        function monPrint($var) {
            echo "<pre>";
            print_r($var);
            echo "</pre>";
        }
?>