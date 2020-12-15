<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Accueil</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='L'accueil du login'>
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

        // Enregistrement des données envoyées
        $emailUser = $_POST['email'];
        $passwordUser = $_POST['password'];

        // Récupération des données dans la base
        $req = "SELECT * FROM user WHERE email = $emailUser";
        $verif = $connexion->query($req);
        echo $verif;

    ?>

</body>
</html>