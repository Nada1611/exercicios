<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="login.css">
    <title>Login</title>
</head>
<body>
  <fieldset id="login">
<legend>Login Realizado:</legend>
<?php
$nome = $_POST["nome"];
$senha = $_POST["senha"];

if ($nome == "ana" && $senha == "12345") {
  echo "Autenticação realizada com sucesso";
} else {
  echo "Desculpe , Você não tem permissão de visualizar essa página";
}
?>
<br>
<a href="http://localhost/EXE%20HTML%20E%20PHP/Usuario/index.php">Início</a>
</fieldset>
</body>
</html>