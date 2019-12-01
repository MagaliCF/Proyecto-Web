<?php
$servername="localhost";
$username="root";
$password="";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error)
{
  die("La conexion fallo: ". $conn->connect_error);
}
//Cambia base de Datos

$sql = "use base_proyecto";

if($conn->query($sql) === TRUE)
{
  //Nuevo registro

          $sql = "INSERT into Venta(idVenta,costo_total,fecha_entrega,pago,Vendedor_idVendedor,Cliente_idCliente,Producto_idProducto,Admin_idAdmin) values ('".$_POST["nombre"]."','".$_POST["apellidoP"]."','".$_POST["apellidoM"]."','".$_POST["telefono"]."','".$_POST["colonia"]."','".$_POST["calle"]."','".$_POST["numero"]."','".$_POST["alc_mun"]."','".$_POST["correo"]."','".$_POST["pago"]."')";
          if($conn->query($sql) === TRUE)
          {
              echo "<br>"."compra realizada";
          }

          else{
              echo "Error: ". $sql . "<br>" . $conn->error;
          }
      }

      $conn->close();*/
?>
?>
