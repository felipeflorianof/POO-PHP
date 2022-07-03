<?php

    require_once 'AcoesVideo.php';

    class Video implements AcoesVideo{
        private $titulo;
        private $avaliacao; 
        private $views;
        private $curtidas;
        private $reproduzindo;
    
        public function __construct($titulo){
            $this->titulo = $titulo;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

        public function play(){
            $this->reproduzindo = true;
        }
        public function pause(){    
            $this->reproduzindo = false;
        }
        public function like(){
            $this->curtidas ++;
        }

        public function gettitulo(){
            return $this->titulo;
        }
        public function settitulo($titulo){
            $this->titulo = $titulo;
        }
        public function getavaliacao(){
            return $this->avaliacao;
        }
        public function setavaliacao($avaliacao){
            $media = ($this->avaliacao + $avaliacao) / $this->views;
            $this->avaliacao = $avaliacao;
        }
        public function getviews(){
            return $this->views;
        }
        public function setviews($views){
            $this->views = $views;
        }
        public function getcurtidas(){
            return $this->curtidas;
        }
        public function setcurtidas($curtidas){
            $this->curtidas = $curtidas;
        }
        public function getreproduzindo(){
            return $this->reproduzindo;
        }
        public function setreproduzindo($reproduzindo){
            $this->reproduzindo = $reproduzindo;
        }
    }

?>