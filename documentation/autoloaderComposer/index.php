<?php

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    $mail = new PHPMailer(true);
    // Aqui você pode configurar o PHPMailer
    echo "PHPMailer carregado com sucesso!";
	var_dump($mail);
} catch (Exception $e) {
    echo "Erro ao carregar o PHPMailer: {$e->getMessage()}";
}
