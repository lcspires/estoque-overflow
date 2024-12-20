<?php
require_once 'utils.php';

class Inventario {
    private $areas = [];
    private $idCounter = 1;

    public function criarArea($nome) {
        $this->areas[] = ['id' => $this->idCounter++, 'nome' => $nome, 'itens' => []];
        echo "Área '$nome' criada com sucesso.\n";
    }

    public function mapeamento($nome, $range) {
        for ($i = 1; $i <= $range; $i++) {
            $this->criarArea("$nome .{$i}");
        }
    }

    public function entrarNaArea($id) {
        foreach ($this->areas as &$area) {
            if ($area['id'] == $id) {
                echo "Você entrou na área '{$area['nome']}' com {$this->contarItens($area)} itens.\n";
                $this->interagirComArea($area);
                return;
            }
        }
        echo "Área não encontrada.\n";
    }

    private function contarItens($area) {
        return count($area['itens']);
    }

    private function interagirComArea(&$area) {
        $continua = true;
        while ($continua) {
            limparTela();
            echo "Opções:\n";
            echo "1. Adicionar item\n";
            echo "2. Listar itens\n";
            echo "3. Sair da área\n";
            $opcao = readline("Escolha uma opção: ");

            switch ($opcao) {
                case '1':
                    $item = readline("Digite o nome do item para adicionar: ");
                    $area['itens'][] = $item;
                    echo "Item '$item' adicionado.\n";
                    break;
                case '2':
                    echo "Itens na área '{$area['nome']}':\n";
                    $this->listarItens($area['id']);
                    readline("Pressione Enter para continuar...");
                    break;
                case '3':
                    $continua = false;
                    echo "Saindo da área '{$area['nome']}'...\n";
                    break;
                default:
                    echo "Opção inválida.\n";
            }
        }
    }

    public function listarAreas() {
        echo "Áreas do Inventário:\n";
        foreach ($this->areas as $area) {
            $quantidadeItens = $this->contarItens($area);
            echo "ID: {$area['id']}, Nome: {$area['nome']}, Itens: $quantidadeItens\n";
        }
    }

    public function listarItens($areaId) {
        foreach ($this->areas as $area) {
            if ($area['id'] == $areaId) {
                foreach ($area['itens'] as $item) {
                    echo "- $item\n";
                }
                return;
            }
        }
        echo "Área não encontrada.\n";
    }
}
