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
    $con=new mysqli($severname,$username,$password);
    //checar conexion
    if ($con->connect_error) {
        die("la conexion falló".$con->connect_error);
    }
    //crear base de datos
    $sql="INSERT INTO Invitados(nombre,categoria,correo) VALUES('groot','platita','groot@infinitywars.com')";
    if ($con->query($sql))===TRUE {
        echo "Nuevo registro creado con exito";
    }
    else {
        echo "Error".$sql."<br>".$con->error;
    }
    $con->close();
    ?>
  </body>
</html>
