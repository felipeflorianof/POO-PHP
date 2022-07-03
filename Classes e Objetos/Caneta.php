<?php

    class Caneta{
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;
    


    public function rabiscar(){
      if($this->tampada == true){
        echo "[ERRO] Caneta tampada, destampe para escrever.";
      }else if($this->carga === 0){
        echo "A caneta não possui tinta para escrever.";
      }else if($this->carga > 0 && $this->carga <= 5){
        echo "Caneta falhando, verifique a quantidade de tinta.";
      }else{
        echo "escrevendo...............................................";
      }
    }

    public function tampar(){
        $this->tampada = true;
    }

    public function destampar(){
        $this->tampada = false;
    }
}

?>