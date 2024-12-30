<?php
require __DIR__ . '/ambiente.php';
className("Debugger");

classSession("Debug Section", __LINE__);

$userFirstName = "Lucas";
$userLastName = "Pires";
$userAge = "29";

echo "<p>{$userFirstName} {$userLastName} <span class='tag'>tem {$userAge} anos</span>.</p>";