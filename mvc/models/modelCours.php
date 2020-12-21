<?php

    require_once("models/model.php");

    function addCours($pcode, $ptitre, $plangage) {
        $bdd = connexionBDD();

        // Requête préparée (plus sécure)
        // Evite les attaques injection SQL
        $sql = $bdd->prepare("INSERT INTO cours (code, titre, langage) VALUES (:code, :titre, :langage)");
        $sql->bindValue(":code", $pcode, PDO::PARAM_STR);
        $sql->bindValue(":titre", $ptitre, PDO::PARAM_STR);
        $sql->bindValue(":langage", $plangage, PDO::PARAM_STR);
        // PDO_PARAM_STR en 3ème argument pas obligatoire
        echo "<p style='color:green'>Données validées !</p>";

        $result = $sql->execute();
        return $result;
    }

    function getCours() {
        $bdd = connexionBDD();
        $sql = "SELECT * FROM cours ORDER BY id";
        $resultGetCours = $bdd->query($sql);
        return $resultGetCours; 
    }

    function getOneCours($id){

        $bdd = connexionBDD();

        $sql = "SELECT * FROM cours WHERE id=" .$id ;

        $result = $bdd -> query($sql);

        $data = $result -> fetch(PDO::FETCH_ASSOC);

        return $data;

    }

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