<?php echo "\033[2J\033[;H";

$date = new DateTime();

var_dump([
    "class" => get_class($date),
    "methods" => get_class_methods($date),
    "vars" => get_object_vars($date),
    "parent" => get_parent_class($date),
    "subclass" => is_subclass_of($date, "DateTime")
]);

$expetion = new PDOException();

var_dump([
    "class" => get_class($expetion),
    "methods" => get_class_methods($expetion),
    "vars" => get_object_vars($expetion),
    "parent" => get_parent_class($expetion),
    "subclass" => is_subclass_of($expetion, "Exception")
]);