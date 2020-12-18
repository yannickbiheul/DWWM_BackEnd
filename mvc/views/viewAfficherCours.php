<?php include("header.php"); ?>

    <h2>Les Cours</h2>
    <table border="1">

    <?php foreach ($ligne as $valeur) { ?>
        <tr><td>
        <?php echo $valeur[0] ?>
        <?php echo $valeur[1] ?>
        </td><td>
        <?php echo $valeur[2] ?>
        <?php echo $valeur[3] ?>
        <a href="controllerCours/updateCours.$valeur[0]">Modifier</a>
        </td></tr>
    <?php } ?>

    </table>

<?php include("footer.php"); ?>