<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="imc.css">
    <title>IMC</title>
</head>
<body>
    <fieldset>
    <legend>Cálculo IMC:</legend>
<form action="calculo.php" method="post">
    <div id="inicio">
Digite Seu Peso:<input type="text" name="Peso"><br>
Digite Sua Altura:<input type="text" name="Altura"><br>
</div>
<br>
<input type="reset" name="reset" value="Limpar">
<input type="submit" name="submit" value="Enviar">
</fieldset>
</form>
</body>
</html>