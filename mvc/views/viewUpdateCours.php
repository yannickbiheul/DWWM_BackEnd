<?php include("header.php") ?>


<form action="controllerCours/updateCours/<?php echo $data['id'] ?>" method="POST">
    <input name="code" value="<?= $data["code"] ?>">
    <input name="titre" value="<?= $data['titre'] ?>">
    <input name="langage" value="<?= $data['langage'] ?>">
    <input type="submit" value="ok">
</form>

<p><?php echo $message; ?></p>


<?php include("footer.php"); ?>