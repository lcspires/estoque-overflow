<?php

$folder = __DIR__ . "/uploads";

if (!file_exists($folder) || !is_dir($folder)) {
    mkdir($folder, 0755);
}

/*var_dump([
    "filesize" => ini_get("upload_max_filesize"),
    "postsize" => ini_get("post_max_size")
]);
*/
var_dump([
    filetype(__DIR__ . "/index.php"),
	filetype(__DIR__ . "/uploads"),
	mime_content_type(__DIR__ . "/index.php"),
    mime_content_type(__DIR__ . "/uploads"),
	pathinfo(__DIR__ . "/index.php"), //, PATHINFO_EXTENSION
]);	

$imageInfo = getimagesize(__DIR__ . "/uploads/1736258826.jpg");
if ($imageInfo === false) {
    echo "O arquivo não é uma imagem válida.";
} else {
    echo "Imagem válida. Tipo MIME: " . $imageInfo['mime'];
	var_dump($imageInfo);
}

// Obtém o parâmetro 'post' da URL e valida como booleano
$getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);
var_dump($_GET);

if ($_FILES && !empty($_FILES['file']['name'])) {
    // Obtendo informações do arquivo	
    $fileUpload = $_FILES['file'];
    $fileName = $fileUpload['name'];
    $fileType = $fileUpload['type'];
    $fileSize = $fileUpload['size'];
	$fileTemp = $fileUpload['tmp_name'];
	
	var_dump($_FILES);

    // Define os tipos MIME e tamanhos máximos permitidos
    $allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
    $maxSize = 10485760; // 10MB

    // Gera um novo nome para o arquivo
    $newFileName = time() . mb_strstr($fileName, ".");

    // Valida o tipo MIME e o tamanho do arquivo
    if (in_array($fileType, $allowedTypes) && $fileSize <= $maxSize) {
        // Movendo o arquivo para o diretório de uploads
        if (move_uploaded_file($fileTemp, __DIR__ . "/uploads/" . $newFileName)) {
            echo "<p class='trigger accept'>Arquivo enviado com sucesso!</p>";
        } else {
            echo "<p class='trigger error'>Erro ao mover o arquivo.</p>";
        }
    } else {
        if ($fileSize > $maxSize) {
            echo "<p class='trigger error'>O arquivo é muito grande.</p>";
        } else {
            echo "<p class='trigger error'>Tipo de arquivo não permitido.</p>";
        }
    }
} else {
    echo "<p class='trigger warning'>Nenhum arquivo selecionado.</p>";
}

include __DIR__ . "/form.php";

var_dump(scandir(__DIR__ . "/uploads"));

















