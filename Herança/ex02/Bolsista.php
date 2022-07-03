<?php
require_once 'Aluno.php';

    class Bolsista extends Aluno{
        private $bolsa;
        
        public function renovarBolsa(){
            echo "<p>Bolsa renovada.</p>";
        }
        public function pagarMensalidade(){
            echo "<p>Mensalidade Paga no valor de R$ 500 em nome de ". $this->getnome(). " pelo fato de ser bolsista portador da matrícula: ". $this->getmatricula(). "</p>";
        }



        public function getbolsa(){
            return $this->bolsa;
        }
        public function setbolsa($bolsa){
            $this->bolsa = $bolsa;

            
    }
    }
?>