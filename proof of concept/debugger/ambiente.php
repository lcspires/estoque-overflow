<?php

header("Content-Type: text/html; charset=utf-8");

date_default_timezone_set("America/Sao_Paulo");

set_error_handler("errorHandler");
ini_set("display_errors", 1);
ini_set("error_reporting", E_ALL);
ini_set('xdebug.overload_var_dump', 1);

echo "<link rel='stylesheet' href='assets/style.css'/>",
"<link rel='icon' href='assets/icon.png'/>",
"<img class='logo' src='assets/logo.jpg'/>";


function className($className)
{
    echo "<title>{$className} | LCS Pires</title>";
}

function classSession($session, $line, $color = null)
{
    $line = (!empty($line) ? " <span class='line-session'>| Linha {$line}</span>" : "");
    $session = (!empty($session) ? "[ {$session}{$line} ]" : "");
    $color = (!empty($color) ? "var(--{$color})" : "");
    echo "<div class='code line' style='background-color: {$color}'>{$session}</div>";
}

function errorHandler($error, $message, $file, $line)
{
    $color = ($error == E_USER_ERROR ? "red" : "yellow");
    echo "<div class='trigger' style='border-color: var(--{$color}); color:var(--{$color});'>[ Linha {$line} ] {$message}<small>{$file}</small></div>";
}
