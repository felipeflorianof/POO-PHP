<?php

    class Pessoa{
        private $nome;
        private $idade;
        private $sexo;
         

        public function __construct($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }


        public function getnome(){
            return $this->nome;
        }
        public function getidade(){
            return $this->idade;
        }
        public function getsexo(){
            return $this->sexo;
        }


        public function setnome($nome){
            $this->nome = $nome;
        }
        public function setidade($idade){
            $this->idade = $idade;
        }
        public function setsexo($sexo){
            $this->sexo = $sexo;
        }


        public function fazerAniver(){
            echo "Parabéns! Você tinha ". $this->getidade(). " anos, Mas agora você tem ". $this->setidade($this->getidade() + 1). $this->getidade(). " Anos!</br>";
        }
    }
?>