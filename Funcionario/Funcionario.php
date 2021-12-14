<?php

Class Funcionario{
    protected $nome;
    protected $NumeroRegistro;
    protected $salarioFixo;

    public function __construct($nome, $registro, $salarioFixo){
        $this->setNome($nome);
        $this->setNumeroRegistro($registro);
        $this->setsalarioFixo($salarioFixo);
    }

    public function setNome($nome) {
        $this->nome=$nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNumeroRegistro($numRegistro) {
        $this->NumeroRegistro = $numRegistro; 
    }

    public function getNumeroRegistro() {
        return $this->NumeroRegistro;
    }

    public function setSalarioFixo($salarioFixo) {
        $this->salarioFixo = $salarioFixo;
    }

    public function getSalarioFixo() {
        return number_format($this->salarioFixo, 2, ',', '.');
    }

    public function mostrarInfos() {
        return "Nome: " . $this->getNome() . " " . "<br>Número de registro: " . $this->getNumeroRegistro();
    }
}


?>