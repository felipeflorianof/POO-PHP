<?php


    require_once 'Pessoa.php';
    require_once 'publicacao.php';

    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;



        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto = false;
        }
        public function folhear($p){
            if($p > $this->totPaginas){
                $this->pagAtual = 0;
            }else{
                $this->pagAtual = $p;
            }
        }
        public function avancarPag(){
            $this->pagAtual ++;
        }
        public function voltarPag(){
            $this->pagAtual --;
        }

        public function __construct($titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $leitor;
        }

        private function gettitulo(){
            return $this->titulo;
        }
        private function getautor(){
            return $this->autor;
        }
        private function gettotPaginas(){
            return $this->totPaginas;
        }
        private function getpagAtual(){
            return $this->pagAtual;
        }
        private function getaberto(){
            return $this->aberto;
        }
        private function getleitor(){
            return $this->leitor;
        }

        private function settitulo($titulo){
            $this->titulo = $titulo;
        }
        private function setautor($autor){
            $this->autor = $autor;
        }
        private function settotPaginas($totPaginas){
            $this->totPaginas = $totPaginas;
        }
        private function setpagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }
        private function setaberto($aberto){
            $this->aberto = $aberto;
        }
        private function setleitor($leitor){
            $this->leitor = $leitor;
        }


        public function detalhes(){
            echo "<hr>Nome do Livro: ". $this->gettitulo().", O Autor é ". $this->getautor(). ".</hr><br>";
            echo "O livro tem ". $this->gettotPaginas(). " Páginas, e quem tá lendo é ". $this->leitor->getnome()."<br>";
            echo "E ele atualmente está na página ". $this->pagAtual."<br>";
        }
    }

?>