<?php echo "\033[2J\033[;H";

$file = __DIR__ . "/tester.txt";

if (file_exists($file) && is_file($file)) {
    $handle = fopen($file, "r");
    
    if ($handle) {
        echo "Conteúdo do arquivo:" . PHP_EOL;
        
        while (($line = fgets($handle)) !== false) {
            // Remove espaços em branco e quebra de linha
            $line = trim($line);
            
            // Processa a linha
            $columns = explode(",", $line);
            
            echo "Linha processada: " . implode(" | ", $columns)  . PHP_EOL;
        }
        
        fclose($handle);
    } else {
        echo "Erro: Não foi possível abrir o arquivo.";
    }
} else {
    echo "Erro: Arquivo não encontrado ou inválido.";
}
