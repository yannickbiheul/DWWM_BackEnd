<?php include("header.php"); ?>

    <h2>Les Étudiants</h2>
    <div class="affichageEtudiants">

        <div class="etudiants">
            <div class="etudiantId">ID</div>
            <div class="etudiantPrenom">Prénom</div>
            <div class="etudiantNom">Nom</div>
            <div class="etudiantAge">Âge</div>
            <div class="etudiantMail">Email</div>
        </div>
        
        <?php foreach ($ligne as $valeur) { ?>
            <div class="etudiants">
                <div class="etudiantId">
                <?php echo $valeur[0] ?>
                </div>
                <div class="etudiantPrenom">
                <?php echo $valeur[3] ?>
                </div>
                <div class="etudiantNom">
                <?php echo $valeur[2] ?>
                </div>
                <div class="etudiantAge">
                <?php echo $valeur[4] ?>
                </div>
                <div class="etudiantMail">
                <?php echo $valeur[5] ?>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="boutons">
        <a href="controllerEtudiant/addOneEtudiant" class="lien">Inscription</a>
        <a href="controllerEtudiant/connexion" class="lien">Connexion</a>
    </div>


<?php include("footer.php"); ?>