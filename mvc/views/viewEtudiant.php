<?php require_once("header.php"); ?>

    <div class="inscription">
        <h3>Inscription</h3>
        <form action="addOneEtudiant" method="POST">
            <input type="text" name="code" placeholder="code">
            <input type="text" name="nom" placeholder="nom">
            <br>
            <input type="text" name="prenom" placeholder="prenom">
            <input type="number" name="age" placeholder="age">
            <br>
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <br>
            <input type="submit" value="Ok">
        </form>
    </div>

    <div class="connexion">
        <h3>Connexion</h3>
        <form action="addOneEtudiant" method="POST">
                <input type="text" name="code" placeholder="code">
                <input type="text" name="nom" placeholder="nom">
                <br>
                <input type="text" name="prenom" placeholder="prenom">
                <input type="number" name="age" placeholder="age">
                <br>
                <input type="email" name="email" placeholder="email">
                <input type="password" name="password" placeholder="password">
                <br>
                <input type="submit" value="Ok">
            </form>
    </div>
    

<?php require_once("footer.php"); ?>