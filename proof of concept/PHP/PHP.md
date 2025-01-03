# PHP

`echo "\033[2J\033[;H";`

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

**Closures**
```
$priceBrl = function ($price) {
    return number_format($price, 2, ",", ".");
};

echo "<p>O projeto custa R$ {$priceBrl(3600)}. Vamos fechar?";

***

function createCounter() {
    $count = 0; // Variável encapsulada

    return function () use (&$count) {
        $count++;
        return $count;
    };
}

$counter = createCounter();
echo $counter(); // 1
echo $counter(); // 2
echo $counter(); // 3
```

**Extrapolando a Memória**
```
$iterator = 41; //4000000

function showDates($days)
{
    $saveDate = [];
    for ($day = 1; $day < $days; $day++) {
        $saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
    }
    return $saveDate;
}

echo "<div style='text-align: center'>";
foreach (showDates($iterator) as $date) {
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";
```

**Generators**
```
$iterator = 41; //4000000

function generatorDate($days)
{
    for ($day = 1; $day < $days; $day++) {
        yield date("d/m/Y", strtotime("+{$day}days"));
    }
}

echo "<div style='text-align: center'>";
foreach (generatorDate($iterator) as $date) {
    echo "<small class='tag' style='background-color: var(--green)'>{$date}</small>" . PHP_EOL;
}
echo "</div>";

```

**StdClass**
```
$object = new StdClass();
$object->hello = "Olá";
```

**Validações**
```
if (is_int($var)) { ... } | is_int, is_float, is_string, is_bool, is_array, is_object.
if (ctype_digit($string)) { ... } | Se a string contém apenas inteiros positivos ...
if (preg_match('/^[0-9]{2}$/', ($var))) { ... } | Se a variável contém apenas dois digitos numéricos ...
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { ... } | FILTER_VALIDATE_URL, FILTER_VALIDATE_INT, etc.
```

**Dynamic Configuration**
```
$envVars = ['DB_HOST' => 'localhost', 'DB_USER' => 'root', 'DB_PASS' => 'password'];

foreach ($envVars as $key => $value) {
    $$key = $value;
}

echo "Host: {$DB_HOST}, User: {$DB_USER}, Pass: {$DB_PASS}";

// Host: localhost, User: root, Pass: password
```
`associative arrays` `control structures` `foreach interaction` `variable variables`

**Process Automation**
```
$steps = ['step1', 'step2', 'step3'];

foreach ($steps as $index => $step) {
    ${"result_" . ($index + 1)} = strtoupper($step);
}

echo $result_1 . PHP_EOL; // STEP1
echo $result_2 . PHP_EOL; // STEP2
echo $result_3 . PHP_EOL; // STEP3
```
`indexed arrays` `concatenation` `uppercase conversion` `dynamic access`

**Passing by Reference**
```
function changeValue(&$variable){
    $variable = "New value.";
}

$myVar = "Old value.";
changeValue($myVar);
echo $myVar; // New value.
```

**Returning by Reference**
```
function &returnValue(&$variable){
    return $variable;
}

$myVar = "Old value.";
$ref = &returnValue($myVar);
$ref = "New value.";
echo $myVar; // New value.
```

**Array Filter and the Possibility of Falsification**
```
$a = 0; // or "0"
$b = 0.0;
$c = ""; // or ''
$d = []; // or array()
$e = null;
$all = false;

if (!array_filter([$a, $b, $c, $d, $e, $all])) {
    echo "É tudo falso!";
}

$all = "Voltei como esfinge.";

$trueValues = array_filter([$a, $b, $c, $d, $e, $all]);

print_r($trueValues); // [5] => Voltei como esfinge.
```
`callback function` `type false` `returned true` `bitwise operator` `function as parameter` `function as filter`

```
<?php

function odd($var)
{
    return $var & 1;
}

function even($var)
{
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Odd :\n";
print_r(array_filter($array1, "odd")); // 'a' => 1, 'c' => 3, 'e' => 5
echo "Even:\n";
print_r(array_filter($array2, "even")); // 0 => 6, 2 => 8, 4 => 10, 6 => 12
```

**ARRAY_FILTER_USE_KEY and ARRAY_FILTER_USE_BOTH**
```
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(array_filter($arr, function($k) {
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY)); // output: 'b' => 2

var_dump(array_filter($arr, function($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH)); output: 'b' => 2, 'd' => 4
```
`closures` `anonymous functions` `binding` `dynamically defined` `beyond the values`

**Empty and Isset**
```
$rockAndRoll = "Nirvana";

if (!empty($rockAndRoll)) {
    var_dump("Rock existe e toca {$rockAndRoll}");
} else {
    var_dump("Não existe ou não está tocando!");
}

$rockAndRoll = "Nirvana";

if (!empty($rockAndRoll)) {
    var_dump("Rock existe e toca {$rockAndRoll}");
} else {
    var_dump("Não existe ou não está tocando!");
}
```

**Elif e Cia**
```
$age = 51;

if ($age < 20) {
    var_dump("Bandas Coloridas");
} elseif ($age > 20 && $age < 50) {
    var_dump("Ótimas Bandas");
} else {
    var_dump("Rock And Roll Raiz");
}

$payment = "credit_card";

switch ($payment) {
    case "billet_printed":
        var_dump("Boleto Impresso");
        break;
    case "canceled":
        var_dump("Pagamento Cancelado");
        break;
    case "past_due":
    case "pending":
        var_dump("Aguardando Pagamento");
        break;
    default:
        var_dump("Erro ao processar pagamento!");
        break;
}

```

**Once Again**
```
$var = 1;
$array = [];

while ($var <= 5) {
    $array[] = $var;
    $var++;
}


$var = 5;
$array = [];

do {
    $array[] = $var;
    $var--;
} while ($var >= 1);


for ($c = 1; $c <= 10; $c++) {
    if ($c % 2 == 1) {
        continue; // Pula para a próxima iteração se $c for ímpar.
    }
    if ($c >= 10) {
        break; // Interrompe o loop se $c for maior ou igual a 10.
    }
    echo "<p>Pulou + 2 :: {$c}</p>" . PHP_EOL; // Exibe o valor atual de $c em HTML.
}


$array = ['a' => "amor", 'b' => "baixinho", 'c' => "coração"];

foreach ($array as $item) {
    var_dump($item);
}

foreach ($array as $key => $value) {
    var_dump("{$key} = {$value}");
}
```

	