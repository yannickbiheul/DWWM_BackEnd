<?php

    require_once("models/model.php");

    /* Afficher les cours */
    function getCours() {
        $bdd = connexionBDD();
        $sql = "SELECT * FROM cours ORDER BY id";
        $resultGetCours = $bdd->query($sql);

        return $resultGetCours; 
    }

    /* Ajouter un cours */
    function addCours($pcode, $ptitre, $plangage) {
        $bdd = connexionBDD();
        $sql = $bdd->prepare("INSERT INTO cours (code, titre, langage) VALUES (:code, :titre, :langage)");
        $sql->bindValue(":code", $pcode, PDO::PARAM_STR);
        $sql->bindValue(":titre", $ptitre, PDO::PARAM_STR);
        $sql->bindValue(":langage", $plangage, PDO::PARAM_STR);
        
        echo "<p style='color:green'>Données validées !</p>";
        echo "<a href='controllerCours/getAllCours'>Retour aux cours</a>";

        $result = $sql->execute();
        return $result;
    }

    /* Sélectionner un cours */
    function getOneCours($id){
        $bdd = connexionBDD();
        $sql = "SELECT * FROM cours WHERE id=" .$id ;
        $result = $bdd -> query($sql);
        $data = $result -> fetch(PDO::FETCH_ASSOC);

        return $data;
    }

    /* Modifier un cours */
    function updateModelCours($id) {
        if (!empty($_POST['code']) && !empty($_POST['titre']) && !empty($_POST['langage'])) {
            $bdd = connexionBDD();
            $requete = $bdd->prepare('UPDATE cours SET code =:code, titre =:titre, langage =:langage WHERE id =:id');

            $requete->bindValue(':code', $_POST['code']);
            $requete->bindValue(':titre', $_POST['titre']);
            $requete->bindValue(':langage', $_POST['langage']);
            $requete->bindValue(':id', $id);
            
            $resultUpdate = $requete->execute();
            
            return $resultUpdate;
        }
    }

?>