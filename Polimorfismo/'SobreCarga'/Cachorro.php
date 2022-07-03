<?php

    require_once 'Lobo.php';

    class Cachorro extends Lobo{

            // SobreCarga em PHP não existe, existe algumas 'gambiarras', esse método normal é o recomendado pelo Gustavo Guanabara.

        public function emitirSom(){
            echo "au! au! au!";
        }

        public function reagirFrase($frase){
            if($frase === "Comida" || $frase === "Passear"){
                echo "Abanando calda, Feliz";
            }else{
                echo "Rosnando, Latindo";
            }
        }
        public function reagirHora($hora){
            if($hora < 12 ){
                echo "Abanando calda";
            }else if($hora > 18){
                echo "Ignorado...";
            }else{
                echo "Latindo e correndo";
            }
        }
        public function reagirDono($dono){
            if($dono){
                echo "Abanando calda...";
            }else{
                echo "Rosnando";
            }
        }
        public function reagirIdadePeso($idade, $peso){
            if($idade < 5 && $peso < 10){
                echo "Cachorro novo, abanando a calda";
            }else if($idade > 10 && $peso < 10){
                echo "Cachorro velho rosnando";
            }else{
                echo "Cachorro lhe ignorando";
            }
        }
    }


?>