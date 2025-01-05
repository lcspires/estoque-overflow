<?php echo "\033[2J\033[;H";

var_dump([
    date_default_timezone_get(),
    date(DATE_W3C),
    date("d/m/Y H:i:s")
]);

define("DATE_BR", "d/m/Y H:i:s");
define("DATE_TIMEZONE", "America/Sao_Paulo");
date_default_timezone_set(DATE_TIMEZONE);


var_dump(getdate());
echo "Hoje é dia ", getdate()["mday"], "!";


var_dump([
    "strtotime NOW" => strtotime("now"),
    "time" => time(),
    "strtotime+10d" => strtotime("+10days"),
    "date DATE_BR" => date(DATE_BR),
    "date +10days" => date(DATE_BR, strtotime("+10days")),
    "date -10days" => date(DATE_BR, strtotime("-10days")),
    "date +1years" => date(DATE_BR, strtotime("+1years")),
]);