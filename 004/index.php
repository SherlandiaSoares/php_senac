<?php
//// VERIFICAÇÃO DE TIPOS DE DADOS E PALAVRAS RESERVADAS

$numero = 10;
$string = "texto";
$booleana = true;
$array = [1, 2, 3];

echo "Tipo de dado da variável \$numero " . gettype($numero) . "<br>";
echo "Tipo de dado da variável \$string " . gettype($string) . "<br>";
echo "Tipo de dado da variável \$booleana " . gettype($booleana) . "<br>";
echo "Tipo de dado da variável \$array " . gettype($array) . "<br>";

// Verificação de tipo de dados com fluxo condicional
echo "Verifica se \$numero é do tipo int " . gettype($numero) . "<br>";
echo "Verifica se \$string é do tipo string " . gettype($string) . "<br>";
echo "Verifica se \$booleana é do tipo boolean " . gettype($booleana) . "<br>";
echo "Verifica se \$array é do tipo array " . gettype($array) . "<br>";
?>