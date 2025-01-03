<?php echo "\033[2J\033[;H";

$arrProfile = [
    "name" => "Lucas",
    "company" => "We Trust",
    "mail" => "l.ferreira@ufba.br"
];
$objProfile = (object)$arrProfile;

//echo "{$objProfile->name} trabalha na {$objProfile->company}";

$ceo = $objProfile;
unset($ceo->company);

$company = new StdClass();
$company->company = "We Trust";
$company->ceo = $ceo;
$company->manager = new StdClass();
$company->manager->name = "Raquel";
$company->manager->mail = "rgalvao@wetrust.com";

var_dump($company);