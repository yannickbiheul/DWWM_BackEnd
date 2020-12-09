<?php
require_once("connexion.php");

    $sql = "INSERT INTO `voitures` (`id`, `marque`, `puissance`, `carburant`) VALUES (NULL, 'mercedes', '140', 'diesel')";
    $connex->query($sql);

?>