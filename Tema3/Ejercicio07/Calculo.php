<!-- Realiza un programa que calcule la media de tres notas. -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        
        echo "La media de las 3 notas es: ", (($a + $b + $c) / 3);
        ?>
    </body>
</html>
