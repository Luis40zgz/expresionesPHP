<?php
$num = rand(1,50);
$reinicio = $num;
$resuntado = 0;
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Operadores unarios</title>
</head>
<body>
<table>
    <caption>Operadores unarios</caption>
    <tr>
        <th>Operación</th>
        <th>Operador</th>
        <th>Ejemplo</th>
    </tr>
    <tr>
        <th>Post Auto-incremento</th>
        <td>++</td>
        <td>
            <?php
            $num = $reinicio;
            echo "\$num = $num<br><br>";
            echo "\$variable = \$num++<br><br>";
            $variable = $num++;
            echo "\$variable = $variable<br><br>";
            echo "\$num = $num<br><br>";
            ?>

        </td>
    </tr>
    <tr>
        <th>Pre Auto-incremento</th>
        <td>++</td>
        <td>
            <?php
            $num = $reinicio;
            echo "\$num = $num<br><br>";
            echo "\$variable = ++\$num<br><br>";
            $variable = ++$num;
            echo "\$variable = $variable<br><br>";
            echo "\$num = $num<br><br>";
            ?>

        </td>
    </tr>
    <tr>
        <th>Post Auto-decremento</th>
        <td>--</td>
        <td>
            <?php
            $num = $reinicio;
            echo "\$num = $num<br><br>";
            echo "\$variable = \$num--<br><br>";
            $variable = $num--;
            echo "\$variable = $variable<br><br>";
            echo "\$num = $num<br><br>";
            ?>

        </td>
    </tr>
    <tr>
        <th>Pre Auto-decremento</th>
        <td>--</td>
        <td>
            <?php
            $num = $reinicio;
            echo "\$num = $num<br><br>";
            echo "\$variable = --\$num<br><br>";
            $variable = --$num;
            echo "\$variable = $variable<br><br>";
            echo "\$num = $num<br><br>";
            ?>

        </td>
    </tr>
</table>
</body>
</html>

