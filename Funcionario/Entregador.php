<?php
require_once("Funcionario.php");

class Entregador extends Funcionario{
    protected $veiculo;
    protected $valorDia;
    protected $qtdEntrega;
    protected $qtdDiasTrabalhadas;

    public function __construct($nome, $registro, $salarioFixo, $veiculo, $valorDia, $qtdEntrega, $diasTrabalho) {
        parent::__construct($nome, $registro, $salarioFixo);
        $this->setVeiculo($veiculo);
        $this->setValorDia($valorDia);
        $this->set_qtdEntrega($qtdEntrega);
        $this->set_diasTrabalho($diasTrabalho);
    }

    public function setVeiculo($veiculo) { 
        $this->veiculo = $veiculo;
    }

    public function getVeiculo() {
        return $this->veiculo;
    }

    public function setValorDia($valorDia) {
        $this->valorDia = $valorDia;
    }

    public function getValorDia() {
        return $this->valorDia;
    }

    public function set_qtdEntrega($qtdEntrega) {
        $this->qtdEntrega=$qtdEntrega;
    }

    public function get_qtdEntrega() {
        return $this->qtdEntrega;
    }

    public function set_diasTrabalho($qtdDias) {
        $this->qtdDiasTrabalhadas = $qtdDias;
    }

    public function get_diasTrabalho(){
        return $this->qtdDiasTrabalhadas;
    }

    public function SalarioBonus() {
        $salarioFixo = $this->salarioFixo;
        if ($this->get_qtdEntrega() >= 150) {
            $salarioBonus = $salarioFixo + ($this->get_diasTrabalho() * $this->getValorDia()) + 500;
            return number_format($salarioBonus, 2, ',', '.');
        } else {
            $salarioBonus = $salarioFixo + ($this->get_diasTrabalho() * $this->getValorDia());
            return number_format($salarioBonus, 2, ',', '.');
        }
    }

    public function mostrarInfos() {
        echo parent::mostrarInfos();
        echo "<br> Veiculo: {$this->getVeiculo()}<br> 
        Recebe por noite: R$ {$this->getValorDia()}<br>
        Dias trabalhados: {$this->get_diasTrabalho()}<br>
        Salario mês: R$ {$this->SalarioBonus()}";
    }
}

$entregador01 = new Entregador("Roberto", "111.222.666-89", 700.00, "Moto", 7.50, 150, 30);
$entregador01->mostrarInfos();

?>