<?php echo "\033[2J\033[;H";

$myCart = [];
$myCart["totalPrice"] = 0;
$cardAdd = function ($item, $qtd, $price) use (&$myCart) {
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$cardAdd("HTML5", 1, 497);
$cardAdd("jQuery", 2, 497);

var_dump($myCart);

