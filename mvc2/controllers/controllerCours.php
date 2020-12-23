<?php

    require_once('models/modelCours.php');

    /* Afficher les cours */
    function getAllCours() {
        $result = getCours();
        $ligne = $result->fetchAll(PDO::FETCH_NUM);
        require_once('views/viewAfficherCours.php');
    }

    /* Ajouter un cours */
    function addOneCours() {
        $message = "";
        if (!empty($_POST['code']) && !empty($_POST['titre']) && !empty($_POST['langage'])) {
            addCours($_POST['code'], $_POST['titre'], $_POST['langage']);
            $message = "Cours ajouté !";
        } else {
            $message = "Tous les champs sont requis !";
        }
        require_once('views/viewAjouterCours.php');
    }

    /* Modifier un cours */
    function updateCours($id) {
        $data = getOneCours($id);

        if (!empty($_POST['code']) && !empty($_POST['titre']) && !empty($_POST['langage'])) {
            $resultUpdate = updateModelCours($id);

            if (!$resultUpdate) {
                $message = "Un problème est survenu, les mises à jour n'ont pas été effectuées !";
                header('Location:controllerCours/getAllCours');

            } else {
                $message = "Les mises à jour ont bien été effectuées";
            }
            
        } if (empty($_POST['code']) || empty($_POST['titre']) || empty($_POST['langage'])) {
            $message = "Tous les champs sont requis.";
        }
        
        require_once("views/viewUpdateCours.php");
    }

    /* S'inscrire à un cours */
    function inscriptionCours($id) {

        if (isset($_SESSION['name'])) {
            require_once("views/viewInscriptionCours.php");
        } else {
            require_once("views/viewErrorConnexion.php");
        }
        $data = getOneCours($id);
        
    }


?>