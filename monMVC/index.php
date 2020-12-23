<?php

    // Démarrer une session
    session_start();

    require_once("views/header.php");
    
    // Remplacer index.php dans l'adresse
    $root = str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']);
    define('ROOT', $root);

    // Vérifier qu'une action existe
    if ($_GET['action']) {
        // Transformer cette action en tableau
        $params = explode("/", $_GET['action']);

        // Si le 1er paramètre n'est pas vide
        if ($params[0] != "") {
            // On lui donne le rôle de controller
            $controller = $params[0];
            $action = "";

            // Si le 2ème paramètre est défini
            if (isset($params[1])) {
                // On lui donne le rôle de fonction (action)
                $action = $params[1];
            }
        }

        // On ouvre le fichier défini par le controller ci-dessus
        require_once(ROOT.'controllers/'.$controller.'.php');

        // Si une fonction (action) existe
        if (function_exists($action)) {

            // Si les 3èmes et 4èmes paramètres sont définis
            if (isset($params[2]) && isset($params[3])) {
                // On les donne comme arguments à la fonction
                $action($params[2], $params[3]);

            // Si seul le 3ème paramètre est défini
            } else if (isset($params[2])) {
                // On le donne comme argument à la fonction
                $action($params[2]);
            // Sinon
            } else {
                $action();
            }
        } else {
            // On affiche un message disant qu'on se trouve sur la page par défaut
            echo "<h2>Page par défaut</h2>";
        }

    } else {
        require_once("views/viewAccueil.php");
    }

    require_once("views/footer.php");

?>