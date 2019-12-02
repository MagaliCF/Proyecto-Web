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
    try {
        $con=new PDO("mysql:host=$severname;dbname=InfinityWars_DB",$username,$password);
        //establece el modo de error PDO a excepcion
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "conectado con exito";
    } catch (PDOException $e) {
        echo "La conexion falló".$e->getMessage();
    }
    ?>
  </body>
</html>
