<!-- Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación. -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = $_GET['a'];
        $b = $_GET['b'];

        echo "La multiplicación de $a mas $b es ", $a * $b;
        ?>
    </body>
</html>
