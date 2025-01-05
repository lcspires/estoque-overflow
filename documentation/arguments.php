<?php

echo "<p><a href='index.php'>Clear</a></p>";
echo "<p><a href='index.php?arg1=true&arg2=true'>arguments via URL</a></p>";

$data = [
    "name" => "Lucas",
    "company" => "Lispector",
    "mail" => "lcspires@lispector.com.br",
];

$arguments = http_build_query($data);

echo "<p><a href='index.php?{$arguments}'>arguments via array</a></p>";

$object = (object)$data;
$args = http_build_query($object);
echo "<p><a href='index.php?{$args}'>arguments via StdClass</a></p>";

echo "<p><strong>Validações</strong><p>";

$dataFilter = http_build_query([
    "name" => "Robson",
    "company" => "UpInside",
    "mail" => "cursos@upinside.com.br",
    "site" => "upinside.com.br",
    "script" => "<script>alert('Esse é um JavaScript')</script>"
]);

/*$htmlSpecialchars = "<script>Teste</script>";
$new = htmlspecialchars($htmlSpecialchars, ENT_NOQUOTES | ENT_HTML5 | ENT_SUBSTITUTE, 'UTF-8', false);
$new = html_entity_decode($new, ENT_NOQUOTES, 'UTF-8');*/

echo "<p><a href='index.php?{$dataFilter}'>with script</a></p>";

$dataUrl = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($dataUrl) {
    if (in_array("", $dataUrl)) {
        echo "<p class='trigger warning'>Faltam dados!</p>";
    } elseif (empty($dataUrl["mail"])) {
        echo "<p class='trigger warning'>Falta o e-email!</p>";
    } elseif (!filter_var($dataUrl["mail"], FILTER_VALIDATE_EMAIL)) {
        echo "<p class='trigger warning'>E-mail inválido!</p>";
    } else {
        echo "<p class='trigger accept'>Tudo certo!</p>";
    }
} else {
    echo "nt";
}

echo "<pre>" . print_r($dataUrl, true) . "</pre>";
var_dump($dataUrl);

$dataFilterII = http_build_query([
    "name" => "Robson",
    "company" => "UpInside",
    "mail" => "cursos@upinside.com.br",
    "site" => "https://upinside.com.br",
    "script" => "<script>alert('Esse é um JavaScript')</script>"
]);
var_dump($dataFilterII);

parse_str($dataFilterII, $arrDataFilter);
var_dump($arrDataFilter);


$dataPreFilter = [
    "name" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "company" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "mail" => FILTER_VALIDATE_EMAIL,
    "site" => FILTER_VALIDATE_URL,
    "script" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
];
var_dump($dataPreFilter);
var_dump(filter_var_array($arrDataFilter, $dataPreFilter));
?>