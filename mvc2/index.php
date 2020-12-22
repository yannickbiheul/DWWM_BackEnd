<?php 

    require_once("views/header.php");
    $root = str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']);
    define('ROOT', $root);

    if ($_GET['action']) {
        $params = explode("/", $_GET['action']);

        if ($params[0] != "") {
            $controller = $params[0];
            $action = "";

            if (isset($params[1])) {
                $action = $params[1];
            }
        }

        require_once(ROOT.'controllers/'.$controller.'.php');

        if (function_exists($action)) {

            if (isset($params[2]) && isset($params[3])) {
                $action($params[2], $params[3]);
            } else if (isset($params[2])) {
                print_r($params[2]);
                $action($params[2]);
            } else {
                $action();
            }

        } else {
            echo "Page par défaut";
        }

    } else {
        echo "<h2>Bienvenue sur la page d'accueil !</h2>";
    }

    require_once("views/footer.php");

?>