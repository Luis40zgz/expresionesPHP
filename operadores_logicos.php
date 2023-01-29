<?php
$a = null;
$num1 = 127;
$num2 = 289;
$num1b = decbin($num1);
$num2b = decbin($num2);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Operadores Lógicos</title>
</head>
<body>
<table>
    <caption>Operadores Lógicos</caption>
    <tr>
        <th>Operación</th>
        <th>Operador</th>
        <th>Ejemplo</th>
    </tr>
    <tr>
        <th>Y</th>
        <td>Funcionamiento general de la expresion booleana</td>
        <td>
            Verdadero <b>Y</b> Verdadero = Verdadero<br>
            Verdadero <b>Y</b> Falso = Falso<br>
            Falso <b>Y</b> Verdadero = Falso<br>
            Falso <b>Y</b> Falso = Falso<br>
        </td>
    </tr>
    <tr>
        <th>Y</th>
        <td>&&</td>
        <td>
            El operador lógico tiene preferencia sobre el de asignación.<br><br>
            <?php
            echo "\$a = true && false<br><br>";
            $a = true && false;
            $salida = $a?"true":"false";
            echo "\$a = $salida<br><br>";
            ?>
        </td>
    </tr>
    <tr>
        <th>Y</th>
        <td>AND</td>
        <td>
            El operador de asignación tiene preferencia.
            <?php
            echo "\$a = true AND false<br><br>";
            $a = true AND false;
            $salida = $a?"true":"false";
            echo "\$a = $salida<br><br>";
            echo "\$a = (true AND false)<br><br>";
            $a = (true AND false);
            $salida = $a?"true":"false";
            echo "\$a = $salida<br><br>";
            ?>
        </td>
    </tr>
    <tr>
        <th>Y (a nivel de bits)</th>
        <td>&</td>
        <td>
            <?php
            echo "\$num1 = $num1 = 0$num1b<br><br>";
            echo "\$num2 = $num2 = $num2b<br><br>";
            $resultado = $num1 & $num2;
            $resultadob = decbin($resultado);
            echo "\$num1 & \$num2 = $resultado = 000$resultadob";
            ?>
        </td>
    </tr>
    <tr>
        <th>O</th>
        <td>Funcionamiento general de la expresion booleana</td>
        <td>
            Verdadero <b>O</b> Verdadero = Verdadero<br>
            Verdadero <b>O</b> Falso = Verdadero<br>
            Falso <b>O</b> Verdadero = Verdadero<br>
            Falso <b>O</b> Falso = Falso<br>
        </td>
    </tr>
    <tr>
        <th>O</th>
        <td>||</td>
        <td>
            El operador lógico tiene preferencia sobre el de asignación.<br><br>
            <?php
            echo "\$a = false || true<br><br>";
            $a = true || false;
            $salida = $a?"true":"false";
            echo "\$a = $salida<br><br>";
            ?>
        </td>
    </tr>
    <tr>
        <th>O</th>
        <td>OR</td>
        <td>
            El operador de asignación tiene preferencia.
            <?php
            echo "\$a = false OR true<br><br>";
            $a = false OR true;
            $salida = $a?"true":"false";
            echo "\$a = $salida<br><br>";
            echo "\$a = (false OR true)<br><br>";
            $a = (false OR true);
            $salida = $a?"true":"false";
            echo "\$a = $salida<br><br>";
            ?>
        </td>
    </tr>
    <tr>
        <th>O (a nivel de bits)</th>
        <td>|</td>
        <td>
            <?php
            echo "\$num1 = $num1 = 0$num1b<br><br>";
            echo "\$num2 = $num2 = $num2b<br><br>";
            $resultado = $num1 | $num2;
            $resultadob = decbin($resultado);
            echo "\$num1 | \$num2 = $resultado = $resultadob";
            ?>
        </td>
    </tr>
    <tr>
        <th>NO</th>
        <td>!</td>
        <td>
            <?php
            $resultado = !true;
            $salida = $resultado?"true":"false";
            echo "!true = $salida<br><br>";
            $resultado = !false;
            $salida = $resultado?"true":"false";
            echo "!false = $salida<br><br>";
            ?>
        </td>
    </tr>
</table>
</body>
</html>


