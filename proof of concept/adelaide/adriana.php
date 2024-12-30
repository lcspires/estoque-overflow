<?php

$company = "Trust";
$$company = "Company";
echo "<h2>{$company} {$Trust}</h2>";

$calcA = 10;
$calcB = 20;

$calcB = &$calcA;
$calcB = 50;

var_dump([
    $calcA,
    $calcB
]);