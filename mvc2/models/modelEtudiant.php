<?php

    require_once("models/model.php");

    function getEtudiants() {
        $bdd = connexionBDD();
        $sql = "SELECT * FROM etudiants ORDER BY id";
        $resultGetCours = $bdd->query($sql);
        return $resultGetCours; 
    }

    function addEtudiant($pcode, $pnom, $pprenom, $page, $pemail, $ppassword) {
        $bdd = connexionBDD();

        // Cryptage du mot de passe
        $password_encrypted = password_hash($ppassword, PASSWORD_BCRYPT);

        // Requête préparée (plus sécure)
        // Evite les attaques injection SQL
        $sql = $bdd->prepare("INSERT INTO etudiants (code, nom, prenom, age, email, mdp) VALUES (:code, :nom, :prenom, :age, :email, :mdp)");
        $sql->bindValue(":code", $pcode, PDO::PARAM_STR);
        $sql->bindValue(":nom", $pnom, PDO::PARAM_STR);
        $sql->bindValue(":prenom", $pprenom, PDO::PARAM_STR);
        $sql->bindValue(":age", $page, PDO::PARAM_INT);
        $sql->bindValue(":email", $pemail, PDO::PARAM_STR);
        $sql->bindValue(":mdp", $password_encrypted, PDO::PARAM_STR);
        // PDO_PARAM_STR en 3ème argument pas obligatoire
        echo "<p style='color:green' class='valide'>Données validées !</p>";

        $result = $sql->execute();
        return $result;
    }

    function getOneEtudiant($email){

        $bdd = connexionBDD();

        $sql = "SELECT prenom, email, mdp FROM etudiants WHERE email='" . $email . "'";

        $result = $bdd -> query($sql);

        $data = $result -> fetch(PDO::FETCH_ASSOC);

        return $data;

    }

    function getAllForOneEtudiant($email){

        $bdd = connexionBDD();

        $sql = "SELECT * FROM etudiants WHERE email='" . $email . "'";

        $result = $bdd -> query($sql);

        $data = $result -> fetch(PDO::FETCH_ASSOC);

        return $data;

    }

?>