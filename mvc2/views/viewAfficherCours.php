<?php include("header.php"); ?>

    <h2>Les Cours</h2>
    <div class="affichageCours">

        <div class="cours">
            <div class="coursId">ID</div>
            <div class="coursCode">Code</div>
            <div class="coursTitre">Titre</div>
            <div class="coursLangage">Langage</div>
            <div class="coursModif">Modification</div>
        </div>
        
        <?php foreach ($ligne as $valeur) { ?>
            <div class="cours">
                <div class="coursId">
                <?php echo $valeur[0] ?>
                </div>
                <div class="coursCode">
                <?php echo $valeur[1] ?>
                </div>
                <div class="coursTitre">
                <?php echo $valeur[2] ?>
                <a href="controllerCours/inscriptionCours/<?php echo $valeur[0] ?>">Inscription</a>
                </div>
                <div class="coursLangage">
                <?php echo $valeur[3] ?>
                </div>
                <div class="coursModif">
                <a href="controllerCours/updateCours/<?php echo $valeur[0] ?>">Modifier</a>
                </div>
            </div>
        <?php } ?>
    </div>

    <h2>Ajouter un cours</h2>
    <form action="controllerCours/addOneCours" method="POST">
            <input type="text" name="code" placeholder="Code">
            <input type="text" name="titre" placeholder="Titre">
            <input type="text" name="langage" placeholder="Langage">
            <br>
            <input type="submit" class="boutonSubmit">
    </form>


<?php include("footer.php"); ?>