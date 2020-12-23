<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title></title>
    <!-- DESCRIPTION -->
    <meta name='description' content=''>
    <base href="http://localhost:8090/DWWM_BackEnd/mvc2/">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <a href='controllerEtudiant/espaceMembre'><div class="user">
        <?php 
            if(isset($_SESSION['name'])) {
                echo $_SESSION['name'];
            } else {
                echo "";
            }
        ?>
    </div></a>

    <header>
        <h1>Métis en mieux</h1>
        <nav>
            <a href="http://localhost:8090/DWWM_BackEnd/mvc2/">Accueil</a>
            <a href="controllerCours/getAllCours">Cours</a>
            <a href="controllerEtudiant/getAllEtudiants">Étudiants</a>
            <a href="controllerEtudiant/addOneEtudiant">Inscription</a>
            <a href="controllerEtudiant/connexion">Connexion</a>
        </nav>
    </header>

    
    

    