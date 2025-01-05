<?php

function partition($array, $test)
{
    $pass = array_filter($array, $test);
    $fail = array_diff_key($array, $pass);
    return [false => $fail, true => $pass];
}

$array = [1, 2, 3, 4, 5, 6];

$partitioned = partition($array, function($value) {
    return $value % 2 === 0;
});

print_r($partitioned);
