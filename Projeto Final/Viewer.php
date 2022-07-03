<?php

    require_once 'Pessoa.php';

    class Viewer extends Pessoa{

        private $login;
        private $totAssistido;

        public function __construct($nome, $idade, $sexo, $login){
            parent::__construct($nome, $idade, $sexo);
            
            $this->login = $login;
            $this->totAssistido = 0;
        }


        public function viuMaisUm(){
            $this->totAssistido += 1;
        }

        public function getlogin(){
            return $this->login;
        }
        public function gettotAssistido(){
            return $this->totAssistido;
        }

        public function setlogin($login){
            $this->login = $login;
        }
        public function settotAssistido($totAssistido){
            $this->totAssistido = $totAssistido; 
        }
    }


?>