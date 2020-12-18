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

    function getOneCours($id) {
        $result = getOneLine();
        $ligne = $result;
    }

    function updateCours($id) {

        $data = getOneCours();
        print_r($data);

        require_once('views/viewUpdateCours.php');

        if (!empty($_POST['code']) && !empty($_POST['titre']) && !empty($_POST['langage'])) {
            $resultatUpdate = updateModelCours($id);

            if (!$resultUpdate) {
                $message = "Un problème est survenu, les mises à jour n'ont pas été effectuées !";
                header('Location:controllerCours/getAllCours');
            } else {
                $message = "Les mises à jour ont bien été effectuées";
            }
        } else {
            $message = "Tous les champs sont requis.";
        }
        require_once('views/viewErrors.php');
    }
    

?>