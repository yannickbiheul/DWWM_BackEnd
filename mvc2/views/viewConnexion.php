<?php require_once("header.php"); ?>


    <div class="inscription">
        <h2>Connexion</h2>
        <form action="controllerEtudiant/confirmation" method="POST" class="form2">
            <input type="email" name="email" placeholder="email">
            <input type="password" name="mdp" placeholder="Mot de passe">
            <br>
            <input type="submit" value="Ok" class="boutonSubmit">
        </form>
    </div>
    

<?php require_once("footer.php"); ?>
