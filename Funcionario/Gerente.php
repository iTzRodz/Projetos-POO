<?php
require_once("Funcionario.php");

class Gerente extends Funcionario {

    public function __construct($nome, $registro, $salario){
        parent::__construct($nome, $registro, $salario);
    }

    public function mostrarInfos() {
        echo parent::mostrarInfos();
        echo "<br>Gerente do projeto";
    }
}

$gerente = new Gerente("Romarinho", "111.222.666-89", 1500);
$gerente->mostrarInfos();
?>