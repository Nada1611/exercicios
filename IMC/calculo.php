<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="imc.css">
    <title>Cálculo</title>
</head>
<body>
    <fieldset id="final">
<legend id="classi">Sua Classificação É:</legend>
<?php

$P = $_POST["Peso"];
$A = $_POST["Altura"];
$IMC = $P / $A**2;

if ($IMC < 16) 
echo "Magreza Grave";
elseif ($IMC >= 16 and $IMC < 17)
echo "Magreza Moderada";
if ($IMC >= 17 and $IMC < 18.5) 
echo "Magreza Leve";
elseif ($IMC >= 18.5 and $IMC < 25) 
echo "Saudável";
if ($IMC >= 25 and $IMC < 30) 
echo "Sobrepeso";
elseif ($IMC >= 30 and $IMC < 35)
echo "Obesidade Grau I";
if ($IMC >= 35 and $IMC < 40)
echo "Obesidade Grau II(Severa)";
elseif ($IMC >= 40)
echo "Obesidade Grau III(Mórbida)";
?>
</fieldset>
</body>
</html>