<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="calc2.css">
    <title>Calculadora 2</title>
</head>
<body>
<fieldset>
    <legend>Calculadora:</legend>
<form action="calc2.php" name="form" method="post">
    <div id="num">
Número 1:<input type="text" name="N1" placeholder="Digite Um Número:">
Número 2:<input type="text" name="N2" placeholder="Digite Segundo Número:">
</div>
<br>
<br>
<input type="submit" name="bt" value="Somar">
<input type="submit" name="bt" value="Subtrair">
<input type="submit" name="bt" value="Multiplicar">
<input type="submit" name="bt" value="Dividir">
<br>
<br>
<!--Botão reset-->
<input type="reset" name="reset" value="Limpar">
</fieldset>
</body>
</html>