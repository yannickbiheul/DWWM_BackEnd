<?php

    function connexionBDD() {
        try {
            $bdd = new PDO("mysql:host=localhost; dbname=formations", "root", "");
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $bdd;
        } catch(PDOException $e) {
            echo $e;
        }
    }
    
?>