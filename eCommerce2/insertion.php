<?php
require_once("connexion.php");

    $nom = "Master System";
    $description = "1ère console de Sega";
    $annee = 1990;
    $image = "images/masterSystem.jpg";
    $prix = 30;

    $sql = "INSERT INTO `sega` (`id`, `nom`, `description`, `annee`, `image`, `prix`) VALUES (NULL, $nom, $description, $annee, $image, $prix);";
    $connexion->query($sql);

?>







