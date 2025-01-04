<?php echo "\033[2J\033[;H";

/* Verificando se o arquivo/diretório Existe
e se é de fato um arquivo e não um diretório. */

$file = __DIR__ . "/casa.txt";

if (file_exists($file) && is_file($file)) {
    var_dump(
        file($file),
        pathinfo($file)
    );
} else {
    $fileOpen = fopen($file, "w");
    fwrite($fileOpen, "Linha 01");
    fclose($fileOpen);
}
