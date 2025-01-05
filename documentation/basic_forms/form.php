<form name="post" action="./" method="<?= $form->method; ?>" enctype="multipart/form-data"novalidate>
    <p><a href="./" title="Atualizar">Atualizar</a></p>
    <div class="col2">
        <input type="text" name="name" value="<?= $form->name; ?>" placeholder="Nome:"/>
        <input type="email" name="mail" value="<?= $form->mail; ?>" placeholder="E-mail:" required/>
    </div>
    <button>Enviar Agora!</button>
</form>

<!--

name="post" será usado para referencias em scripts;
action="./" define o destino dos dados como o diretório atual;
method especifica o método HTTP para envio dos dados;
enctype="multipart/form-data" indica o tipo de codificação usado no envio dos dados;
novalidate desabilita a validação automática do HTML5 (campos com required, formatos de e-mail, etc.);

name="name" usado para recuperar o valor no backend;
value pré-popula o campo com um valor dinâmico vindo do PHP;
required torna o campo obrigatório (desativado pelo novalidate);

Obs.: requireds e validates, aqui na camada do cliente, não são seguros.
-->