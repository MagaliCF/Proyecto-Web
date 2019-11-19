<?php
  $servername="localhost";
  $username="root";
  $password="";
  $conn=new mysqli($servername,%$username,$password);
  if($conn->connect_error){
    die("La conexion fallo: ".$conn->connect_error);
  }
  $sql="use base_proyecto";
  if($conn->query($sql)===TRUE)
  {
    #checar si ya hay esta marca para no agregarla
    $sql="insert into Marca(idMarca,Nombre)
    values ('".$_POST["Marca"]"','".$_POST["Marca"]"')";
    if ($conn->query($sql)===TRUE)) {
      echo "se agrego marca";
    }
    else{
      echo "Error: ". $sql . "<br>" . $conn->error;
    }
    #checar este codigo de arriba
    $sql="insert into Modelo(idModelo,Nombre,Precio,Color,Descripcion,Marca_idMarca)
    values('"$_POST["modelo"]"','"$_POST["modelo"]"','"$_POST["precio"]"','"$_POST["color"]"','"$_POST["desc"]"','"$_POST["Marca"]"')";
    if($conn->query($sql) === TRUE){
      echo "<br>"."se agrego a modelo";
    }
    else{
      echo "Error: ". $sql . "<br>" . $conn->error;
    }
    $vendedor=$_COOKIE['COOKIE_DATA_INDEFINED_SESSION']['idVendedor'];
    $sql="insert into Producto(Nombre ,Modelo_idModelo,Modelo_Marca_idMarca,Vendedor_idVendedor)
    values('"$_POST["nombre"]"','"$_POST["modelo"]"','"$_POST["Marca"]"','"$vendedor"');"
    if($conn->query($sql) === TRUE){
      echo "El producto fue agregado";
    }
    else{
      echo "Error: ". $sql . "<br>" . $conn->error;
    }
  }

  $conn->close();
?>
