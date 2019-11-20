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
			//Cambia base de Datos

			$sql = "use base_proyecto";

			if($conn->query($sql) === TRUE)
			{
				//Nuevo registro

                $sql = "insert into cliente (nombre,apPat,apMat,telefono,colonia,calle,numero,alc_mun,correo,forma_pago,password) values ('".$_POST["nombre"]."','".$_POST["apellidoP"]."','".$_POST["apellidoM"]."','".$_POST["telefono"]."','".$_POST["colonia"]."','".$_POST["calle"]."','".$_POST["numero"]."','".$_POST["alc_mun"]."','".$_POST["correo"]."','".$_POST["pago"]."','".$_POST["pass"]."')";

                if($conn->query($sql) === TRUE)
                {
                    echo "<br>"."Ahora ya puedes disfrutar de nuestros servicios";
                }

                else{
                    echo "Error: ". $sql . "<br>" . $conn->error;
                }
            }

            $conn->close();
		?>

        <p><a href="localhost/Proyecto-Web/login">Ir al perfil</a></p>
	</body>
</html>
