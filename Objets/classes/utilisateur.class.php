<?php

    // Création d'une classe Utilisateur
    abstract class Utilisateur {
        // Propriétés de la classe
        protected $user_name;
        protected $user_pass;
        protected $user_region;
        protected $prix_abo;
        public const ABONNEMENT = 15;

        // Destructeur
        public function __destruct() {
            // code
        }
        
        abstract public function setPrixAbo();

        public function getNom() {
            echo $this->user_name;
        }

        public function getPrixAbo() {
            echo $this->prix_abo;
        }

        public function __invoke($arg) {
            echo "Un objet à été utilisé comme une fonction.<br>Argument passé : " . $arg . "<br><br>";
        }

    }

?>