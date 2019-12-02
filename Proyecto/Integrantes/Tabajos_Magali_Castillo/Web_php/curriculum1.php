<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 2 php </title>
    <style>
        body {
            background-color: rgb(242, 197, 133);   
        }
        #myHeader{
            
        }
    </style>
</head>
<body>
    <div id="myHeader">
	   <center><?php echo "MI CURRICULUM"; ?> <br><br></center>
    </div>
    
    <div class="contenedor">
        <div id="personales">
            <?php echo "Datos personales "; ?><br>
            Nombre: <?php echo $_POST["nombre"]; ?><br>
            Correo: <?php echo $_POST["correo"]; ?><br>
            Celular: <?php echo $_POST["celular"]; ?><br>
            Dirección: <?php echo $_POST["direccion"]; ?> <br>
            RFC: <?php echo $_POST["rfc"]; ?><br>
            CURP: <?php echo $_POST["curp"]; ?><br>
            Cédula profesional:: <?php echo $_POST["cedula"]; ?><br>
            Estado civil: <?php echo $_POST["estadoc"]; ?><br>
            Fecha de nacimiento: <?php echo $_POST["fachanac"]; ?><br>
            Lugar de nacimiento : <?php echo $_POST["lugarnac"]; ?><br><br>
        </div>

        <div id="academicos">
            <?php echo "Datos académicos "; ?><br>
            Ultimo grado de estudios: <?php echo $_POST["grado"]; ?><br>
            Escuela: <?php echo $_POST["escuela"]; ?><br>
            Periodo: <?php echo $_POST["peri1"]; echo " - "; echo $_POST["peri2"]; ?><br>
            Titulado: <?php echo $_POST["titulado"]; ?><br> 
            Escuela superior: <?php echo $_POST["superior"]; ?><br>
            Periodo: <?php echo $_POST["superior1"]; echo " - "; echo $_POST["mediosup2"]; ?><br>
            Escuela medio superior: <?php echo $_POST["mediosup"]; ?><br>
            Periodo: <?php echo $_POST["mediosup1"]; echo " - "; echo $_POST["mediosup2"]; ?><br>
            Idiomas dominados: <?php echo $_POST["idiomas"]; ?><br>
            Porcentaje dominado: <?php echo $_POST["porcentaje"]; echo "%";?><br><br>
        </div>

        <?php echo "Especialidades"; ?><br>
        Especialidad 1: <?php echo $_POST["especialidad1"]; ?> <br>
        Periodo: <?php echo $_POST["especialidad11"]; echo " - "; echo $_POST["especialidad12"]; ?><br>
        Horas : <?php echo $_POST["horas1"]; ?><br><br>
        Especialidad 2: <?php echo $_POST["especialidad2"]; ?> <br>
        Periodo: <?php echo $_POST["especialidad21"]; echo " - "; echo $_POST["especialidad22"]; ?><br>
        Horas : <?php echo $_POST["horas2"]; ?><br><br>

        <?php echo "Datos laborales"; ?><br>
        Ultimo trabajo: <?php echo $_POST["ultimot"]; ?><br> 
        Periodo: <?php echo $_POST["ultimot1"]; echo " - "; echo $_POST["ultimot2"]; ?><br>
        Cargo desempeñado: <?php echo $_POST["cargo"]; ?><br> 
        Jefe: <?php echo $_POST["jefe1"]; ?><br>
        Correo electrónico: <?php echo $_POST["correo1"]; ?><br> 
        Telefono: <?php echo $_POST["telefono1"]; ?><br> 
        Motivo de retiro... <br>
        <?php echo $_POST["retiro1"]; ?><br><br>
        Penúltimo trabajo: <?php echo $_POST["penultimot"]; ?><br> 
        Periodo: <?php echo $_POST["penultimot1"]; echo " - "; echo $_POST["penultimot2"]; ?><br>
        Cargo desempeñado: <?php echo $_POST["cargo2"]; ?><br> 
        Jefe: <?php echo $_POST["jefe2"]; ?><br>
        Correo electrónico: <?php echo $_POST["correo2"]; ?><br> 
        Telefono: <?php echo $_POST["telefono2"]; ?><br> 
        Motivo de retiro... <br>
        <?php echo $_POST["retiro2"]; ?><br><br>

        <?php echo "Referencias"; ?><br>
        <?php echo "Persona 1"; ?><br>
        Nombre: <?php echo $_POST["nombre1"]; ?><br> 
        Cargo desempeñado: <?php echo $_POST["cargop1"]; ?><br>
        Empresa <?php echo $_POST["empresa1"]; ?><br>
        Correo electrónico: <?php echo $_POST["correp1"]; ?><br> 
        Tel. oficina: <?php echo $_POST["oficina1"]; 
        echo "Ext.: "; echo $_POST["ext1"]; ?><br> 
        Celular: <?php echo $_POST["celularp1"]; ?><br> 
        Tiempo de conocerlo: <?php echo $_POST["tiempo1"]; ?><br> 
        Parentesco: <?php echo $_POST["parentesco1"]; ?><br>

        <?php echo "Persona 2"; ?><br>
        Nombre: <?php echo $_POST["nombre2"]; ?><br> 
        Cargo desempeñado: <?php echo $_POST["cargop2"]; ?><br>
        Empresa <?php echo $_POST["empresa2"]; ?><br>
        Correo electrónico: <?php echo $_POST["correop2"]; ?><br> 
        Tel. oficina: <?php echo $_POST["oficina2"]; 
        echo "Ext.: "; echo $_POST["ext2"]; ?><br> 
        Celular: <?php echo $_POST["celularp2"]; ?><br> 
        Tiempo de conocerlo: <?php echo $_POST["tiempo2"]; ?><br> 
        Parentesco: <?php echo $_POST["parentesco2"]; ?><br>
        <?php echo "Persona 3"; ?><br>
        Nombre: <?php echo $_POST["nombre3"]; ?><br> 
        Cargo desempeñado: <?php echo $_POST["cargop3"]; ?><br>
        Empresa <?php echo $_POST["empresa3"]; ?><br>
        Correo electrónico: <?php echo $_POST["correop3"]; ?><br> 
        Tel. oficina: <?php echo $_POST["oficina3"]; 
        echo "Ext.: "; echo $_POST["ext3"]; ?><br> 
        Celular: <?php echo $_POST["celularp3"]; ?><br> 
        Tiempo de conocerlo: <?php echo $_POST["tiempo3"]; ?><br> 
        Parentesco: <?php echo $_POST["parentesco3"]; ?><br><br>
    </div>
</body>
</html>