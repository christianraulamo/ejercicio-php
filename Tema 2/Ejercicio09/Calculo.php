<!-- Escribe un programa que calcule el volumen de un cono mediante la fórmula V = 1
3r2h. -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = $_GET ['a'];
        $b = $_GET ['b'];

        echo "El area del cono es: ", 1 / 3 * 3.14 * $b * $b *$a, " metros cuadrados";
        ?>
    </body>
</html>
