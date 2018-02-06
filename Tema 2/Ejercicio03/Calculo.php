<!-- Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir se deberá
introducir por teclado. -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = $_GET ['a'];

        echo "$a pesetas son ", $a / 166.39, " euros";
        ?>
    </body>
</html>
