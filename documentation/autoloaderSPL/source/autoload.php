<?php

spl_autoload_register(function ($class) {
    $prefix = "Classes\\"; // Namespace base
    $baseDir = __DIR__ . "/../classes/"; // Caminho base para as classes
    $len = strlen($prefix);

    // Verifica se a classe utiliza o prefixo esperado
    if (strncmp($prefix, $class, $len) !== 0) {
        return; // Ignora classes fora do namespace
    }

    // Remove o prefixo do nome da classe e substitui separadores
    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace("\\", "/", $relativeClass) . ".php";

    // Inclui o arquivo se existir
    if (file_exists($file)) {
        require $file;
    } else {
        echo "Arquivo não encontrado: $file\n";
    }
});
