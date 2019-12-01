<!DOCTYPE html>
<html>
<head>
<title>Operadores de asignacion</title>
</head>
<body>
<?php
$x=4;
$y=8;
$x += $y;
echo "<br> ".$x."representa a x += y";
$x -= $y;
echo "<br> ".$x."representa a x -= y";
$x *= $y;
echo "<br> ".$x."representa a x *= y";
$x /= $y;
echo "<br> ".$x."representa a x /= y";
$x %= $y;
echo "<br> ".$x."representa a x %= y";
$x = $y;
echo "<br> ".$x."representa a x = y";
?>
</body>
</html>
