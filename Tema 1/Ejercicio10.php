<!-- Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base de la
pirámide debe estar formada por 9 asteriscos. -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $planta4 = "*";
        $planta3 = "***";
        $planta2 = "*****";
        $planta1 = "*******";
        $base = "*********";
        
        echo "&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;".$planta4, "<br>";
        echo "&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;".$planta3, "<br>";
        echo "&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;".$planta2, "<br>";
        echo "&nbsp;"."&nbsp;".$planta1, "<br>";
        echo $base, "<br>";
        ?>
    </body>
</html>
