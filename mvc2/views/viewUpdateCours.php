<?php include("header.php"); ?>

    <h2>Modifier le cours</h2>
    <form action="controllerCours/updateCours/<?php echo $data['id'] ?>" method="POST">
        <input name="code" value="<?= $data["code"] ?>">
        <input name="titre" value="<?= $data['titre'] ?>">
        <input name="langage" value="<?= $data['langage'] ?>">
        <input type="submit" value="ok" class="boutonSubmit">
    </form>

<?php include("footer.php"); ?>