<?php echo "\033[2J\033[;H";

$folder = __DIR__ . "/review";

var_dump(
    scandir($folder),
    scandir(__DIR__)
);