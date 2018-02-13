<!-- Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día
de la semana. -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = $_GET['a'];
        
        if ($a == 1) {
            echo "Lunes";
        }
        if ($a == 2) {
            echo "Martes";
        }
        if ($a == 3) {
            echo "Miercoles";
        }
        if ($a == 4) {
            echo "Jueves";
        }
        if ($a == 5) {
            echo "Viernes";
        }
        if ($a == 6) {
            echo "Sabado";
        }
        if ($a == 7) {
            echo "Domingo";
        }
        ?>
    </body>
</html>
