<?php

$true = true;
$false = false;
var_dump($true, $false);

echo "<br><br>";

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

var_dump($a, $b, $c, $d, $e);

echo "<br><br>";

if (!($a || $b || $c || $d || $e)){
    echo "É tudo falso!";
}

$code = "<article><p>Call user function!</p></article>";
$codeClear = call_user_func("strip_tags", $code);

var_dump($code, $codeClear);

$codeMore = function ($code) {
    var_dump($code);
};
$codeMore("Cadê a galera da droga?");

$object = new StdClass();
$object->teste = $codeClear;

var_dump($object);

//object(stdClass)#1 (1) { ["teste"]=> string(3) "Call user function!" }