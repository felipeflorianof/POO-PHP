<?php
    class Monitor{
        var $marca;
        var $polegadas;
        var $cor;
        var $ligado;
   

    function ligado(){
        $this->ligado = true;
        print str_repeat("-", 26). "</br>";
        echo "------Ligando Monitor---------</br>";
        print str_repeat("-", 26). "</br>";

    }

    function desligado(){
        $this->ligado = false;
        print str_repeat("-", 26). "</br>";
        echo "------Desligando Monitor---------</br>";
        print str_repeat("-", 26). "</br>";

    }
}
?>