<?php
require_once 'Inventario.php';
require_once 'utils.php'; // Inclui o arquivo de utilidades

$inventario = new Inventario();

while (true) {
    limparTela(); // Usa a função de limpeza de tela definida no utils.php
    echo "\nMenu:\n";
    echo "1. Mapeamento (Criar novas áreas)\n";
    echo "2. Ver áreas\n";
    echo "3. Entrar em uma área\n";
    echo "4. Sair\n";
    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case '1':
            $nomeArea = readline("Digite o nome para o mapeamento: ");
            $range = (int) readline("Digite o range de áreas (ex.: 5 para criar 5 áreas): ");
            $inventario->mapeamento($nomeArea, $range);
            break;
        case '2':
            listarAreas($inventario); // Função de lista de áreas com limitação de tela
            break;
        case '3':
            entrarNaArea($inventario); // Função para entrar em uma área com limitação de tela
            break;
        case '4':
            echo "Saindo...\n";
            exit;
        default:
            echo "Opção inválida.\n";
    }
}

function listarAreas($inventario) {
    limparTela();
    echo "\nLista de Áreas:\n";
    $inventario->listarAreas();
    readline("Pressione Enter para continuar...");
}

function entrarNaArea($inventario) {
    limparTela();
    echo "Digite o ID da área que deseja entrar: ";
    $idArea = (int) readline();
    $inventario->entrarNaArea($idArea);
    readline("Pressione Enter para voltar ao menu...");
}
