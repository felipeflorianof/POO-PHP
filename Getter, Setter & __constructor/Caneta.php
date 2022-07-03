<?php

    class Caneta{
        
        public $modelo;
        private $ponta;
        public $tampada;
        public $cor;
        private $carga;


        public function __construct($m, $c, $p, $t, $ca){ // Ao invés de __construct também é possivel usar o nome da Classe, nesse caso seria: public function Caneta() {}
          $this->modelo = $m; // || $this->setModelo($m);
          $this->cor = $c; // || $this->setCor($c);
          $this->ponta = $p; // || $this->setPonta($p);
          $this->tampada = $t;
          $this->carga = $ca;
        }


        public function getModelo(){
            return $this->modelo;
        }
  
        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getPonta(){
            return $this->ponta;
        }

        public function setPonta($p){
            $this->ponta = $p;
        }
    }

?>