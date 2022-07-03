<?php

    class Banco{
        public $numConta;
        protected $tipo;
        public $dono;
        private $saldo;
        private $status;


        public function __construct($s, $st){
            $this->saldo = $s;
            $this->status = $st;
        }


        public function getNumConta(){
            return $this->numConta;
        }

        public function setNumConta($nc){
            $this->numConta = $nc;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($t){
            $this->tipo = $t;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setDono($d){
            $this->dono = $d;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($s){
            $this->saldo = $s;
        }

        public function getStatus(){
            return $this->status;
        }

        public function setStatus($st){
            $this->status = $st;
        }


//--------------------------------------------------// O ideal é que os métodos não escrevam, porém isso foi feito com intuito de facilitar o entendimento e aprendizado.

       
        public function abrirConta($t){
            $this->tipo = $t;
            $this->status = true;
            if($t == "CC"){
                $this->saldo = 50;
                echo "Quando abriu sua conta você ganhou 50R$ Abrindo a sua Conta Corrente (CC) com A gente, Aproveite!</br></br></br>";
            }else if($t == "CP"){
                $this->saldo = 150;
                echo "Quando abriu sua conta você ganhou 150R$ Abrindo a sua Conta Poupança (CP) com A gente, Aproveite!</br>";
            }else{
                echo "[ERRO] Tipo de conta inválida, Verifique seus dados e tente novamente.</br></br>";
                $this->tipo = '';
                echo "Digite 'CC' para selecionar uma Conta Corrente Ou 'CP' Para selecionar uma Conta Poupança.</br></br>";
            }
            
        }

        public function fecharConta(){
           
            if($this->saldo < 0){
                echo "Você deve pagar o que deve ao banco antes de fechar sua conta, caso contrário seu nome ficará sujo.<br><br>";
            }else if($this->saldo > 0){
                echo "Retire todo o dinheiro que você possui na sua conta antes de fechá-la.</br></br>";
            }else{
                $this->status = false;
                echo "Conta fechada.<br><br>";
            }
        }

        public function depositar($valordepositado){
            if($this->status = true){
                $this->saldo = $this->saldo + $valordepositado;
            }
        }

        public function sacar($valorsacado){
            if($this->status = true && $this->saldo >= $valorsacado){
                $this->saldo = ($this->saldo - $valorsacado);
            }else{
                echo "Valor de saque não corresponde ao saldo atual, verifique seu saldo e tente novamente.<br><br><br>";
            }
        }

        public function pagarMensalidade(){
            $this->status = true;
            if($this->tipo == "CC" && $this->saldo > 0){
                $this->saldo = ($this->saldo - 12);
            }else if($this->tipo == "CP" && $this->saldo > 0){
                $this->saldo = ($this->saldo - 20);
            }else{
                echo "Saldo insuficiente, impossível pagar.<br><br>";
            }
        }
    }
/*






7- Quando chamar o pagarMensalidade() essa mensalidade vai ser cobrada diretamente do saldo, sabendo que para $cc a mensalidade é 12R$ e pra $cp é 20R$
5- Para poder fazer um depósito a conta precisa estar aberta, entao o status tenq estar verdadeiro
6- Para sacar dinheiro precisa estar com o status verdadeiro e também precisa ter saldo para poder tirar

4- Pra poder fecharConta() o usuário não pode ter saldo e nem dívida na conta dele
1- O $tipo da conta vai aceitar apenas 2 valores, conta corrente e conta poupança ($cc e $cp)
3- Se abrir uma $cc ganha 50R$ na conta, se abrir uma $cp ganha 150R$ na conta.

2- Quando abrir conta o $status precisa ficar true, enquanto tiver fechada precisa ser false
8- Todos os Atributos terão o seu getter e o seu setter
9- Constructor, e sempre que uma nova conta for criada o seu status vai ser definido como false e o saldo como 0.
*/
?>

