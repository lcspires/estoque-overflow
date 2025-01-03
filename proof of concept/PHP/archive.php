<?php echo "\033[2J\033[;H";

$file = __DIR__ . "/review.txt";

if (file_exists($file) && is_file($file)) {
    echo "Existe!";
} else {
    echo "NÃO existe!";
}

var_dump(
    file($file),
    pathinfo($file)
);

$fileOpen = fopen($file, "w");
    fwrite($fileOpen, "Linha 01" . PHP_EOL);
    fclose($fileOpen);

$fileOpen = fopen($file, "a");
    fwrite($fileOpen, "Linha 02" . PHP_EOL);
    fclose($fileOpen);
	
echo file($file)[0];

$open = fopen($file, "r");
while (!feof($open)) {
    echo fgets($open);
}
fclose($open);