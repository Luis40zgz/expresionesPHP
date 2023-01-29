<?php

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Operadores de compararción</title>
</head>
<body>
<table>
    <caption>Operadores de compararción</caption>
    <tr>
        <th>Operación</th>
        <th>Operador</th>
        <th>Ejemplo</th>
    </tr>
    <tr>
        <th>Igualdad</th>
        <td>==</td>
        <td><?php echo "$num1 + $num2 = $suma"; ?></td>
    </tr>
    <tr>
        <th>Igualdad estricta</th>
        <td>===</td>
        <td><?= "$num1 - $num2 = $resta"; ?></td>
    </tr>
    <tr>
        <th>Distinto</th>
        <td>!=</td>
        <td><?= "$num1 * $num2 = $multiplicacion"; ?></td>
    </tr>
    <tr>
        <th>Distinto estricto</th>
        <td>!==</td>
        <td><?= "$num1 / $num2 = $division"; ?></td>
    </tr>
    <tr>
        <th>Menor que</th>
        <td><</td>
        <td><?= "$num1 % $num2 = $modulo"; ?></td>
    </tr>
    <tr>
        <th>Menor Igual que</th>
        <td><=</td>
        <td><?= "$num1 % $num2 = $modulo"; ?></td>
    </tr>
    <tr>
        <th>Mayor que</th>
        <td>></td>
        <td><?= "$num1 ** $num2 = $exponente"; ?></td>
    </tr>
    <tr>
        <th>Mayor igual que</th>
        <td>>=</td>
        <td><?= "$num1 ** $num2 = $exponente"; ?></td>
    </tr>
    <tr>
        <th>Comparación total</th>
        <td><=></td>
        <td><?= "$num1 ** $num2 = $exponente"; ?></td>
    </tr>
    <tr>
        <th></th>
        <td>??</td>
        <td><?= "$num1 ** $num2 = $exponente"; ?></td>
    </tr>
</table>
</body>
</html>

