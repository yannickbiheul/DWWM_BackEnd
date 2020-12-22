<?php require_once("header.php"); ?>


    <div class="inscription">
        <h2>Inscription</h2>
        <form action="controllerEtudiant/addOneEtudiant" method="POST" class="form2">
            <input type="text" name="code" placeholder="code">
            <input type="text" name="nom" placeholder="nom">
            <br>
            <input type="text" name="prenom" placeholder="prenom">
            <input type="number" name="age" placeholder="age">
            <br>
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <br>
            <input type="submit" value="Ok" class="boutonSubmit">
        </form>
    </div>
    

<?php require_once("footer.php"); ?>