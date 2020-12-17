<?php

    require_once("models/model.php");

    function addCours($pcode, $ptitre, $plangage) {
        $bdd = connexionBDD();

        // Requête préparée (plus sécure)
        // Evite les attaques injection SQL
        $sql = $bdd->prepare("INSERT INTO cours (code, titre, langage) VALUES (:code, :titre, :langage)");
        $sql->bindValue(":code", $pcode, PDO::PARAM_STR);
        $sql->bindValue(":titre", $ptitre, PDO::PARAM_STR);
        $sql->bindValue(":langage", $plangage, PDO::PARAM_STR);
        // PDO_PARAM_STR en 3ème argument pas obligatoire
        echo "<p style='color:green'>Données validées !</p>";

        $result = $sql->execute();
        return $result;
    }

?>