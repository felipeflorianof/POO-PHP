<?php

require_once 'Lutador.php';
class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2){
        if($l1->getcategoria() == $l2->getcategoria() && $l1 != $l2){
            $this->aprovada = true;  
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }else{
            $this->aprovada = false;  
            $this->desafiado = null;
            $this->desafiante = null;
            echo "<br>Luta não pode acontecer.";
        }
    }

    public function lutar(){
        if($this->aprovada = true){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);

            switch ($vencedor) {
                case 0:
                    echo "<br><br>".$this->desafiado->getnome()."e ".$this->desafiante->getnome(). "<br>Empataram<br><br>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<br><br>".$this->desafiado->getnome(). "Venceu!<br>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<br><br>".$this->desafiante->getnome(). " Venceu!<br>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                
                default:
                    echo "[ERRO]";
                    break;
            }
        }
    }

}


?>
