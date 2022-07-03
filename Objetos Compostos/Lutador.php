<?php

    

    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria; // Peso leve, Peso médio e peso pesado. 
        private $vitorias;
        private $derrotas;
        private $empates;



        public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){

            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setpeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;

        }

        // GETTER

        public function getnome(){
            return $this->nome;
        }
        private function getnacionalidade(){
            return $this->nacionalidade;
        }
        private function getidade(){
            return $this->idade;
        }
        private function getaltura(){
            return $this->altura;
        }
        private function getpeso(){
            return $this->peso;
        }
        public function getcategoria(){
            return $this->categoria;
        }
        private function getvitorias(){
            return $this->vitorias;
        }
        private function getderrotas(){
            return $this->derrotas;
        }
        private function getempates(){
            return $this->empates;
        }

        // SETTER

        private function setnome($no){
            $this->nome = $no;
        }
        private function setnacionalidade($na){
            $this->nacionalidade = $na;
        }
        private function setidade($id){
            $this->idade = $id;
        }
        private function setaltura($al){
            $this->altura = $al;
        }
        private function setpeso($pe){
            $this->peso = $pe;
            $this->setcategoria();
        }
        public function setcategoria(){ // Podemos fazer if, for, switch, while, do while dentro dos setters sem problema, isso é bem comum na programação do dia-dia.
            


            if($this->getpeso() < 52.2){
              $this->categoria = "Inválido";
            }
            else if($this->getpeso() <= 70.3){
                $this->categoria = "Leve";
            }
            else if($this->getpeso() <= 83.9){
                $this->categoria = " Médio";
            }
            else if($this->getpeso() <= 120.2){
                $this->categoria = " Pesado";
            } else{
                $this->categoria = " Inválido";
            }

            /*
            switch ($this->categoria) {
                case $this->getpeso() < 52.2:
                    $this->setcategoria('Inválido');
                    break;
                case $this->getpeso() <= 70.3:
                    $this->setcategoria('Leve');
                    break; 
                case $this->getpeso() <= 83.9:
                    $this->setcategoria('Médio');
                    break;
                case $this->getpeso() <= 120.2:
                    $this->setcategoria('Pesado');
                    break;
                default:
                    $this->setcategoria('Inválido');
                    break;
            }*/
        }
        private function setvitorias($vi){
            $this->vitorias = $vi;
        }
        private function setderrotas($de){
            $this->derrotas = $de; 
        }
        private function setempates($em){
            $this->empates = $em;
        }



        public function apresentar(){
           echo "<br>Lutador: ". $this->getnome();
           echo "<br>Origem: ". $this->getnacionalidade();
           echo  "<br>". $this->getidade(). " Anos.";
           echo  "<br>".$this->getaltura(). " M de altura.";
           echo "<br>Pesando ". $this->getpeso(). "KG";
           echo "<br>Ganhou: ". $this->getvitorias();
           echo "<br>Perdeu: ". $this->getderrotas();
           echo "<br>Empatou: ". $this->getempates()."<br>";
        }

        public function status(){
            echo $this->getnome();
            echo " É um peso ". ($this->getcategoria())." e tem: <br>";
            echo $this->getvitorias(). " Vitórias!<br>";
            echo $this->getderrotas(). " Derrotas!<br>";
            echo $this->getempates(). " Empates!<br><br>";
        }

        public function ganharLuta(){
            $this->setvitorias($this->getvitorias() + 1);
        }

        public function perderLuta(){
            $this->setderrotas($this->getderrotas() + 1);
        }

        public function empatarLuta(){
            $this->setempates($this->getempates() + 1);
        }

    }

?>