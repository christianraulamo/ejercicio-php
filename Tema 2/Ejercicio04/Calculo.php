<!-- Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado. -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = $_GET ['a'];
        $b = $_GET ['b'];
        
        echo "$a + $b = ", $a + $b, "<br>";
        echo "$a - $b = ", $a - $b, "<br>";
        echo "$a * $b = ", $a * $b, "<br>";
        echo "$a / $b = ", $a / $b, "<br>";
        ?>
    </body>
</html>
