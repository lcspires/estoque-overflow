<?php

/*require __DIR__ . "/source/Loading/User.php";
require __DIR__ . "/source/Loading/Address.php";
require __DIR__ . "/source/Loading/Company.php";*/

require __DIR__ . "/source/autoload.php";

$user = new \Source\Loading\User();
$user->name = "Lucas";
echo $user->name;

//require __DIR__ . "/source/autoload.php";

//$user = new \Source\Loading\User();
//$address = new \Source\Loading\Address();
//$company = new \Source\Loading\Company();

//require __DIR__ . "/vendor/autoload.php";

//$email = new \PHPMailer\PHPMailer\PHPMailer();
