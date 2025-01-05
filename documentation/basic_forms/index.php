<?php

$form = new StdClass();
$form->name = "Lucas";
$form->mail = "l.ferreira@ufba.br";

//var_dump($_REQUEST); // dados de $_POST, $_GET e $_COOKIE. Trata-se de uma superglobal mais genérica,
					// usada quando não se sabe de antemão o método pelo qual os dados serão enviados.

var_dump($_POST); // dados enviados no corpo da requisição HTTP, e não anexados à URL (query string).
				 // echo $_POST['name']; (Um nome) && echo $_POST['mail'] (um@email.com).

$post = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
/* Função que filtra e valida os dados que chegam:
INPUT_POST nos diz que os dados devem ser buscados na superglobal $_POST.
"name" indica a chave do dado que desejamos obter. Link to tag input, atribute name.
FILTER_DEFAULT retorna o dado apenas, usado para cumprir a sintaxe da função.

p.S.: mesmo FILTER_DEFAULT não aplicando nenhum filtro real, ele sanitiza os dados, ou seja,
converte caracteres especiais em entidades HTML, o que ajuda na prevenção de ataques como XSS.*/

$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);
// Todos os dados do formulário são recuperados e armazenados em $postArray:
// 'name' => 'Lucas' && 'mail' => 'l.ferreira@ufba.br'

if ($postArray) { // Verifica se o array não está vazio.
    if (in_array("", $postArray)) { //Verifica se algum dos campos está vazio.
        echo "<p class='trigger warning'>Preencha todos os campos!</p>";
    } elseif (!filter_var($postArray['mail'], FILTER_VALIDATE_EMAIL)) {
        echo "<p class='trigger warning'>E-mail informado não é válido!</p>";
    } else {
        $saveStrip = array_map("strip_tags", $postArray); // Remove qualquer tag HTML ou PHP de cada valor no array (XSS Counter).
        $saveSanitized = array_map("htmlspecialchars", $saveStrip);	// Converte caracteres especiais em entidades HTML (XSS Counter).
		$saveClean = array_map("trim", $saveSanitized); // Remove espaços em branco extras no início e no final de cada valor.
		var_dump($saveClean);
        echo "<p class='trigger accept'>Cadastro com sucesso!</p>";
    }
}

$form->method = "post"; // define POST enquanto método de envio do forms no atributo method.
include __DIR__ . "/form.php";


echo "<p><strong>GET</strong></p>";

$get = filter_input(INPUT_GET, "mail", FILTER_DEFAULT);
$getArray = filter_input_array(INPUT_GET, FILTER_DEFAULT);


$filterForm = [
	"name" => 513,
    "mail" => FILTER_VALIDATE_EMAIL
];

$getForm = filter_input_array(INPUT_GET, $filterForm);

$form->method = "get"; // define GET enquanto método de envio do forms no atributo method.
include __DIR__ . "/form.php";

var_dump($getForm, filter_list(), filter_id("string"));