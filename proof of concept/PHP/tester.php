<?php echo "\033[2J\033[;H";

$code = "<h1>Call User Function!</h1>";
$codeClear = call_user_func("strip_tags", $code);

$codeMore = function ($code) {
    var_dump($code);
};
$codeMore("#BoraProgramar!");
echo PHP_EOL;
var_dump($codeMore);
