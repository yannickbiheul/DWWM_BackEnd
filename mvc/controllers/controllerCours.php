<?php

    require_once('models/modelCours.php');

    function addOneCours() {
        if (!empty($_POST['code']) && !empty($_POST['titre']) && !empty($_POST['langage'])) {
            addCours($_POST['code'], $_POST['titre'], $_POST['langage']);
        }
        require_once('views/viewCours.php');
    }

    function getAllCours() {
        $result = getCours();
        $ligne = $result->fetchAll(PDO::FETCH_NUM);
        require_once('views/viewAfficherCours.php');
    }

    function updateCours($id) {

        $data = getOneCours($id);

        $boolMessage = false;

        if (!empty($_POST['code']) && !empty($_POST['titre']) && !empty($_POST['langage'])) {
            $resultUpdate = updateModelCours($id);

            if (!$resultUpdate) {
                $message = "Un problème est survenu, les mises à jour n'ont pas été effectuées !";
                $boolMessage = true;
                header('Location:controllerCours/getAllCours');
            } else {
                $message = "Les mises à jour ont bien été effectuées";
                $boolMessage = true;
            }
        } if (empty($_POST['code']) || empty($_POST['titre']) || empty($_POST['langage'])) {
            $message = "Tous les champs sont requis.";
            $boolMessage = true;
        }
        
        require_once("views/viewUpdateCours.php");
    }
    

?>