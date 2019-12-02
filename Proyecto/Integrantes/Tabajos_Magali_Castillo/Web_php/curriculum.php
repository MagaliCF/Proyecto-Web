<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Curriculum-vitae</title>
		<meta name="author" content="Magali Castillo">
		<meta name="description" content="Ejercicio de formulario con HTML">
		<meta name="generator" content="Tecnologías para la web">
		<meta name="keywords" content="formulario, HTML5">
	</head>
	
	<body style="background-color:FLORALWHITE; font-family: arial">
		<form action="curriculum1.php" method="post">
		
			<div style="background-color:OLDLACE">
				<br>
				<center><p style="font-family:verdana"><b>CURRICULUM VITAE</b><p></center>
				<br>
			</div>
			
			<br>
			
			<div>
				<fieldset>
					<legend><b>Datos personales</b></legend>
					<table>
						<tbody>
							<tr>
								<td>Nombre:</td>
								<td>&nbsp; </td>
								<td>&nbsp; </td>
								<td><input type="text" name="nombre"></td>
							</tr>
							<tr>							
								<td>Correo electrónico:</td>
								<td>&nbsp; </td>
								<td>&nbsp; </td>
								<td><input type="email" name="correo"></td>
							</tr>
							<tr>							
								<td>Celular:</td>
								<td>&nbsp; </td>
								<td>&nbsp; </td>
								<td><input type="text" name="celular"></td>
							</tr>
							<tr>							
								<td>Dirección:</td>
								<td>&nbsp; </td>
								<td>&nbsp; </td>
								<td><input type="text" name="direccion"></td>
							</tr>
							<tr>							
								<td>RFC:</td>
								<td>&nbsp; </td>
								<td>&nbsp; </td>
								<td><input type="text" name="rfc"></td>
							</tr>
							<tr>							
								<td>CURP:</td>
								<td>&nbsp; </td>
								<td>&nbsp; </td>
								<td><input type="text" name="curp"></td>
							</tr>
							<tr>							
								<td>Cédula profesional:</td>
								<td>&nbsp; </td>
								<td>&nbsp; </td>
								<td><input type="number" name="cedula"></td>
							</tr>
							<tr>							
								<td>Estado civil:</td>
								<td>&nbsp; </td>
								<td>&nbsp; </td>
								<td>
									<select name="estadoc">
										<option value="Soltero">Soltero</option>
										<option value="Casado">Casado</option>
										<option value="Divorviado">Divorciado</option>
										<option value="Viudo">Viudo</option>
									</select>
								</td>
							</tr>
							<tr>							
								<td>Fecha de nacimiento:</td>
								<td>&nbsp; </td>
								<td>&nbsp; </td>
								<td><input type="date" name="fachanac"></td>
							</tr>
							<tr>							
								<td>Lugar de nacimiento:</td>
								<td>&nbsp; </td>
								<td>&nbsp; </td>
								<td><input type="text" name="lugarnac"></td>
							</tr>
						</tbody>
					</table>
			    </fieldset>
			  <br><br>
			</div>
			
			<!--Datos académicos-->
			
			<div>
				<fieldset>
					<legend><b>Datos académicos</b></legend>
					<table>
						<tbody>
							<tr>							
								<td>Ultimo grado de estudios:</td>
								<td>&nbsp; </td>
								<td>
									<select name="grado">
										<option value="Doctorado">Doctorado</option>
										<option value="Maestría">Maestría</option>
										<option value="Ingenieria">Ingenieria</option>
										<option value="Licenciatura">Licenciatura</option>
										<option value="Media_S">Media superior</option>
										<option value="EduB">Educación básica</option>
										<option value="SN">Sin estudios</option>
									</select>
								</td>
							</tr>
							<tr>							
								<td>Escuela donde estudió:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="escuela"></td>
							</tr>
							<tr>							
								<td>Periodo de estudio:</td>
								<td>&nbsp; </td>
								<td>
									<table style="width: 50%">
										<tbody>
											<tr>
												<td style="width: 50%"><input type="text" style="width: 90%" name="peri1"></td>
												<td style="width: 50%"><input type="text" style="width: 90%" name="peri2"></td>
											</tr>
										</tbody>
									</table>
								<!--td><input type="number"></td-->
							</td>
							</tr>
							<tr>
								<td>Titulado:</td>
								<td>&nbsp; </td>
								<td>
									<select name="titulado">
										<option value="Si">Si</option>
										<option value="No">No</option>
									</select>
								</td>
							</tr>
							<tr>							
								<td>Escuela nivel superior:<td>
								<td>
									<select name="superior">
										<option value="IPN">IPN</option>
										<option value="UNAM">UNAM</option>
										<option value="UAM">UAM</option>
										<option value="Otro">Otro</option>
									</select>
								</td>
							</tr>
							<tr>							
								<td>Periodo de estudio:</td>
								<td>&nbsp; </td>
								<td>
									<table style="width: 50%">
										<tbody>
											<tr>
												<td style="width: 50%"><input type="text" style="width: 90%" name="superior1"></td>
												<td style="width: 50%"><input type="text" style="width: 90%" name="superior2"></td>
											</tr>
										</tbody>
									</table>
								<!--td><input type="number"></td-->
							</td>
							</tr>
							<tr>							
								<td>Escuela nivel medio superior:<td>
								<td>
									<select name="mediosup">
										<option value="CECYT">CECYT</option>
										<option value="CCH">CCH</option>
										<option value="Preparatoria">Preparatoria</option>
										<option value="Bachillerato">Bachillerato</option>
										<option value="Otro">Otro</option>
									</select>
								</td>
							</tr>
							<tr>							
								<td>Periodo de estudio:</td>
								<td>&nbsp; </td>
								<td>
									<table style="width: 50%">
										<tbody>
											<tr>
												<td style="width: 50%"><input type="text" style="width: 90%" name="mediosup1"></td>
												<td style="width: 50%"><input type="text" style="width: 90%" name="mediosup2"></td>
											</tr>
										</tbody>
									</table>
								<!--td><input type="number"></td-->
							</td>
							</tr>
							<tr>
								<td>Idioma que domina: </td>
								<td>&nbsp; </td>
								<td>
									<select name="idiomas" size="3" multiple>
   										<option value="Español">Español</option>
									    <option value="Inglés">Inglés</option>
									    <option value="Francés">Francés</option>
									    <option value="Italiano">Italiano</option>
									    <option value="Chino">Chino</option>
									    <option value="Ruso">Ruso</option>
  								</select>
								</td>
							</tr>
							<tr>
								<td>Porcentaje que domina: </td>
								<td>&nbsp; </td>
								<td><input type="number" style="width: 50%" name="porcentaje"> %</td>
							</tr>
						</tbody>
					</table>
			    </fieldset>
			  <br><br>
			</div>

			<!--Especialidades-->

			<div>
				<fieldset>
					<legend><b>Especialidades</b></legend>
					<table>
						<tbody>
							<tr>							
								<td>Especialidad:</td>
								<td>&nbsp; </td>
								<td>
									<select name="especialidad1">
									<br><br>
										<option value="Bases de datos">Bases de datos</option>
										<option value="Creacion de páginas Web">Creacion de paginas web</option>
										<option value="Programación competitiva">Programacion competitiva</option>
										<option value="Diseño de bases de datos">Diseño de bases de datos</option>
									</select>
								</td>
							</tr>
							<tr>							
								<td>Periodo de estudio:</td>
								<td>&nbsp; </td>
								<td>
									<table style="width: 50%">
										<tbody>
											<tr>
												<td style="width: 50%"><input type="text" style="width: 90%" name="especialidad11"></td>
												<td style="width: 50%"><input type="text" style="width: 90%" name="especialidad12"></td>
											</tr>
										</tbody>
									</table>
								<!--td><input type="number"></td-->
								</td>
							</tr>
							<tr>							
								<td>Horas:</td>
								<td>&nbsp; </td>
								<td><input type="number" name="horas1"></td>
							</tr>
							<tr>							
								<td>Documento recibido:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="documento1"></td>
							</tr>
							<td><br>Especialidad:</td>
							<td>&nbsp; </td>
							<td>
									<select name="especialidad2">
									<br><br>
										<option value="Bases de datos">Bases de datos</option>
										<option value="Creacion de páginas Web">Creacion de paginas web</option>
										<option value="Programación competitiva">Programacion competitiva</option>
										<option value="Diseño de bases de datos">Diseño de bases de datos</option>
									</select>
								</td>
						
						<tr>							
							<td>Periodo de estudio:</td>
							<td>&nbsp; </td>
							<td>
								<table style="width: 50%">
									<tbody>
										<tr>
											<td style="width: 50%"><input type="text" style="width: 90%" name="especialidad21"></td>
											<td style="width: 50%"><input type="text" style="width: 90%" name="especialidad22"></td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
						<tr>							
							<td>Horas:</td>
							<td>&nbsp; </td>
							<td><input type="number" name="horas2"></td>
						</tr>
	 					<tr>							
							<td>Documento recibido:</td>
							<td>&nbsp; </td>
							<td><input type="text" name="documento2"></td>
						</tr>
						</tbody>
					</table>
			    </fieldset>
			  <br><br>
			</div>

			<!--Datos laborales-->

			<div>
				<fieldset>
					<legend><b>Datos laborales</b></legend>
					<table>
						<tbody>
							<tr>
								<td>Lugar de su último trabajo:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="ultimot"></td>
							</tr>
							<tr>							
								<td>Periodo que trabajó:</td>
								<td>&nbsp; </td>
								<td>
								<table style="width: 50%">
									<tbody>
										<tr>
											<td style="width: 50%"><input type="text" style="width: 90%" name="ultimot1"></td>
											<td style="width: 50%"><input type="text" style="width: 90%" name="ultimot2"></td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
						<tr>							
							<td>Último cargo desempeñado:</td>
							<td>&nbsp; </td>
							<td><input type="text" name="cargo"></td>
						</tr>
						<tr>							
							<td>Nombre de su jefe:</td>
							<td>&nbsp; </td>
							<td><input type="text" name="jefe1"></td>
						</tr>
						<tr>							
							<td>Correo electrónico:</td>
							<td>&nbsp; </td>
							<td><input type="email" name="correo1"></td>
						</tr>
						<tr>							
							<td>Teléfono o celular:</td>
							<td>&nbsp; </td>
							<td><input type="text" name="telefono1"></td>
						</tr>
						<tr>							
							<td>Motivo de su retiro:</td>
							<td>&nbsp; </td>
							<td><input type="text" name="retiro1"></td>
						</tr>
						<tr>
							<td><br><br>Lugar de su penúltimo trabajo:</td>
							<td>&nbsp; </td>
							<td><br><br><input type="text" name="penultimot"></td>
						</tr>
						<tr>							
						<td>Periodo de su penúltimo trabajo:</td>
						<td>&nbsp; </td>
						<td>
							<table style="width: 50%">
								<tbody>
									<tr>
										<td style="width: 50%"><input type="text" style="width: 90%" name="penultimot1"></td>
										<td style="width: 50%"><input type="text" style="width: 90%" name="penultimot2"></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
						<tr>							
							<td>Penúltimo cargo desempeñado:</td>
							<td>&nbsp; </td>
							<td><input type="text" name="cargo2"></td>
						</tr>
						<tr>							
							<td>Nombre de su penúltimo jefe:</td>
							<td>&nbsp; </td>
							<td><input type="text" name="jefe2"></td>
						</tr>
						<tr>							
							<td>Correo electrónico:</td>
							<td>&nbsp; </td>
							<td><input type="email" name="correo2"></td>
						</tr>
						<tr>							
							<td>Teléfono o celular:</td>
							<td>&nbsp; </td>
							<td><input type="text" name="telefono2"></td>
						</tr>
						<tr>							
							<td>Motivo de su retiro:</td>
							<td>&nbsp; </td>
							<td><input type="text" name="retiro2"></td>
						</tr>
						</tbody>
					</table>
			    </fieldset>
			  <br><br>
			</div>

			<!--Referencias-->

			<div>
				<fieldset>
					<legend><b>Referencias</b></legend>
					<table>
						<tbody>
							<tr>
								<td>Persona 1</td>
							</tr>
							<tr>
								<td>Nombre:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="nombre1"></td>
							</tr>
							<tr>
								<td>Cargo:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="cargop1"></td>
							</tr>
							<tr>
								<td>Empresa:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="empresa1"></td>
							</tr>
							<tr>							
								<td>Correo electrónico:</td>
								<td>&nbsp; </td>
								<td><input type="email" name="correp1"></td>
							</tr>
							<tr>							
							<td>Teléfono de oficina:</td>
							<td>&nbsp; </td>
							<td>
								<table style="width: 50%">
									<tbody>
										<tr>
											<td style="width: 50%"><input type="text" style="width: 90%" name="oficina1"></td>
											<td>Ext</td>
											<td style="width: 50%"><input type="text" style="width: 75%" name="ext1"></td>
										</tr>
									</tbody>
								</table>
							</td>
							<tr>
								<td>Celular:</td>
								<td>&nbsp; </td>
								<td><input type="texto" name="celularp1"></td>
							</tr>
							<tr>							
								<td>Tiempo de conocerlo:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="tiempo1"></td>
							</tr>
							<tr>							
								<td>Parentesco:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="parentesco1"></td>
							</tr>
							<tr>
								<td><br><br>Persona 2</td>
							</tr>
							<tr>
								<td>Nombre:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="nombre2"></td>
							</tr>
							<tr>
								<td>Cargo:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="cargop2"></td>
							</tr>
							<tr>
								<td>Empresa:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="empresa2"></td>
							</tr>
							<tr>							
								<td>Correo electrónico:</td>
								<td>&nbsp; </td>
								<td><input type="email" name="correop2"></td>
							</tr>
							<tr>							
							<td>Teléfono de oficina:</td>
							<td>&nbsp; </td>
							<td>
								<table style="width: 50%">
									<tbody>
										<tr>
											<td style="width: 50%"><input type="text" style="width: 90%" name="oficina2"></td>
											<td>Ext</td>
											<td style="width: 50%"><input type="number" style="width: 75%" name="ext2"></td>
										</tr>
									</tbody>
								</table>
							</td>
							<tr>
								<td>Celular:</td>
								<td>&nbsp; </td>
								<td><input type="texto" name="celularp2"></td>
							</tr>
							<tr>							
								<td>Tiempo de conocerlo:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="tiempo2"></td>
							</tr>
							<tr>							
								<td>Parentesco:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="parentesco2"></td>
							</tr>
							<tr>
								<td><br><br>Persona 3</td>
							</tr>
							<tr>
								<td>Nombre:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="nombre3"></td>
							</tr>
							<tr>
								<td>Cargo:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="cargop3"></td>
							</tr>
							<tr>
								<td>Empresa:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="empresa3"></td>
							</tr>
							<tr>							
								<td>Correo electrónico:</td>
								<td>&nbsp; </td>
								<td><input type="email" name="correop3"></td>
							</tr>
							<tr>							
							<td>Teléfono de oficina:</td>
							<td>&nbsp; </td>
							<td>
								<table style="width: 50%">
									<tbody>
										<tr>
											<td style="width: 50%"><input type="text" style="width: 90%" name="oficina3"></td>
											<td>Ext</td>
											<td style="width: 50%"><input type="text" style="width: 75%" name="ext3"></td>
										</tr>
									</tbody>
								</table>
							</td>
							<tr>
								<td>Celular:</td>
								<td>&nbsp; </td>
								<td><input type="texto" name="celularp3"></td>
							</tr>
							<tr>							
								<td>Tiempo de conocerlo:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="tiempo3"></td>
							</tr>
							<tr>							
								<td>Parentesco:</td>
								<td>&nbsp; </td>
								<td><input type="text" name="parentesco3"></td>
							</tr>
						</tbody>
					</table>
			    </fieldset>
			  <br><br>
			</div>

			<!--Lenguajes de programación-->

			<div>
				<fieldset>
					<legend><b>Lenguajes de programación</b></legend>
						<form name="prog">
							<table>
								<tr>
									<td><input type="checkbox" value="Java" name="java">Java</td>
									<td>&nbsp; </td>
									<td>&nbsp; </td>
									<td><input type="checkbox" value="C#" name="c#">C#</td>
								</tr>
								<tr>
									<td><input type="checkbox" value="Python" name="python">Python</td>
									<td>&nbsp; </td>
									<td>&nbsp; </td>
									<td><input type="checkbox" value="SQL" name="sql">SQL</td>
								</tr>
								<tr>
									<td><input type="checkbox" value="C" name="c">C</td>
									<td>&nbsp; </td>
									<td>&nbsp; </td>
									<td><input type="checkbox" value="HTML" name="html">HTML</td>
								</tr>
								<tr>
									<td><input type="checkbox" value="Js" name="js">JavaScript</td>
									<td>&nbsp; </td>
									<td>&nbsp; </td>
									<td><input type="checkbox" value="Kotin" name="kotin">Kotin</td>
								</tr>
								<tr>
									<td><input type="checkbox" value="Códigos G&M" name="codigos">Códigos G&M</td>
									<td>&nbsp; </td>
									<td>&nbsp; </td>
									<td><input type="checkbox" value="Arduino" name="arduino">Arduino</td>
								</tr>
								<tr>
									<td><input type="checkbox" value="CNC Fresadora" name="cncf">CNC Fresadora</td>
									<td>&nbsp; </td>
									<td>&nbsp; </td>
									<td><input type="checkbox" value="CNC trono" name="cnct">CNC trono</td>
								</tr>
								<tr>
									<td><input type="checkbox" value="JSP" name="jsp">JSP</td>
									<td>&nbsp; </td>
									<td>&nbsp; </td>
									<td><input type="checkbox" value="JSF" name="jsf">JSF</td>
								</tr>
								<tr>
									<td><input type="checkbox" value="Prolog" name="prolog">Prolog</td>
									<td>&nbsp; </td>
									<td>&nbsp; </td>
									<td><input type="checkbox" value="CSS" name="css">CSS</td>
								</tr>
							</table>
						</form>
			    </fieldset>
			  <br><br>
			  <input type="submit" name="enviar">
			</div>
		</form>
	</body>
</html>