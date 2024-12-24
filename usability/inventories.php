<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventários</title>
</head>
<body>
    <div>
        <h2>Inventários</h2>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Inventário Loja A</td>
                    <td>Criado</td>
                    <td>
                        <button>Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Inventário Loja B</td>
                    <td>Em Andamento</td>
                    <td>
                        <button>Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
