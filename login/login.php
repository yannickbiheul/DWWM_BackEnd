<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Login</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Se connecter au site !'>
    <!-- CSS -->
    <link rel='stylesheet' href='css/style.css'>
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
</head>

<body>

    <?php

        // Connexion à la base de données
        try {
            $connexion = new PDO("mysql:host=localhost; dbname=login", "root", "");
        } catch (PDOException $e) {
            echo "Problème à la connexion : " . $e->getMessage();
        }

        // Vérification données entrées ou non
        if ((!isset($_POST['name'])) && (!isset($_POST['email'])) && (!isset($_POST['password']))) {
            // Si les données ne sont pas entrées, afficher le formulaire d'inscription
            echo "<p>Bonjour, inconnu !</p>";
            echo "<h1>Inscription</h1>\n 
            <form method='POST' action='login.php'>\n
            <label for='name'>Prénom</label>\n
            <input type='text' name='name'>\n
            <label for='email'>email</label>\n
            <input type='email' name='email'>\n
            <label for='password'>Mot de passe</label>\n
            <input type='password' name='password'>\n
            <input type='submit'>\n
            </form>";
        } else {
            // Si les données sont entrées, afficher le formulaire de connexion
            echo "<p>Bonjour " . $_POST['name'] . " ! </p>";
            echo "Votre compte à bien été validé !";
            echo "<h1>Connexion</h1>\n 
            <form method='POST' action='accueil.php'>\n
            <label for='email'>email</label>\n
            <input type='email' name='email'>\n
            <label for='password'>Mot de passe</label>\n
            <input type='password' name='password'>\n
            <input type='submit'>\n
            </form>";

            // Enregistrer les données dans des variables
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Crypter le mot de passe
            $password_encrypted = password_hash($password, PASSWORD_BCRYPT);

            // Entrer ces variables dans la base de données, table "user"
            $sql = "INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES (NULL, '" . $name . "', '" . $email . "', '" . $password_encrypted . "');";
            $connexion->query($sql);
        }

    ?>

</body>
</html>