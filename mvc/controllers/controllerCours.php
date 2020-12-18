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
    

?>