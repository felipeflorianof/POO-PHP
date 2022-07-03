<?php
require_once 'Animal.php';

    class Peixe extends Animal{
        private $corEscama;




        public function locomover(){
            echo "Peixes Nadam";
        }
        public function alimentar(){
            echo "Comendo substâncias marítmas";
        }
        public function emitirSom(){
            echo "Peixe não faz som";
        }

        public function soltarBolha(){
            echo "Soltando Bolha......";
        }

        public function getcorEscama(){
            return $this->corEscama;
        }


        public function setcorEscama($corEscama){
            $this->corEscama = $corEscama;
        }
    }

?>