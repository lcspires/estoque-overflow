<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI | 2025.1</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

    <h1>Sistemas de Informação (UFBA) | 2025.1</h1>
	<?php include 'dados.php'; ?>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Docente</th>
                <th>Horário</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($supac as $codigo => $disciplina): ?>
                <tr>
                    <td><?php echo htmlspecialchars($codigo); ?></td>
                    <td><?php echo htmlspecialchars($disciplina["nome"]); ?></td>
                    <td><?php echo htmlspecialchars($disciplina["docente"]); ?></td>
                    <td><?php echo htmlspecialchars($disciplina["time"]); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const rows = document.querySelectorAll("table tbody tr");
        rows.forEach(row => {
            row.addEventListener("mouseover", () => {
                row.style.backgroundColor = "#f0f8ff";
            });
            row.addEventListener("mouseout", () => {
                row.style.backgroundColor = "";
            });
        });
    });
</script>
</body>
</html>
