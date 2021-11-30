<?php
require_once("Animal.php");

class Ave extends Animal{
    public $penas;
    public $plumagem;
    public $escama;
    public $sabeVoar;

    public function __construct($animal, $especie, $cor, $penas, $plumagem, $escama, $sabeVoar) {
        parent::__construct($animal, $especie, $cor);
        $this->penas = $penas;
        $this->plumagem = $plumagem;
        $this->escama = $escama;
        $this->sabeVoar = $sabeVoar;
    }

    public function voar() {
        if ($this->sabeVoar == True) {
            echo "Animal sabe voar";
        } else {
            echo "Animal não saber voar";
        }
        
    }

    public function reproduzir() {
        parent::reproduzir();
        echo "Animal reproduzindo...";
    }

    public function emitirSom() {
        echo "Emitindo som da ave";
    }

    public function dadosAnimal() {
        parent::dadosAnimal();
        echo "<br> Plumagem: {$this->plumagem} <br> 
        Escama: {$this->escama}<br> 
        {$this->voar()} <hr><br>";
    }
}

$animal = new Ave("Arara azul", "Anodorhynchus hyacinthinus", "Penas azul-cobalto", "Tipo de pena", "Plumagem azul", "Escama", TRUE);
$animal->dadosAnimal();