<!DOCTYPE html>
<html lang="es" dir="ltr">
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
    $con=new mysqli($severname,$username,$password);
    //checar conexion
    if ($con->connect_error) {
        die("la conexion falló".$con->connect_error);
    }
    //crear base de datos
    $sql="CREATE DATABASE InfinityWars_DB";
    if (($con->query($sql))===TRUE ){
        echo "Base de datos creada con exito";
    }
    else {
        echo "Error al crear base de datos".$con->error;
    }
    $con->close();
    ?>
  </body>
</html>
