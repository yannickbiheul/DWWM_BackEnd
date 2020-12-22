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
        require_once('views/viewConfirmation.php');
        
        if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
            $email = $_POST['email'];
            $password = $_POST['mdp'];
            $data = getOneEtudiant($email);

            if (password_verify($password, $data['mdp'])) {
                echo "<p class='succes'>Excellent " . $data['prenom'] . ", vous êtes connecté ! </p>";
                $_SESSION['name'] = $data['prenom'];
                echo "<a href='http://localhost:8090/DWWM_BackEnd/mvc2/' class='lien'>Retourner à l'accueil</a>";
                echo "<a href='controllerCours/getAllCours' class='lien'>Voir les cours</a>";
                echo "<a href='controllerEtudiant/getAllEtudiants' class='lien'>Voir les étudiants</a>";
            } else {
                echo "<p class='erreur'>Mot de passe incorrect</p>";
            }

        } else {
            echo "<p>Tous les champs sont requis !</p>";
        }
    }

    /* Deconnexion */
    function stop() {
        session_destroy();
        require_once('views/viewStop.php');
    }

?>