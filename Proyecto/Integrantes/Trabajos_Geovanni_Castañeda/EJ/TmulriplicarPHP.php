<!DOCTYPE html>
<html lang="else" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "<table border='1'>"; ?>
      <?php
    for ($x = 1; $x <= 10; $x++) {
      echo "<tr>";
     for ($y=1; $y<=10; $y++){
    	$tabel=$y*$x;
    echo "<td>";
    echo $x."x".$y."=".$tabel."<br>";
    echo "</td>";
    }
    echo "</tr><br>";
    }
    	echo "</table>";
     ?>
  </body>
</html>
