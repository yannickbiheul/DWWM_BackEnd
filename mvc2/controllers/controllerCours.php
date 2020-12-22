<?php

    require_once('models/modelCours.php');

    function getAllCours() {
        $result = getCours();
        $ligne = $result->fetchAll(PDO::FETCH_NUM);
        require_once('views/viewAfficherCours.php');
    }

    function addOneCours() {
        if (!empty($_POST['code']) && !empty($_POST['titre']) && !empty($_POST['langage'])) {
            addCours($_POST['code'], $_POST['titre'], $_POST['langage']);
        }
        require_once('views/viewAjouterCours.php');
    }

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

?>