# PHP

## Ambiente de Desenvolvimento

**Xdebug**

`info.php`

```
<?php
phpinfo();
?>
```

[Wizard](https://xdebug.org/wizard)

**SSL**

1. `domains.ext`

```
authorityKeyIdentifier=keyid,issuer
basicConstraints=CA:FALSE
keyUsage = digitalSignature, nonRepudiation, keyEncipherment, dataEncipherment
subjectAltName = @alt_names
[alt_names]
DNS.1 = localhost
DNS.2 = www.localhost
```

2. `makecert.bat`

```
-sha256 -extfile domains.ext
```

3. FQDN: localhost

4. apache\conf\ssl.crt
	- Abrir o certificado;
	- Instalar certificado;
	- Autoridades de certificação de Raiz Confiáveis.
	
## Web Dev

**Boilerplate**
```
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>#[[$Title$]]#</title>
</head>
<body>
#[[$END$]]#
</body>
</html>
```

**Comandos de Saída**
```
echo "<p>Olá Mundo!", " ", "<span class='tag'>#BoraProgramar!</span>", "</p>";

$code = "<span class='tag'>#BoraProgramar!</span>";

$day = "dia";
echo "<p>Falta 2 {$day}s para o evento!</p>";

echo '<h3>' . $hello . " " . $code . "</h3>";

<h4><?= $hello; ?> <?= $code; ?></h4>

print();
print_r($array);
var_dump();

$nome = "Lucas";
$idade = 25;
$altura = 1.75321;
printf("Meu nome é %s, tenho %d anos e %.2f de altura.", $nome, $idade, $altura);

$dados = ["Lucas", 25, 1.75321];
vprintf("Meu nome é %s, tenho %d anos e %.2f de altura.", $dados);

$numero = 123.456789;
$saida = sprintf("O número formatado é: %.2f", $numero);

$numero = 1234.56789;
$saida = number_format($numero, 2, ".", ","); // 1,234.57
```

**Call User Function**
```
$code = "<h1>Call User Function!</h1>";
$codeClear = call_user_func("strip_tags", $code);
```

**Closure**
```
$codeMore = function ($code) {
    var_dump($code);
};
$codeMore("#BoraProgramar!");
```