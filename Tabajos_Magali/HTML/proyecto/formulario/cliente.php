<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Alta-vendedor</title>
        <link rel="stylesheet" href = "..\..\Proyecto\css\vendedor.css">
    </head>
    <body>
        <h1><b>Crear una cuenta</b></h1>
        <form action="cliente1.php" method="post">
            <table>
                <tbody>
                    <tr>
                        <td>Nombre:</td>
                        <td>&nbsp; </td>
                        <td>&nbsp; </td> 
                        <td><input type="text" name="nombre"></td>
                    </tr>
                    <tr>
                        <td>Apellido paterno:</td>
                        <td>&nbsp; </td>
                        <td>&nbsp; </td> 
                        <td><input type="text" name="apellidoP"></td>
                    </tr>
                    <tr>
                        <td>Apellido materno:</td>
                        <td>&nbsp; </td>
                        <td>&nbsp; </td> 
                        <td><input type="text" name="apellidoM"></td>
                    </tr>
                    <tr>
                        <td>Telefono:</td>
                        <td>&nbsp; </td>
                        <td>&nbsp; </td> 
                        <td><input type="text" name="telefono"></td>
                    </tr>
                    <tr>
                        <td>Colonia:</td>
                        <td>&nbsp; </td>
                        <td>&nbsp; </td> 
                        <td><input type="text" name="colonia"></td>
                    </tr>
                    <tr>
                        <td>Calle:</td>
                        <td>&nbsp; </td>
                        <td>&nbsp; </td> 
                        <td><input type="text" name="calle"></td>
                    </tr>
                    <tr>
                        <td>Numero ext.:</td>
                        <td>&nbsp; </td>
                        <td>&nbsp; </td> 
                        <td><input type="text" name="numero"></td>
                    </tr>
                    <tr>
                        <td>Alcaldía/municipio:</td>
                        <td>&nbsp; </td>
                        <td>&nbsp; </td> 
                        <td><input type="text" name="alc_mun"></td>
                    </tr>
                    <tr>
                        <td>Correo:</td>
                        <td>&nbsp; </td>
                        <td>&nbsp; </td> 
                        <td><input type="email" name="correo"></td>
                    </tr>
                    <tr>
                        <td>Forma de pago:</td>
                        <td>&nbsp; </td>
                        <td>&nbsp; </td> 
                        <td><input type="text" name="pago"></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <input type="submit" name="enviar" id="boton">
        </form>
    </body>
</html>