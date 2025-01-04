# PHP

## Essentials

**Generator**
```php
function generatorDate($days)
{
    for ($day = 1; $day < $days; $day++) {
        yield date("d/m/Y", strtotime("+{$day}days"));
    }
}
```

**Em contraposição à**
```php
function showDates($days)
{
    $saveDate = [];
    for ($day = 1; $day < $days; $day++) {
        $saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
    }
    return $saveDate;
}
```

**Dynamic Variable Assignment**
```php
$envVars = ['DB_HOST' => 'localhost', 'DB_USER' => 'root', 'DB_PASS' => 'password'];

foreach ($envVars as $key => $value) {
    $$key = $value;
}

echo "Host: {$DB_HOST}, User: {$DB_USER}, Pass: {$DB_PASS}";

// Host: localhost, User: root, Pass: password
```

**Dynamic Variable Creation**
```php
$steps = ['step1', 'step2', 'step3'];

foreach ($steps as $index => $step) {
    ${"result_" . ($index + 1)} = strtoupper($step);
}

echo $result_1 . PHP_EOL; // STEP1
echo $result_2 . PHP_EOL; // STEP2
echo $result_3 . PHP_EOL; // STEP3
```

**Passing by Reference**
```php
function changeValue(&$variable){
    $variable = "New value.";
}

$myVar = "Old value.";
changeValue($myVar);
echo $myVar; // New value.
```

**Returning by Reference**
```php
function &returnValue(&$variable){
    return $variable;
}

$myVar = "Old value.";
$ref = &returnValue($myVar);
$ref = "New value.";
echo $myVar; // New value.
```

**Callback and Array Filter**
```php
$numbers = [1, 2, 3, 4, 5, 6];

$checkEven = function($value) {
	return !($value & 1);
};

$evenNumbers = array_filter($numbers, $checkEven);
```

**Array Filter with Closures**
```php
$numbers = [1, 2, 3, 4, 5, 6];

$oddNumbers = array_filter($numbers, function($value) {
    return $value & 1;
});
```

**Array Filters with Flags**
```php
$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

function checkKey($key) {
    return $key == 'b';
}
$valueKeys = array_filter($array, 'checkKey', ARRAY_FILTER_USE_KEY);

$valueKeys = array_filter($array, function($value, $key) {
    return $key == 'b' || $value == 4;
}, ARRAY_FILTER_USE_BOTH);
```

**Array Filter and the Possibility of Falsification**
```php
$a = 0; // or "0"
$b = 0.0;
$c = ""; // or ''
$d = []; // or array()
$e = null;
$all = false;

if (!array_filter([$a, $b, $c, $d, $e, $all])){
	print("Nada se salvará!");
} else {
	var_dump(array_filter([$a, $b, $c, $d, $e, $all]));
}
```

**Closures with Number Format**
```php
$priceBrl = function ($price) {
    return number_format($price, 0, ",", ".");
};
echo "O projeto custa R$ {$priceBrl(3600)}."; // 3.600

$priceBrl = function ($price) {
    return number_format($price, 2, ",", ".");
};
echo "O projeto custa R$ {$priceBrl(3600)}."; // 3.600,00
```

**Closures with External Variables**
```php
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

**Array Map**
```
// Com arrays
$numbers = [1, 2, 3];
$squared = array_map(fn($x) => $x * $x, $numbers);
print_r($squared); // [1, 4, 9]

// Com strings (convertendo a string para um array de caracteres)
$string = "abc";
$upperCase = implode("", array_map("strtoupper", str_split($string)));
echo $upperCase; // "ABC"
```