<?php

    class Caneta{
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;
    


    function rabiscar(){
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

    function tampar(){
        $this->tampada = true;
    }

    function destampar(){
        $this->tampada = false;
    }
}

?>