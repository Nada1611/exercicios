<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="login.css">
    <title>Autenticação De Usuário</title>
</head>
<body>
<fieldset>
<legend>Autenticação De Usuário:</legend>

<form action="login.php" method="post">
    <div id="inicio">
Usuário:<input type="text" name="nome"><br>
Senha:<input type="password" name="senha"><br>
</div>
<br>
<input type="reset" name="reset" value="Limpar">
<input type="submit" name="submit" value="Enviar">
</fieldset>
</body>
</html>