<!-- Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax2 + bx + c = 0). -->

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
        
        if (($a == 0) && ($b == 0) && ($c == 0)){
            echo "La ecuacion tiene soluciones infinitas";
        }
        if (($a == 0) && ($b == 0) && ($c != 0)) {
             echo "La ecuacion tiene solución";
        }
        if (($a != 0) && ($b != 0) && ($c == 0)) {
            echo "x1 = 0", "<br>";
            echo "x2 = ", -$b / $a, "<br>";                    
        }
        if (($a == 0) && ($b != 0) && ($c != 0)) {
            echo "x1 = x2 = ", -$c / $b;
        }
        if (($a != 0) && ($b != 0) && ($c != 0)) {	
            $d = $b * $b - (4 * $a * $c);
            if ($d < 0) {
                echo "La ecuación no tiene soluciones reales";
            }else{
                echo "x1 = ", (-$b + $d)/(2 * $a), "<br>";
                echo "x2 = ", (-$b - $d)/(2 * $a), "<br>";
            }
        }
        ?>
    </body>
</html>
