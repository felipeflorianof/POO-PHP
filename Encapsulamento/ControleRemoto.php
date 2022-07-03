<?php

    require_once 'Controlador.php';

        // Atributos

    class ControleRemoto implements Controlador{
        private $volume;
        private $ligado;
        private $tocando;

         // Método especial - Construct

        public function __construct(){
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        // Método especial - Getter

        private function getVolume(){
            return $this->volume;
        }
        private function getLigado(){
            return $this->ligado;
        }
        private function getTocando(){
            return $this->tocando;
        }

        // Método especial - Setter

        private function setVolume($v){
            $this->volume = $v;
        }
        private function setLigado($l){
            $this->ligado = $l;
        }
        private function setTocando($t){
            $this->tocando = $t;
        }

        // Métodos

        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo "<p>----- MENU -----</p>";
            echo "<br>Está ligado? ".($this->getLigado()?"Sim":"Não");
            echo "<br>Está Tocando? ".($this->getTocando()?"Sim":"Não");
            echo "<br><p>Volume: ";

            for($i = 0; $i <= $this->getVolume(); $i+=10){
                echo "|";
            }
            echo "</p>(". $this->getVolume().")";
            echo "<br>";
        }
        public function fecharMenu(){
            echo "Fechando Menu...";
        }
        public function aumentarVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 10);
            }else{
                echo "Não é possível aumentar o volume com o dispositivo desligado.<br>";
            }
        }
        public function diminuirVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 10);
            }else{
                echo "Não é possível diminuir o Volume com o dispositivo desligado.<br>";
            }
        }
        public function mute(){
            if($this->getLigado() && $this->getVolume() > 0){
                $this->setVolume(0);
            }else{
                echo "Não é possível mutar com o dispositivo desligado.<br>";
            }
        }
        public function unmute(){
            if($this->getLigado() && $this->getVolume() == 0){
                $this->setVolume(50);
            }else{
                echo "Não é possível desmutar com o dispositivo desligado.<br>";
            }
        }
        public function play(){
            if($this->getLigado() && !($this->getTocando())){
                $this->setTocando(true);
            }
        }
        public function pause(){
            if($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }
    }



?>