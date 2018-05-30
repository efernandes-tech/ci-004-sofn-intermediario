<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Codeigniter</title>
    <link rel="stylesheet"
        href="<?php echo base_url("public/css/bootstrap.css"); ?>">
</head>
<body>
<div class="container">
<?php

echo isset($msgs) ? $msgs : '';

echo form_open('cadastro/novo');

echo form_input(array(
    "name"=> "email",
    "type" => "email",
    "class" => "form-control",
    "placeholder" => "Insira um E-mail Válido"
));

echo form_input(array(
    "name"=> "nome",
    "type" => "text",
    "class" => "form-control",
    "placeholder" => "Nome Completo"
));

echo form_input(array(
    "name"=> "senha",
    "type" => "password",
    "class" => "form-control",
    "placeholder" => "******"
));

echo form_submit('submit','Cadastrar', array("class"=>"btn btn-success"));

echo form_close();

?>
</div>
</body>
</html>
