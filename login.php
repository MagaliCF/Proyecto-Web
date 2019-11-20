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
				printf("Algo salió mal :(");
      }

            $conn->close();
		?>

        <p>Ir al perfil</p>
	</body>
</html>
