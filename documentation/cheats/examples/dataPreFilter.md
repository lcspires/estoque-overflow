```php
$dataFilter = [
    "name" => "João & Maria",
    "mail" => "email@exemple.com",
    "site" => "https://meusite.com",
    "script" => "<script>alert('malicious')</script>",
    "age" => 30,
    "price" => "19.99",
    "ip" => "192.168.1.1",
    "boolean" => "true",
    "array" => ["1", "2", "3"]
];

$dataPreFilter = [
    "name" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,  // Escapa caracteres especiais
    "mail" => FILTER_VALIDATE_EMAIL,              // Valida se é um email válido
    "site" => FILTER_VALIDATE_URL,                // Valida se é uma URL válida
    "script" => FILTER_SANITIZE_FULL_SPECIAL_CHARS, // Escapa caracteres especiais

    // Novos campos para exemplo
    "age" => [
        "filter" => FILTER_VALIDATE_INT,          // Valida se é um número inteiro
        "options" => ["min_range" => 1, "max_range" => 120] // Faixa de idade aceitável
    ],
    "price" => [
        "filter" => FILTER_VALIDATE_FLOAT,        // Valida se é um número decimal
        "options" => ["decimal" => "."]           // Define separador decimal (Ex.: "19,99" retornará falso)
    ],
    "ip" => FILTER_VALIDATE_IP,                  // Valida um endereço IP
    "boolean" => FILTER_VALIDATE_BOOLEAN,        // Valida valores booleanos
    "array" => [
        "filter" => FILTER_VALIDATE_INT,         // Valida cada elemento do array como inteiro
        "flags" => FILTER_REQUIRE_ARRAY          // Exige que seja um array
    ],
];

$sanitizedData = filter_var_array($dataFilter, $dataPreFilter);
$sanitizedData = filter_input_array(INPUT_GET, $dataPreFilter);
```