<?php


    abstract class Animal{
        private $peso;
        private $idade;
        private $membros;

         public function locomover(){
           
        }
         public function alimentar(){
          
        }
         public function  emitirSom(){
          
        }



        public function getpeso(){
            return $this->peso;
        }
        public function getidade(){
            return $this->idade;
        }
        public function getmembros(){
            return $this->membros;
        }


        public function setpeso($peso){
            $this->peso = $peso;
        }
        public function setidade($idade){
            $this->idade = $idade;
        }
        public function setmembros($membros){
            $this->membros = $membros;
        }
        
        
    }


?>