<?php


    abstract class Pessoa{
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;


        public function __construct($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->experiencia = 0;
        }
    
        protected function ganharExp(){
            $this->experiencia += 1;
        }

        public function getnome(){
            return $this->nome;
        }

        public function setnome($nome){
            $this->nome = $nome;
        }

        public function getidade(){
            return $this->idade;
        }

        public function setidade($idade){
            $this->idade = $idade;
        }

        public function getsexo(){
            return $this->sexo;
        }

        public function setsexo($sexo){
            $this->sexo = $sexo;
        }

         public function getexperiencia(){
            return $this->experiencia;
        }

        public function setexperiencia($experiencia){
            $this->experiencia = $experiencia;
    }
}

?>