<?php

    require_once("models/model.php");

    function addEtudiant($pcode, $pnom, $pprenom, $page) {
        $bdd = connexionBDD();

        // Requête préparée (plus sécure)
        // Evite les attaques injection SQL
        $sql = $bdd->prepare("INSERT INTO etudiants (code, nom, prenom, age) VALUES (:code, :nom, :prenom, :age)");
        $sql->bindValue(":code", $pcode, PDO::PARAM_STR);
        $sql->bindValue(":nom", $pnom, PDO::PARAM_STR);
        $sql->bindValue(":prenom", $pprenom, PDO::PARAM_STR);
        $sql->bindValue(":age", $page, PDO::PARAM_INT);
        // PDO_PARAM_STR en 3ème argument pas obligatoire
        echo "<p style='color:green'>Données validées !</p>";

        $result = $sql->execute();
        return $result;
    }

?>