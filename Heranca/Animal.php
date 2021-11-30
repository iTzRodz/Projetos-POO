<?php

class Animal {

    public $animal;
    public $especie;
    public $cor;

    public function __construct($animal, $especie, $cor) {
        $this->animal = $animal;
        $this->especie = $especie;
        $this->cor = $cor;
    }   

    public function reproduzir() {
        echo "Animal reproduzindo...";
    }

    public function respirar() {
        echo "Animal respirando...";
    }

    public function emitirSom() {
        echo "Emitindo som";
    }

    public function dadosAnimal() {
        echo "<h3>{$this->animal}</h3>
        Especie: {$this->especie} <br> 
        Cor: {$this->cor} <br>";
    }
}

?>
