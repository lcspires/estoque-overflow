# PHP

`var_dump(get_defined_functions());`
`var_dump(get_declared_classes());`

## Essentials

**DateTime Analysis**
```php
var_dump([
    "class" => get_class($date),
    "methods" => get_class_methods($date),
    "vars" => get_object_vars($date),
    "parent" => get_parent_class($date),
    "subclass" => is_subclass_of($date, "DateTime")
]);

var_dump([
    date_default_timezone_get(), // fuso configurado no php.ini
    date(DATE_W3C), // formato amplamente utilizado em APIs.
    date("d/m/Y H:i:s")
]);

define("DATE_BR", "d/m/Y H:i:s");
define("DATE_TIMEZONE", "America/Sao_Paulo");

date_default_timezone_set(DATE_TIMEZONE); // sobrescreve o php.ini

$date = DateTime::createFromFormat("Y-m-d", "01-01-2025");
echo $date->format("d-m-Y");
```

**Array as Object**
```php
$arrProfile = [
    "name" => "Lucas",
    "company" => "WeTrust"
];

echo "{$arrProfile['name']} trabalha na {$arrProfile['company']}";

$objProfile = (object)$arrProfile;

echo "{$objProfile->name} trabalha na {$objProfile->company}";
```

**StdClass()**
```php
$ceo = $objProfile; // ambos apontarão para o mesmo objeto.
unset($ceo->company); // remove a propriedade 'company' de $ceo ($objProfile).
$company = new StdClass();
$company->company = "WeTrust";
$company->ceo = $ceo;
$company->manager = new StdClass();
$company->manager->name = "Lucia";
```

**File Verification**
```php
/* Verificando se o arquivo/diretorio existe
e se eh de fato um arquivo e nao uma pasta. */

$file = __DIR__ . "/tester.txt";

if (file_exists($file) && is_file($file)) {
    var_dump(
        file($file),	// conteudo enquanto array linha a linha.
        pathinfo($file)
    );
} else {
    echo "Não existe!";
}
```