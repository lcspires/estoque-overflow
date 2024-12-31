<?php

// Função para validar a data
function validaData($dataString) {
    // Cria um objeto DateTime a partir da string fornecida
    $data = DateTime::createFromFormat('Y-m-d', $dataString);

    // Verifica se a data foi criada corretamente e se o formato bate com a string original
    if ($data && $data->format('Y-m-d') === $dataString) {
        return true; // A data é válida e corresponde ao formato esperado
    } else {
        return false; // A data não é válida ou não corresponde ao formato esperado
    }
}

// Teste da função com várias strings de data

$datasParaTestar = [
    '2024-12-31',  // Válida
    '2024-02-29',  // Inválida, 2024 não é um ano bissexto
    '2024-04-31',  // Inválida, abril só tem 30 dias
    '2024-13-01',  // Inválida, o mês 13 não existe
    '31-12-2024',  // Inválida, formato errado
    '2024-12-01'   // Válida
];

// Verifica se cada data é válida ou não
foreach ($datasParaTestar as $dataString) {
    if (validaData($dataString)) {
        echo "$dataString é uma data válida no formato Y-m-d.\n";
    } else {
        echo "$dataString NÃO é uma data válida no formato Y-m-d.\n";
    }
}