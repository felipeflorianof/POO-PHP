<?php



    class Pessoa{
        private $nome;
        private $idade;
        private $sexo;


        public function __construct($n, $i, $s){
            $this->nome = $n;
            $this->idade = $i;
            $this->sexo = $s;
        }

        public function getnome(){
            return $this->nome;
        }
        private function getidade(){
            return $this->idade;
        }
        private function getsexo(){
            return $this->sexo;
        }

        private function setnome($n){
            $this->nome = $n;
        }
        private function setidade($i){
            $this->idade = $i;
        }
        private function setsexo($s){
            $this->sexo = $s;
        }


        public function fazerAniver(){
            $this->setidade($this->getidade() + 1);
            Echo "Parabéns! você está completando ". $this->getidade(). " anos de idade.";
        }
    }

?>