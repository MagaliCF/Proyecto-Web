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
    $conn=new mysqli($severname,$username,$password);
    //Checar conexion
    if ($conn->connect_error) {
        die("la conexion falló".$conn->connect_error);
    }
    echo "Conectado con exito";
     ?>
  </body>
</html>
