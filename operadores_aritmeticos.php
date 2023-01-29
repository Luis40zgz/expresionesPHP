<?php
$num1 = rand(1,50);
$num2 = rand(1,50);

//Operaciones aritméticas
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;
$modulo = $num1 % $num2;
$exponente = $num1 ** $num2;
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Operadores aritméticos</title>
</head>
<body>
<table>
    <caption>Operadores aritméticos</caption>
    <tr>
        <th>Operación</th>
        <th>Operador</th>
        <th>Ejemplo</th>
    </tr>
    <tr>
        <th>Suma</th>
        <td>+</td>
        <td><?php echo "$num1 + $num2 = $suma"; ?></td>
    </tr>
    <tr>
        <th>Resta</th>
        <td>-</td>
        <td><?= "$num1 - $num2 = $resta"; ?></td>
    </tr>
    <tr>
        <th>Multiplicación</th>
        <td>*</td>
        <td><?= "$num1 * $num2 = $multiplicacion"; ?></td>
    </tr>
    <tr>
        <th>División</th>
        <td>/</td>
        <td><?= "$num1 / $num2 = $division"; ?></td>
    </tr>
    <tr>
        <th>Módulo</th>
        <td>%</td>
        <td><?= "$num1 % $num2 = $modulo"; ?></td>
    </tr>
    <tr>
        <th>Exponente</th>
        <td>**</td>
        <td><?= "$num1 ** $num2 = $exponente"; ?></td>
    </tr>
</table>
</body>
</html>

