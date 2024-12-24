<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Inventário</title>    
</head>
<body>
    <?php if (!empty($error)): ?>
        <p><?= $error ?></p>
    <?php endif; ?>
    <form method="POST" action="login.php">
        <label for="username">Usuário</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Senha</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
