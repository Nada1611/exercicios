<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="calc2.css">
    <title>Calculo2</title>
</head>
<body>
    <fieldset id="op">
    <legend id="cal">Cálculo Final:</legend>
    <?php
if (isset($_POST["bt"])){  
    $N1 = $_POST["N1"];
    $N2 = $_POST["N2"];
    $OP = $_POST["bt"];
    
    switch($OP){
    
        case 'Somar':
            $res= $N1 + $N2;
            break;
            case 'Subtrair':
                $res= $N1 - $N2;
                break;
                case 'Multiplicar':
                    $res= $N1 * $N2;
                    break;
                    case 'Divisão':
                        if ($N2 != 0) $res = $N1 / $N2;
                        else $res="Desculpe , Mas Não Existe Divisão Por Zero";
                        break;
    
    }
    
    echo "<h2>O resultado da Sua Operação ($OP) é = ($res)</h2>";
    
    }
?>
</fieldset>
</body>
</html>