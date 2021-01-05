<?php

    class Port {
        
        public $port_name;
        public $cordes;

        public function __construct($n, $c) {
            $this->port_name = $n;
            $this->cordes = $c;
        }

        public function getNom() {
            return $this->port_name;
        }

        public function accueilEngin($e) {
            echo "<p>Il faut " . $e->nbrCordes() . " cordes pour amarrer cet engin.</p>";
            if ($e->nbrCordes() <= 50) {
                echo "<p>Le " . $this->port_name . " a " . $this->cordes . " cordes, le " . $e->getNom() . " est donc le bienvenue !</p>";
            } else {
                echo "<p>Le " . $this->port_name . " a " . $this->cordes . " cordes, le " . $e->getNom() . " ne peut donc pas amarrer !</p>";
            }
            
        }
    }

?>