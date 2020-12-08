<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        input {
            width: 200px;
            margin: 10px;
            border: 1px solid #ccc;
            box-shadow: 4px 4px 4px #ccc;
            border-radius: 5px;
        }
        p {
            display: inline;
        }
    </style>
</head>
<body>

<?php

$question[0] = "Quelle est la couleur du cheval blanc d'Henri IV ?";
$question[1] = "Quel est le jour de repos ?";
$question[2] = "Quelle est la saison la plus chaude ?";

$bonne_rep[0] = "blanc";
$bonne_rep[1] = "dimanche";
$bonne_rep[2] = "été";

$vide = "";
$mauvais = " Mauvaise réponse";
$bon = " Exact";
$compteur = 0;

?>
    
    <form action="" method="POST">
        <label for="q1">1°) <?php echo $question[0] ?></label><br>
        <input type="text" id="q1" name="q1">

        <?php 
            if (!isset($_POST['q1'])) {
                echo "<p>$vide</p>";
            } else if ($_POST['q1'] == $bonne_rep[0]) {
                echo "<p style='color:green'>$bon</p>";
                $compteur++;
            } else {
                echo "<p style='color:red'>$mauvais</p>";
            }
        ?><br>

        <label for="q2">2°) <?php echo $question[1] ?></label><br>
        <input type="text" id="q2" name="q2">

        <?php 
            if (!isset($_POST['q2'])) {
                echo "<p>$vide</p>";
            } else if ($_POST['q2'] == $bonne_rep[1]) {
                echo "<p style='color:green'>$bon</p>";
                $compteur++;
            } else {
                echo "<p style='color:red'>$mauvais</p>";
            }
        ?><br>

        <label for="q3">3°) <?php echo $question[2] ?></label><br>
        <input type="text" id="q3" name="q3">

        <?php 
            if (!isset($_POST['q3'])) {
                echo "<p>$vide</p>";
            } else if ($_POST['q3'] == $bonne_rep[2]) {
                echo "<p style='color:green'>$bon</p>";
                $compteur++;
            } else {
                echo "<p style='color:red'>$mauvais</p>";
            }
        ?><br>

        <input type="submit" value="OK !">
        <?php
            if (!isset($_POST['q1']) && !isset($_POST['q2']) && !isset($_POST['q3'])) {
                echo "<p>$vide</p>";
            } else {
                if ($compteur <2) {
                    echo "<p>Looser ! Vous avez $compteur bonne réponse.</p>";
                } else {
                    echo "<p>Vous avez $compteur bonnes réponses.</p>";
                }
            }
        ?>
    </form>



</body>
</html>

