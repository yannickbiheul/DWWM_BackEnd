<?php include("header.php"); ?>

    <div class="affichageCours">
    <h2>Les Cours</h2>
    <br>
    <table border="1">

    <?php foreach ($ligne as $valeur) { ?>
        <tr><td>
        <?php echo $valeur[0] ?>
        </td><td>
        <?php echo $valeur[1] ?>
        </td><td>
        <?php echo $valeur[2] ?>
        <?php echo $valeur[3] ?>
        </td><td>
        <a href="controllerCours/updateCours/<?php echo $valeur[0] ?>">Modifier</a>
        </td></tr>
    <?php } ?>

    </table>
    </div>

<?php include("footer.php"); ?>