<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
</head>
<body class="pruebas">
    //Ejercicio evaluable
<div>
<h2>Los  múltiplos de 3 en los 100 primeros</h2>
<ul>
<?php
    //Visualizar todos los múltiplos del 3 en los 100 primeros números

    for($i=1;$i<=100;$i++){
        $salida = $i%3?"":"<li>$i</li>";
        echo $salida;
        }
?>
</ul>
</div>
<div>
<h2>Las 15 primeras potencias de 2</h2>
<ul>
<?php
    //Visualizar las 15 primeras potencias de 2
    for($i=0;$i<15;$i++){
        $base = 2;
        $salida = $base ** $i;
        echo "<li>$salida</li>";
    }
?>
</ul>
</div>
</body>
</html>