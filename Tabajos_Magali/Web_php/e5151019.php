<!doctype html>
<html>
    <head>
        <title>Operadores aritmeticos</title>
    </head>
    <body>
        <?php
            $n1 = 2;
            $n2 = 8;
            $suma = $n1 + $n2;
            $resta = $n1 - $n2;
            $mult = $n1 * $n2;
            $div = $n1 / $n2;
            $mod = $n1 % $n2;
            $exp = $n1 ** $n2;
            
            echo "Si tomamos $n1 y $n2... <br><br>";
            echo "Suma = ".$suma."<br>";
            echo "Resta = ".$resta."<br>";
            echo "Multiplicacion = ".$mult."<br>";
            echo "Division = ".$div."<br>";
            echo "Modulo = ".$mod."<br>";
            echo "Exponencial = ".$exp."<br>";
        ?>
    </body>
</html>
