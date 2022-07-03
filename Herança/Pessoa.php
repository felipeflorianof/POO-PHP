<?php

    class Pessoa{
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniv(){
            $this->setidade($this->getidade() + 1);
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
    }


?>