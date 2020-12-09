<?php
include("dbg.php");
require_once("connexion.php");

    // Affiche les voitures
    $sql = "SELECT * FROM voitures";
    $voitures = $connex->query($sql);
    $resultat = $voitures->fetchALL();

    echo "<table border=1>";

    foreach ($resultat as $value) {
        echo "<tr><td>" . $value['marque'] . "</td> <td>" . $value['puissance'] . "</td><td>" . $value['carburant'] . "</td></tr>";
    }

    echo "</table>";

?>