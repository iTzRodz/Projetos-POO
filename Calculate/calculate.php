<?php

require_once 'calculator.php';

$num1 = $_POST['n1'];   
$num2 = $_POST['n2'];  
$op = $_POST['operacao'];

$calc = new Calculator($num1, $num2, $op);
echo $calc->calcula();

?>