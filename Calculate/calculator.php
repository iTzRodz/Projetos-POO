<?php

class Calculator {    
    public $num01;
    public $num02; 
    public $op;

    public function __construct($value01, $value02, $operacao){
        $this->num01 = $value01;
        $this->num02 = $value02;
        $this->op = $operacao;
    }
    
    public function calcula() {
        $result = 0;
        switch ($this->op) {
            case 'sum':
                $result = $this -> soma();
                break;
            case 'sub':
                $result = $this -> subtracao();
                break;
            case 'mult':
                $result = $this -> multiplicacao();
                break;
            case 'div':
                $result = $this -> divisao();
                break;
        }
        return $result;
    }

    public function soma() {
        echo "A soma de {$this->num01} + {$this->num02} = ";
        return $this->num01 + $this->num02;
    } 
    
    public function multiplicacao() {
        echo "{$this->num01} * {$this->num02} = ";
        return $this->num01 * $this->num02;
    } 

    public function divisao() {
        $result = $this->num01 / $this->num02;
        echo "{$this->num01} / {$this->num02} = ";
        return number_format($result, 2);
    } 
    
    public function subtracao() {
        echo "{$this->num01} - {$this->num02} = ";
        return $this->num01 - $this->num02;
    } 
            
} 
?>