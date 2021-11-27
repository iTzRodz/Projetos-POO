<?php
class Conta{
    private $agencia; 
    private $conta; 
    private $digito;
    private $saldo; 
    private $nomeCliente; 
    private $cpfCliente; 
    private $banco; 
    private $statusCliente;
    private $clienteAtivo; 
    private $clienteBloqueado;

    public function __construct($nome, $agencia, $conta, $digito, $banco, $status) {
        $this->nomeCliente = $nome;
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->digito = $digito;
        $this->banco = $banco;
        $this->statusCliente = $status;
    }

    public function setStatusCliente() {
        if ($this->statusCliente == 1) {
            $this->clienteAtivo = True;
            $this->clienteBloqueado = False;
        } else {
            $this->clienteBloqueado = True;
            $this->clienteAtivo = False;
        }
    }

    public function getStatusCliente() {
        return $this->setStatusCliente();
    }

   public function getClienteAtivo() {
        return $this->clienteAtivo;
    }

    public function getClienteBloqueado() {
        return $this->clienteBloqueado;
    } 

    public function setCpf($cpf) {
        $this->cpfCliente = $cpf;
    }

    public function getCpf() {
        return $this->cpfCliente;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function mostrarStatus() {
        if ($this->getClienteAtivo() == True) {
           echo "Nome: {$this->nomeCliente} <br>Agencia: {$this->agencia}<br>Conta: {$this->conta}<br>Digito: {$this->digito}<br>Banco: {$this->banco} <br> Valor atual: R$ {$this->saldo} <hr> ";
            return $this->getStatusCliente(); 
        } else {
            echo "Cliente não está cadastrado em nosso sistema. Ou está com sua conta bloqueada";
        }
    }

    public function dadosUsuario() {
        $this->mostrarStatus();
    }

    public function sacar($dinheiroSaque) {
        if ($this->getClienteAtivo() == True) {
            if ($dinheiroSaque <= $this->saldo && $this->saldo >= 0) {
                echo "<br>Valor atual: R$ {$this->getSaldo()} <br>";
                $this->saldo -= $dinheiroSaque;
                echo "Você sacou: R$ {$dinheiroSaque} Valor atual depois do saque: R$ {$this->getSaldo()}<hr><br>";
            } else{
                echo "<h1>Tentativa de saque negada!</h1>  Você não pode sacar R$ {$dinheiroSaque} <br>Valor atual R$ {$this->getSaldo()} por favor inserir um valor menor ou igual ao seu saldo atual. <hr>";
            } 
        } 
    } 

    public function deposito($dinheiroDeposito) {
        if ($this->getClienteAtivo() == True) {
            if($dinheiroDeposito > 0) {
                echo "Valor atual: R$ {$this->getSaldo()}";
                $this->saldo += $dinheiroDeposito;
                echo "<br>Você depositou R$ {$dinheiroDeposito} Valor depois do deposito: R$ {$this->getSaldo()}<hr><br>";
            } else {
                echo "<h1>Tentativa de deposito negada!</h1>Valor invalido, por favor inserir um valor maior que 0<hr><br>";
            } 
        }      
    } 

} 

$cliente = new Conta("Rodolfo", "nome da agencia", "Numero da conta aqui", "Digito aqui", "Nome do banco aqui", 0);
$cliente->setSaldo(-5);
$cliente->getStatusCliente();
$cliente->dadosUsuario(); 
$cliente->sacar(100.55);
$cliente->deposito(50.10);


?>