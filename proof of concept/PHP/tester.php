<?php echo "\033[2J\033[;H";

$rockAndRoll = 2;

if (isset($rockAndRoll)) {
    var_dump("Rock existe e toca {$rockAndRoll}");
} else {
    var_dump("Não existe ou não está tocando!");
}

/*if (!empty($rockAndRoll)) {
    var_dump("Rock existe e toca {$rockAndRoll}");
} else {
    var_dump("Não existe ou não está tocando!");
}*/