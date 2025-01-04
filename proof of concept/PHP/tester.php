<?php echo "\033[2J\033[;H";

$string = "1 35";

list($a, $b) = array_map("intval", preg_split('/\D+/', $string));

// Exibir o resultado como um array de inteiros
echo $a, PHP_EOL, $b;

