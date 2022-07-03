<?php
    require_once 'Video.php';
    require_once 'Viewer.php';

    class Visualizacao{
        private $espectador;
        private $filme;

        public function __construct($espectador
        , $filme){
            $this->espectador = $espectador;
            $this->filme = $filme;
            $this->filme->setviews($this->filme->getviews() + 1);
            $this->espectador->settotAssistido($this->espectador->gettotAssistido() + 1);
        }
    
        public function avaliar(){
            $this->filme->setavaliacao(5);
        }
        public function avaliarnota($nota){
            $this->filme->setavaliacao($nota);
        }
        public function avaliarporc($porc){
            $nova = 0;
            if($porc <= 20){
                $nova = 2;
            }else if($porc <= 50){
                $nova = 5;
            }
            else if($porc <= 90 && $porc < 90){
                $nova = 8;
            }else{
                $nova = 10;
            }
        }


        public function getespectador(){
            return $this->espectador;
        }
        public function setespectador($espectador){
            $this->espectador = $espectador;
        }
        public function getfilme(){
            return $this->filme;
        }
        public function setfilme($filme){
            $this->filme = $filme;
        }
    }
   

?>