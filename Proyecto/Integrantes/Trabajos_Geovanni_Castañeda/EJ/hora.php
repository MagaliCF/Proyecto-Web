<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php

$hora = (localtime(time(),true));

echo $hora["tm_hour"];

echo "<br>";

if($hora["tm_hour"]>20 || $hora["tm_hour"]<4){

echo "Buenas noches";

}else{

echo "Buenos dias";

}

?>
</body>
</html>
