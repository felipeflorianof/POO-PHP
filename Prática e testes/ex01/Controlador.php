<?php

    // O Controlador diz ao usuário o que ele pode fazer

    interface Controlador{
        public function ligar();
        public function desligar();
        public function reiniciar();
        public function abrirMenu();
        public function fecharMenu();
        public function aumentarVolume();
        public function diminuirVolume();
        public function config();
    }
?>