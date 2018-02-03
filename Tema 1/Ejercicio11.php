<!--Igual que el programa anterior, pero esta vez la pirámide estará hueca (se debe ver únicamente el
contorno hecho con asteriscos).  -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $asterisco = "*";

        echo "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . $asterisco, "<br>";
        echo "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . $asterisco . "&nbsp;" . "&nbsp;" . $asterisco, "<br>";
        echo "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . $asterisco . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . $asterisco, "<br>";
        echo "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . $asterisco . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . $asterisco, "<br>";
        echo "&nbsp;" . "&nbsp;" . "&nbsp;" . $asterisco . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . $asterisco, "<br>";
        echo "&nbsp;" . "&nbsp;" . $asterisco . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . $asterisco, "<br>";
        echo $asterisco, $asterisco, $asterisco, $asterisco, $asterisco, $asterisco, $asterisco, $asterisco, $asterisco;
        ?>
    </body>
</html>
