<?php

    require_once('models/modelEtudiant.php');

    function addOneEtudiant() {
        if (!empty($_POST['code']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age'])) {
            addEtudiant($_POST['code'], $_POST['nom'], $_POST['prenom'], $_POST['age']);
        }
        require_once('views/viewEtudiant.php');
    }

?>