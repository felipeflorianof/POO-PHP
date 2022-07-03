<?php


    abstract class Pessoa{
        private $nome;
        private $idade;
        private $sexo;



        function getnome(){
            return $this->nome;
        }
        function getidade(){
            return $this->idade;
        }
        function getsexo(){
            return $this->sexo;
        }


        function setnome($nome){
            $this->nome = $nome;
        }
        function setidade($idade){
            $this->idade = $idade;
        }
        function setsexo($sexo){
            $this->sexo = $sexo;
        }


        final function fazerAniv(){
            $this->setidade($this->getidade() + 1);
        }
    }


?>