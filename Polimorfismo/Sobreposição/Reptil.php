<?php
require_once 'Animal.php';

    class Reptil extends Animal{
        private $corEscama;

        public function locomover(){
            echo "Repeteis geralmente se rastejam";
        }
        public function alimentar(){
            echo "Comendo Insetos e Plantas";
        }
        public function emitirSom(){
            echo "Som de Reptil";
        }

        public function getcorEscama(){
            return $this->corEscama;
        }


        public function setcorEscama($corEscama){
            $this->corEscama = $corEscama;
        }
    }

?>