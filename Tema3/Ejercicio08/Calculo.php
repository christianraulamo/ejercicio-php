<!-- Amplía el programa anterior para que diga la nota del boletín (insuficiente, suficiente, bien, notable
o sobresaliente). -->

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
        $d = (($a + $b + $c) / 3);

        echo "La media de las 3 notas es: ", $d, ".  ";
        
        if ($d < 4) {
            echo "Tienes un insuficiente";
        }
        if (($d >= 5) && ($d < 6)) {
            echo "Tienes un suficiente";
        }
        if (($d >= 6) && ($d < 7)) {
            echo "Tienes un bien";
        }
        if (($d > 6) && ($d <= 8)) {
             echo "Tienes un notable";
        }
        if (($d > 8) && ($d <= 10)) {
             echo "Tienes un sobresaliente";
        }       
        ?>
    </body>
</html>
