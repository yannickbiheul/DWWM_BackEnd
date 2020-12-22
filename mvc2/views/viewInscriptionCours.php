<?php include("header.php"); ?>

    <h2>Inscription à un cours</h2>
    <p><?php echo $_SESSION['name'] ?>, confirmez-vous l'inscription à ce cours ?</p>
    <div class="boutons">
        <a href="#">Confirmer</a>
        <a href="controllerCours/getAllCours">Annuler</a>
    </div>
    


<?php include("footer.php"); ?>