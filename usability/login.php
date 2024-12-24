<?php
session_start();
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === 'admin') {
        $_SESSION['logged_in'] = true;
        header('Location: inventories.php');
        exit;
    } else {
        $error = "Usuário ou senha incorretos.";
    }
}
?>
