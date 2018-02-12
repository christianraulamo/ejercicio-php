<!-- Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a
primera hora ese día. -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $lunes = 'lunes';
        $martes = 'martes';
        $miercoles = 'miercoles';
        $jueves = 'jueves';
        $viernes = 'viernes';
        $sabado = 'sabado';
        $domingo = 'domingo';

        if ($_GET['a'] == $lunes) {
            echo "El lunes a primera hora tenemos programación";
        }
        if ($_GET['a'] == $martes) {
            echo "El martes a primera hora tenemos sistemas informaticos";
        }
        if ($_GET['a'] == $miercoles) {
            echo "El miercoles a primera hora tenemos programación";
        }
        if ($_GET['a'] == $jueves) {
            echo "El jueves a primera hora tenemos entorno de desarrollo";
        }
        if ($_GET['a'] == $viernes) {
            echo "El viernes a primera hora tenemos sistemas informaticos";
        }
        if ($_GET['a'] == $sabado) {
            echo "Lo siento, el sabado no hay clases";
        }
        if ($_GET['a'] == $domingo) {
            echo "Lo siento, el domingo no hay clases";
        }
        ?>
    </body>
</html>
