<?php

    require_once 'Livro.php';

    interface publicacao{
        public function abrir();
        public function  fechar();
        public function avancarPag();
        public function voltarPag();
    }


?>