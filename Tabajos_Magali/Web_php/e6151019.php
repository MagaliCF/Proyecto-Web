<!doctype html>
<html>
    <head>
        <title>Operadores aritmeticos</title>
    </head>
    <body>
        <?php
            $n1 = 7;
            $n2 = 4;
            $suma = $n1 += $n2;
            $resta = $n1 -= $n2;
            $mult = $n1 *= $n2;
            $div = $n1 /= $n2;
            $mod = $n1 %= $n2;        
        
            echo "Suma $n1 += $n2 = ".$suma."<br>";
            echo "Resta $n1 -= $n2 = ".$resta."<br>";
            echo "Multiplicacion $n1 *= $n2 = ".$mult."<br>";
            echo "Division $n1 /= $n2 = ".$div."<br>";
            echo "Modulo $n1 %= $n2 = ".$mod."<br>";
        ?>
    </body>
</html>
