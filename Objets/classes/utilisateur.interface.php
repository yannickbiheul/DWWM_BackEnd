<?php

    interface Utilisateur {
        public const ABONNEMENT = 15;
        public function getNom();
        public function setPrixAbo();
        public function getPrixAbo();
    }

?>