<?php
require_once("Funcionario.php");

class Vendedor extends Funcionario{
    protected $setor;
    protected $comissao;
    protected $qtdVendas;
    protected $salarioBruto;
    protected $metaVendas = 50;

    public function __construct($nome, $registro, $salarioFixo, $setor, $comissao, $qtdVendas) {
        parent::__construct($nome, $registro, $salarioFixo);
        $this->qtdVendas = $qtdVendas;
        $this->setSetor($setor);
        $this->setComissao($comissao);
        $this->set_qtdVendas($qtdVendas);
    }
        
        public function getSalarioFixo() {
            parent::getSalarioFixo();
            return number_format($this->salarioFixo, 2, ',', '.');
        }
    
        public function setSetor($setor) {
            $this->setor = $setor;
        }

        public function getSetor() {
            return $this->setor;
        }
    
        public function setComissao($comissao) {
            $this->comissao = ($comissao * $this->qtdVendas);
        }

        public function getComissao() {
            return number_format($this->comissao, 2);
        }

        public function somarComissao() {
            if ($this->qtdVendas >= $this->metaVendas) {
                $this->salarioBruto = ($this->salarioFixo + $this->comissao);
                return number_format($this->salarioBruto, 2, ',', '.');
            } 
        }

        public function set_qtdVendas($qtdVendas) {
            $this->qtdVendas = $qtdVendas;
        }

        public function get_qtdVendas() {
            return $this->qtdVendas;
        }

        public function mostrarInfos() {
            echo parent::mostrarInfos();
            echo "<br>Trabalha em qual setor? {$this->getSetor()}<br>";
            if ($this->get_qtdVendas() > $this->metaVendas) {
                echo "<p>Parabéns! Você conseguiu atingir sua meta esse mês. Comissão recebida R$ {$this->getComissao()}. Salario bruto = R$ {$this->somarComissao()} </p>";
            } else {
                echo "<p>Poxa:( Você não conseguiu atingir sua meta esse mês. Salario bruto = R$ {$this->getSalarioFixo()} </p>";
            }
        }
}

$vendedor = new Vendedor("Cleber","111.222.666-89", 750.00, "Vendas", 15, 50);
$vendedor->mostrarInfos();
 
?>