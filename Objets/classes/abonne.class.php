<?php

    class Abonne extends Utilisateur {

        protected $user_name;
        protected $user_region;
        protected $prix_abo;
        protected $user_pass;

        public function __construct($n, $p, $r) {
            $this->user_name = $n;
            $this->user_pass = $p;
            $this->user_region = $r;
        }

        public function getNom() {
            echo $this->user_name;
        }

        public function getPrixAbo() {
            echo $this->prix_abo;
        }

        public function setPrixAbo() {
            if ($this->user_region === 'Sud') {
                return $this->prix_abo = UTILISATEUR::ABONNEMENT / 2;
            } else {
                return $this->prix_abo = UTILISATEUR::ABONNEMENT;
            }
        }
    }

?>