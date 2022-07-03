
<?php

class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;



    public function __construct(){
        $this->status = false;
        $this->saldo = 0;
    }

    public function abrirConta($t){
        $this->settipo($t);
        $this->setstatus(true);

        if($this->gettipo() == "CC"){
            $this->setsaldo(50);
        } else if($this->gettipo() == "CP"){
            $this->setsaldo(150);
        }
    }

    public function fecharConta(){

        if($this->getsaldo() > 0){
            echo "[ERRO] Retire todo o valor que você possui em conta antes de fechá-la.</br>";
        }else if($this->getsaldo() < 0){
            echo "[ERRO] Você não pode fechar sua conta estando em débito, pague o que deve ao banco e então feche sua conta</br>";
        }else{
            $this->setstatus(false);
        }


    }

    public function depositar($valordepositar){
        $this->getstatus(true);
        $this->setsaldo($valordepositar + $this->getsaldo());
    }

    public function sacar($valorsacar){
        $this->getstatus(true);
        if($this->getsaldo() >= $valorsacar){
            $this->setsaldo($this->getsaldo() - $valorsacar);
        }else{
            echo "[ERRO] Você não pode sacar um valor maior que o seu saldo atual.";
        }
    }

    public function pagarMensalidade(){
        if($this->gettipo() == "CC" && $this->getsaldo() > 0){
            $this->setsaldo($this->getsaldo() - 12);
        }else if($this->gettipo() == "CP" && $this->getsaldo() > 0){
            $this->setsaldo($this->getsaldo() - 20);
        }else{
            echo "Saldo insuficiente para realizar o pagamento mensal.</br>";
        }
    }



    //---------GETTER----------//
    public function getnumConta(){
        return $this->numConta;
    }

    public function gettipo(){
        return $this->tipo;
    }

    public function getdono(){
        return $this->dono;
    }

    public function getsaldo(){
        return $this->saldo;
    }

    public function getstatus(){
        return $this->status;
    }

    //---------SETTER----------//

    public function setnumConta($n){
        $this->numConta = $n;
    }

    public function settipo($t){
        $this->tipo = $t;
    }

    public function setdono($d){
        $this->dono = $d;
    }

    public function setsaldo($s){
        $this->saldo = $s;
    }

    public function setstatus($st){
        $this->status = $st;
    }

}




/*
x- Quando chamar o pagarMensalidade() essa mensalidade vai ser cobrada diretamente do saldo, sabendo que para $cc a mensalidade é 12R$ e pra $cp é 20R$
x- Para poder fazer um depósito a conta precisa estar aberta, entao o status tenq estar verdadeiro
x- Para sacar dinheiro precisa estar com o status verdadeiro e também precisa ter saldo para poder tirar

x- Pra poder fecharConta() o usuário não pode ter saldo e nem dívida na conta dele
x- O $tipo da conta vai aceitar apenas 2 valores, conta corrente e conta poupança ($cc e $cp)
x- Se abrir uma $cc ganha 50R$ na conta, se abrir uma $cp ganha 150R$ na conta.

x- Quando abrir conta o $status precisa ficar true, enquanto tiver fechada precisa ser false
x- Todos os Atributos terão o seu getter e o seu setter
x- Constructor, e sempre que uma nova conta for criada o seu status vai ser definido como false e o saldo como 0.
*/

?>