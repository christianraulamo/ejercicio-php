<!-- Realiza un programa que calcule el tiempo que tardará en caer un objeto desde una altura h. Aplica
la fórmula t = √2h g siendo g = 9:81m/s2 -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = $_GET['a'];
        $g = 9.81;
        $z = (((2 * $a) / $g));
        
        echo "El tiempo que tarda en caer el objeto es de: ";
        echo sqrt($z);    
        echo " sg.";
        ?>
    </body>
</html>
