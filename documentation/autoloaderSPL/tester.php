<?php

// require __DIR__ . "/classes/User.php";

require __DIR__ . "/source/autoload.php";

// $userTester = new \Classes\User();

use Classes\User as UserAlias;

$userTester = new UserAlias();

var_dump($userTester);