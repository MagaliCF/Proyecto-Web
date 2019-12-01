<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $severname="localhost";
    $username="root";
    $password="";
    //crear conexion
    $con=new mysqli_connect($severname,$username,$password);
    //Checar conexion
    if ($con){
        die("la conexion falló".$con->connect_error());
    }
    echo "Conectado con exito";
     ?>

  </body>
</html>
