<!doctype>
<html>
	<head>
		<title>ConectarDB</title>
		<meta charset = "utf-8">
	</head>
	<body>
		<?php
			$servername="localhost";
			$username="root";
			$password="";
			
			$conn = new mysqli($servername,$username,$password);
			
			if($conn->connect_error)
			{
				die("La conexion fallo: ". $conn->connect_error);
			}
			
			//crear base de datos InfinityWar_DB
			/*$sql = "create DATABASE InfinityWar_DB";
			if($conn->query($sql) === TRUE)
			{
				echo "Base de datos creada con exito c:";
			}
			
			else{
				echo "Error al crear la base de datos: ". $conn->error;
			}
			*/
			//Cambia base de Datos
			
			$sql = "use InfinityWar_DB";
			
			if($conn->query($sql) === TRUE)
			{
				echo "<br>";
			}
			
			//Crea tabla			
			/*$sql = "CREATE TABLE invitados (nombre varchar(20), 
			categoria varchar(20), 
			correo varchar(40))";
			
			if($conn->query($sql) === TRUE)
			{
				echo "Tabla creada con exito c:";
			}
			
			else{
				echo "Error: ". $sql . "<br>" . $conn->error;
			}*/
			
			//Nuevo registro			
			//$sql = "INSERT INTO Invitados (nombre, categoria, correo) values ('Groot', 'Plantita', 'groot@infinityWar.com')";
            /*$sql = "DELETE FROM Invitados where nombre like Groot"
			
			if($conn->query($sql) === TRUE)
			{
				echo "<br>"."Nuevo registro con exito c:";
			}
			
			else{
				echo "Error: ". $sql . "<br>" . $conn->error;
			}*/
        
            $sql = "INSERT INTO Invitados (nombre, categoria, correo) values ('".$_POST["nombre"]."','".$_POST["categoria"]."','".$_POST["correo"]."')";
			
			if($conn->query($sql) === TRUE)
			{
				echo "<br>"."Nuevo registro con exito c:";
			}
			
			else{
				echo "Error: ". $sql . "<br>" . $conn->error;
			}
            
            //Borrar un registro
            $sql = "DELETE FROM Invitados WHERE (nombre like '".$_POST["item"]."' or  categoria like '".$_POST["item"]."' or correo like '".$_POST["item"]."')";
            if($conn->query($sql) === TRUE)
            {
                echo "<br>"."Registro borrado con exito c:";
            }
            $conn->close();
		?>
	</body>
</html>