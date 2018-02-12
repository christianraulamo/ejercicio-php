<!-- Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado. -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = $_GET['a'];
        $q = "6";
        $w = "12";
        $e = "13";
        $r = "20";
        $t = "21";
        $y = "5";
        $u = "25";

        if (($q <= $a) && ($a <= $w)) {
            echo "Buenos dias";
        }
        if (($e <= $a) && ($a <= $r)) {
            echo "Buenos tardes";
        }
        if (($t <= $a) && ($a <= $y)) {
            echo "Buenos noches";
        }
        ?>
    </body>
</html>
