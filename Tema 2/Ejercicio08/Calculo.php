<!-- Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas.
Se pagarán 12 euros por hora. -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = $_GET ['a'];

        echo "La horas trabajadas son: $a, por lo que el sueldo sera ", $a * 12, " euros";
        ?>
    </body>
</html>
