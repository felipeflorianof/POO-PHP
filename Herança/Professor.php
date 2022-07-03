<?php

    class Professor extends Pessoa{
        private $especialidade;
        private $salario;

        public function receberAumento($ra){
            $this->salario += $ra;
        }


        public function getespecialidade(){
            return $this->especialidade;
        }
        public function getsalario(){
            return $this->salario;
        }

        
        public function setespecialidade($especialidade){
            $this->especialidade = $especialidade;
        }
        public function setsalario($salario){
            $this->salario = $salario;
        }
    }


?>