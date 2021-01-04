<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objets !</title>
</head>
<body style="display:flex; flex-direction:column; justify-content: center; align-items: center;">
    <h1>Titre Principal</h1>
    <form action="index.php" method="POST">
        <input type="text" name="nom" id="nom" placeholder="Nom" style="margin:10px 0;"><br>
        <input type="password" name="pass" id="pass" placeholder="Mot de passe" style="margin:10px 0;"><br>
        <input type="submit" value="Envoyer" style="margin:10px 0;">
    </form>

    <?php

    require 'classes/utilisateur.class.php';

    

    if (isset($_POST['nom']) && isset($_POST['pass'])) {
        $pierre = new Utilisateur($_POST['nom'], $_POST['pass']);
        echo "<p style='color:green; margin:40px; font-size:2em;'>" . $pierre->getNom() . '</p><br>';
    } else {
        echo "";
    }
    

    ?>

    <p>Un paragraphe</p>
</body>
</html>

