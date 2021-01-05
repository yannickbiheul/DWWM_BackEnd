<?php

    class Montgolfiere implements Amarrable {

        public $montgolfiere_name;
        public $masse;

        public function __construct($n, $m) {
            $this->montgolfiere_name = $n;
            $this->masse = $m;
        }

        public function getNom() {
            return $this->montgolfiere_name;
        }

        public function getMasse() {
            return $this->masse;
        }

        public function nbrCordes() {
            return $this->masse / 10;
        }
    }


?>