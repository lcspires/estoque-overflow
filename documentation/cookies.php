<?php
declare(strict_types=1); // tipagem mais estática

// Calcular o tempo de expiração do cookie
$time = time() + 60 * 60 * 24 * 7; // 1 semana

$user = [
    "user" => "root",
    "passwd" => "123",
    "expire" => $time
];

// Definir o cookie antes de qualquer saída
setcookie(
    "lcslogin",
    http_build_query($user),
    $time,
    "/",
    "localhost", // Sem protocolo e porta
    false, // para HTTP e true para HTTPS
);

// Esperar para pegar o cookie após a requisição do navegador
$login = filter_input(INPUT_COOKIE, "lcslogin", FILTER_SANITIZE_FULL_SPECIAL_CHARS);


$cookie = filter_input_array(INPUT_COOKIE, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if ($login) {
	var_dump($_COOKIE, $cookie, $login);
	parse_str($login, $user);
	var_dump($user);
}

echo "<h5>session_start();</h5>";

session_save_path(__DIR__ . "/");
session_start([
	"cookie_lifetime" => (60 * 60 * 24),
]);



var_dump($_SESSION,
	[
		"id" => session_id(),
		"name" => session_name(),
		"status" => session_status(),
		"save_path" => session_save_path(),
		"cookie" => session_get_cookie_params(),
]);
