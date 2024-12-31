# PHP

**Cheats**
```
echo "\033[2J\033[;H";

var_dump();

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

**readline()**
