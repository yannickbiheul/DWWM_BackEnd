<?php

    class Bateau implements Amarrable {

        public $bateau_name;
        public $masse;

        public function __construct($n, $m) {
            $this->bateau_name = $n;
            $this->masse = $m;
        }

        public function getNom() {
            return $this->bateau_name;
        }

        public function getMasse() {
            return $this->masse;
        }

        public function nbrCordes() {
            return $this->masse / 25;
        }
    }


?>