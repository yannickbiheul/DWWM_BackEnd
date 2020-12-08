<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Réponse Formulaire</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='La réponse au formulaire.html'>
    <!-- CSS -->
    <link rel='stylesheet' href='css/style.css'>
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <!-- JAVASCRIPT -->
    <script src='js/main.js' defer></script>
</head>

<body>

    <?php
    $date = date("d-m-y");
    $heure = date("H:i");
    ?>
    <div class="result">
        <?php print("Nous sommes le $date, il est $heure"); ?>
        <h1>Bonjour <?php echo htmlspecialchars($_POST['prenom']) ?> !</h1>
        <p>Vous vous appelez <?php echo htmlspecialchars($_POST['prenom']) . " " . htmlspecialchars($_POST['nom']) ?></p>
        <p>Votre mail est : <?php echo htmlspecialchars($_POST['email']) ?></p>
        <p>Vous avez choisi comme mot de passe : <?php echo htmlspecialchars($_POST['password']) ?></p>
        <p>Votre numéro de téléphone est le : <?php echo htmlspecialchars($_POST['tel']) ?></p>
        <p>Vous êtes né le : <?php echo htmlspecialchars($_POST['date']) ?></p>
        <p>Votre message : <?php echo htmlspecialchars($_POST['message']) ?></p>
    </div>
    

</body>
</html>