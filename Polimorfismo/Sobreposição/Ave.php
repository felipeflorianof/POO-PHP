<?php

require_once 'Animal.php';
    class Ave extends Animal{
    

        public function locomover(){
            echo "Pássaros Voam";
        }
        public function alimentar(){
            echo "Comendo Frutas e sementes";
        }
        public function emitirSom(){
            echo "Som de Pássaro";
        }

        public function fazerNinho(){
            echo "Fazendo Ninho... njn#4$@!jer";
        }

        public function getcorPenas(){
            return $this->corPenas;
        }


        public function setcorPenas($corPenas){
            $this->corPenas = $corPenas;
        }
    }

?>