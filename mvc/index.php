<?php 

    /* ----- EXEMPLES POUR AJOUTER UN COURS ----- */
    /* ----- url : http://localhost:8090/DWWM_BackEnd/mvc/controllerCours/addOneCours ----- */

    // Affiche tout le chemin de la page
    // echo "Chemin : " . $_SERVER['SCRIPT_FILENAME'];

    // Au chargement de la page, son "chemin"" est : C:/xampp/htdocs/DWWM_BackEnd/mvc/index.php
    // Dans la variable $root, on remplace 'index.php' par 'rien' dans le chemin de la page (on le supprime quoi)
    $root = str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']);
    // Le chemin devient : C:/xampp/htdocs/DWWM_BackEnd/mvc/

    // On définit $root dans une constante ROOT
    define('ROOT', $root);

    // Si une action se trouve dans l'url (ici controllerCours/addOneCours)
    if ($_GET['action']) {

        // explode() créer un tableau en utilisant le séparateur "/" de l'url
        // controllerCours/addOneCours
        // ["controllerCours", "addOneCours"]
        $params = explode("/", $_GET['action']);
        // Le tableau $params contient le controller, l'action, et  les paramètres
        // Ici on a seulement un controller (controllerCours) et une action (addOneCours)
        // $params[0] = controller
        // $params[1] = action

        // Si un controller est présent dans l'url
        if ($params[0] != "") {

            // On l'enregistre dans une variable $controller
            $controller = $params[0];
            // On créer une variable $action vide
            $action = "";

            // Si une action est présente dans l'url
            if (isset($params[1])) {
                // On l'enregistre dans la variable $action
                $action = $params[1];
            }
        }

        // On charge le fichier controller en l'insérant à la fin du chemin
        require_once(ROOT.'controllers/'.$controller.'.php');
        // Ici : C:/xampp/htdocs/DWWM_BackEnd/mvc/controllerCours.php

        // Dans le fichier controllerCours.php, on trouve la fonction addOneCours()
        // Cette fonction a le même nom que l'action de l'url, qu'on a enregistré dans la variable $action
        if (function_exists($action)) {
            if (isset($params[2]) && isset($params[3])) {
                $action($params[2], $params[3]);
            } else if (isset($params[2])) {
                $action($params[2]);
            } else {
                $action();
            }
        } else {
            echo "Page par défaut";
        }

    } else {
        echo "<h1>Bienvenue sur la page d'accueil !</h1>";
        echo "<a href='controllerCours/addOneCours'>Ajouter un cours</a>";
        echo "<br>";
        echo "<a href='controllerEtudiant/addOneEtudiant'>Ajouter un étudiant</a>";
        echo "<br>";
        echo "<a href='controllerCours/getAllCours'>Afficher les cours</a>";
    }

?>