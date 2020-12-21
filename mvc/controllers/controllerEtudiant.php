<?php

    require_once('models/modelEtudiant.php');

    function addOneEtudiant() {
        if (!empty($_POST['code']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            addEtudiant($_POST['code'], $_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['email'], $_POST['password']);
        }
        require_once('views/viewEtudiant.php');
    }

    function connectEtudiant($email) {
        $data = getOneEtudiant($email);
        
    }

?>