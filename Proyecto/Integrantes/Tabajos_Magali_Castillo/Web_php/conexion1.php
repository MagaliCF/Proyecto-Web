<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Piramide</title>
	</head>
    <body>
        <form action="conexion.php" method="post">
            
            <div id="new">
                <p>Nombre: </p>
                <input type="text" name="nombre">
                <p>Categoría: </p>
                <input type="text" name="categoria">
                <p>Correo: </p>
                <input type="text" name="correo">
                <br>
            </div>
            
            <div id="delete">
                <p>Borrar por... </p>
                <input type="text" name="item" placeholder="Nombre/Categoria/Correo">
            </div>
            
            <!--div id="mostrar">
                <p>Mostrar por... </p>
                <input type="text" name="item1" placeholder="Nombre/Categoria/Correo">
            </div-->
            <br>
            <input type="submit" name="enviar">
        </form>
    </body>
</html>