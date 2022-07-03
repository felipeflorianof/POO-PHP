<?php

    class Funcionario extends Pessoa{
        private $setor;
        private $trabalhando;

        public function mudarTrabalho(){
            if($this->trabalhando == true){
                $this->trabalhando = false;
            }else if($this->trabalhando == false){
                $this->trabalhando = true;
            }
        }

        public function getsetor(){
            return $this->setor;
        }
        public function gettrabalhando(){
            return $this->trabalhando;
        }

        
        public function setsetor($setor){
            $this->setor = $setor;
        }
        public function settrabalhando($trabalhando){
            $this->trabalhando = $trabalhando;
        }
    }
?>