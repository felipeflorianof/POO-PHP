<?php
require_once 'Animal.php';

    class Mamifero extends Animal{
        private $corPelo;

        public function locomover(){
            echo "Mamíferos em geral Correm";
        }
        public function alimentar(){
            echo "Mamando";
        }
        public function emitirSom(){
            echo "Som de Mamífero";
        }

        public function getcorPelo(){
            return $this->corPelo;
        }


        public function setcorPelo($corPelo){
            $this->corPelo = $corPelo;
        }
    }

?>