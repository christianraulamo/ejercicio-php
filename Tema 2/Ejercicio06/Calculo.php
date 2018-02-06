<!-- Escribe un programa que calcule el área de un triángulo. -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = $_GET ['a'];
        $b = $_GET ['b'];
        
        echo "El area del triangulo es: ", $a * $b / 2, " metros cuadrados";
        ?>
    </body>
</html>
