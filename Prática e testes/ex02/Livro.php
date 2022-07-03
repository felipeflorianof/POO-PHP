<?php

    require_once 'Pessoa.php';
    require_once 'Publicacao.php';

    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function __construct($titulo, $autor, $totPaginas, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $leitor;
        }

        public function gettitulo(){
            return $this->titulo;
        }
        public function getautor(){
            return $this->autor;
        }
        public function gettotPaginas(){
            return $this->totPaginas;
        }
        public function getpagAtual(){
            return $this->pagAtual;
        }
        public function getaberto(){
            return $this->aberto;
        }
        public function getleitor(){
            return $this->leitor;
        }



        public function settitulo($titulo){
            $this->titulo = $titulo;
        }
        public function setautor($autor){
            $this->autor = $autor;
        }
        public function settotPaginas($totPaginas){
            $this->totPaginas = $totPaginas;
        }
        public function setpagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }
        public function setaberto($aberto){
            $this->aberto = $aberto;
        }
        public function setleitor($leitor){
            $this->leitor = $leitor;
        }


        public function detalhes(){
            echo "-----------". $this->titulo."-----------";
            echo "<br>Autor: ".$this->autor;
            echo "<br>Total de Páginas: ".$this->totPaginas;
            echo "<br>O leitor ".$this->leitor->getnome()." está na página:".$this->pagAtual."</br>";
            echo "--------------------------------------------</br></br>";
        }


        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto = false;
            $this->pagAtual = 0;
        }
        public function folhear($p){
            if(!$this->aberto){
                if ($this->totPaginas > $p && $this->totPaginas < 0) {
                    $this->pagAtual = 0;
                }  
            }else{
                $this->pagAtual = $p;
            }
        }
        public function avancarPag(){
            $this->pagAtual += 1;
        }
        public function voltarPag(){
            $this->pagAtual -= 1;
        }
    }


?>