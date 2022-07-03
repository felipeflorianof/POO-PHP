<?php

// Herança para diferença

require_once 'Pessoa.php';
    class Aluno extends Pessoa{

        //Atributos

        private $matricula;
        private $curso;


        // GETTER 

        public function getmatricula(){
            return $this->matricula;
        }
        public function getcurso(){
            return $this->curso;
        }


        // SETTER

        public function setmatricula($matricula){
            $this->matricula = $matricula;
        }
        public function setcurso($curso){
            $this->curso = $curso;
        }

        // Métodos

        public function pagarMensalidade(){
            echo "Mensalidade Paga no valor de R$ 1000 em nome de ". $this->getnome(). "<br>";
        }
    }


?>