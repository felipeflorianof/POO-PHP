<?php

    require_once 'Controlador.php';

    class Celular implements Controlador{
        private $ligado;
        private $bateria;
        private $volume;


        // Métodos especiais:


        // __construct() - Decide o que vai ser feito por padrão toda vez que um novo elemento for criado.

        public function __construct(){
            $this->ligado = false;
            $this->bateria = 100;
        }


        // Getter - literalmente "pega" o valor dentro da função

        private function getLigado(){
            return $this->ligado;
        }
        private function getBateria(){
            return $this->bateria;
        }
        private function getVolume(){
            return $this->volume;
        }
        

        // Setter - literalmente "coloca" o valor dentro da função.

        private function setLigado($l){
            $this->ligado = $l;
        }
        private function setBateria($b){
            $this->bateria = $b;
        }
        private function setVolume($v){
            $this->volume = $v;
        }


        // Métodos

        public function ligar(){
            $this->setLigado(true);
            echo "<br>Celular Ligado!<br>";
        }
        public function desligar(){
            $this->setLigado(false);
            echo "<br>Desligando aparelho...<br>";
        }
        public function reiniciar(){
            if($this->getLigado()){
                $this->setLigado(false);
                echo "<br>Reiniciando aparelho...<br>";
                $this->setLigado(true);
                echo "<br>Aparelho reiniciado.<br><br>";

            }else{
                echo "<br>Ligue o aparelho para poder reiniciá-lo.<br>";
            }
        }
        public function abrirMenu(){
            if($this->getLigado() && $this->getBateria() > 5){
                
                echo "<br><br>O celular está ". ($this->getLigado()?"Ligado.":"Desligado.");
                echo "<br>Volume: ". $this->getVolume();
                echo "<br>".$this->getBateria()."% de bateria.<br><br>";
                echo "<br>----- MENU -----";
                echo "<br><br><br>WhatsApp<br>Facebook<br>Instagram<br>Youtube<br>Galeria<br>Configuraçôes<br>";
            }else{
                echo "<br>Aparelho desligado ou sem bateria.<br>";
            }
        }
        public function fecharMenu(){
                echo "<br>Fechando Menu...<br>";
                
                
        }
        public function aumentarVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 20);
            }else{
                echo "<br>Não é possivel Aumentar o volume com o celular desligado.<br>";
            }
        }
        public function diminuirVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 20);
            }else{

            }
        }

        public function config(){
            echo "<br>Settings<br><br>- Network & Internet -<br>- Connected devices -<br>- Apps & notifications -<br>- Battery -<br>- Display -<br>- Sound -<br>- Storage -<br>- Security & Location -<br>- Users & accounts -<br>- Accessibility -<br>- Google -<br>- System -<br>";
        }
    }
?>