<!-- Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0). -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = $_GET['a'];
        $b = $_GET['b'];
        
        if ($a == 0) {
            echo "Esa ecuación no tiene solución real.";
        } else {
            echo "x = " -$b / $a;
        }
        ?>
    </body>
</html>
