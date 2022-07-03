<?php 
require_once 'Mamifero.php';
    class Canguru extends Mamifero{
        
        public function usarBolsa(){
            echo "Usando Bolsa de Canguru.";
        }
        public function locomover(){
            echo "Saltando.  .  .";
        }
    }

?>