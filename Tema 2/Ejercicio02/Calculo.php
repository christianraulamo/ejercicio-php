<!-- Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se quiere convertir se
deberá introducir por teclado. -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = $_GET ['a'];
        
        echo "$a euros son ", $a * 166.39, " pesetas";
        ?>
    </body>
</html>
