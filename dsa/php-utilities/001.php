<?php

$op = "opcao";

// Exemplo de uso de echo para impressão
echo "Menu:\n";    // Impressão de uma string
echo "$op 1\n";    // Interpolação de variável
echo $op, " 2\n";   // Uso de múltiplos argumentos
echo $op . " 3\n";  // Concatenando string com ponto

// Exemplo de uso de print
print("opcao 4\n"); // Retorna 1
print("$op 5" . PHP_EOL); // Usando PHP_EOL para quebra de linha portátil
print($op . " 6" . PHP_EOL); // Concatenando com ponto

// Demonstrando o uso de print em expressões
$value = print("Y");
print("$value"); // Saída será "1"

// Exemplos de impressão com strings vazias
$value = print("");
print("$value"); // Saída será "1"

// Uso de variáveis em condições (boolean)
$np = "";

if ($op) {} // True, porque $op contém uma string não vazia
if ($np) {} // False, porque $np é uma string vazia (falso em termos booleanos)
