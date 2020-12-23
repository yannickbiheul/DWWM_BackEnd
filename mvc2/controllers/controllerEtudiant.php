<?php

    require_once('models/modelEtudiant.php');


    /* Afficher Etudiants */
    function getAllEtudiants() {
        $result = getEtudiants();
        $ligne = $result->fetchAll(PDO::FETCH_NUM);
        require_once('views/viewEtudiants.php');
    }


    /* Inscription */
    function addOneEtudiant() {
        if (!empty($_POST['code']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            addEtudiant($_POST['code'], $_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['email'], $_POST['password']);
        }
        require_once('views/viewInscription.php');
    }


    /* Connexion */
    function connexion() {
        require_once('views/viewConnexion.php');
    }

    function confirmation() {
        
        if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
            $email = $_POST['email'];
            $password = $_POST['mdp'];
            $data = getOneEtudiant($email);

            if (password_verify($password, $data['mdp'])) {
                $_SESSION['name'] = $data['prenom'];
                $_SESSION['email'] = $data['email'];
                echo "<p class='succes'>Excellent " . $data['prenom'] . ", vous êtes connecté ! </p>";
            } else {
                echo "<p class='erreur'>Mot de passe incorrect</p>";
            }

        } else {
            echo "<p>Tous les champs sont requis !</p>";
        }
        require_once('views/viewConfirmation.php');
    }


    /* Espace Membre */
    function espaceMembre() {
        if (isset($_SESSION['name'])) {
            $email = $_SESSION['email'];
            $data = getAllForOneEtudiant($email);
            require_once('views/viewEspaceMembre.php');
        } else {
            require_once('views/viewConnexion.php');
        }
    }


    /* Deconnexion */
    function stop() {
        session_destroy();
        $_SESSION['name'] = "";
        require_once('views/viewStop.php');
    }

?>