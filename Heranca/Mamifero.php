<?php

require_once("Animal.php");

class Mamifero extends Animal {

    public $tempoGestacao;
    public $tempoAmamentacao;
    public $habitat;

    public function __construct($raca, $especie, $cor, $tempoGestacao, $tempoAmamentacao, $habitat) {
        parent::__construct($raca, $especie, $cor);
        $this->habitat = $habitat;
        $this->tempoGestacao = $tempoGestacao;
        $this->tempoAmamentacao = $tempoAmamentacao;
    }

    public function amamentar() {
        echo "Animal está amamentando...";
    }

    public function reproduzir() {
        parent::reproduzir();
        echo "... Vão vir filhotes";
    }

    public function emitirSom() {
        parent::emitirSom();
    }

    public function dadosAnimal() {
        parent::dadosAnimal();
        echo "Tempo de Gestação: {$this->tempoGestacao} meses.<br>
        Tempo de amamentação: {$this->tempoAmamentacao} minutos.<br>  
        Habitat: {$this->habitat} <br><hr>";
    }
}

$testMamifero = new Mamifero("Nome Mamifero", "Nome especie", "Preto", 9, 30, "selvagem");
$testMamifero->dadosAnimal();
