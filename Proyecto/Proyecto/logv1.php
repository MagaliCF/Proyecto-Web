<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <head>
      <meta charset="utf-8">
      <meta name="author" content="">
      <meta name="Keyword" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <link rel="stylesheet" href="css/base.css">
      <link rel="stylesheet" href="css/skeleton.css">
      <link rel="stylesheet" href="css/screen.css">
      <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
      <!-- Favicons-->
      <link rel="shortcut icon" href="images/favicon.png">
      <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
      <!--Google Fonts-->
      <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
      <title>Inicia-sesion</title>
  </head>
  <body>
          <!-- mainmenu ends here -->
          <!-- Responsive Menu -->
<?php  /*$nombre = $_POST["username"];
$password = $_POST["password"];
echo "Nombre: " . $nombre . "<br/>";
echo "Password: " . $password . "<br/>";
if (!empty($_POST["mantener_sesion_abierta"])) {
        setcookie("COOKIE_INDEFINED_SESSION", TRUE, time()+31622400);
		setcookie("COOKIE_DATA_INDEFINED_SESSION[nombre]", $nombre, time()+31622400);
        setcookie("COOKIE_DATA_INDEFINED_SESSION[password]", $password, time()+31622400);
		echo "Sesión abierta indefinidamente.<br/>";
} else {
	setcookie("COOKIE_CLOSE_NAVEGADOR", TRUE, 0) . "<br/>";
	echo "Sesión abierta hasta que cierre el navegador.<br/>";
}

#este es para checar que haya sesion

if (isset($_COOKIE['COOKIE_INDEFINED_SESSION'])) {
	if ($_COOKIE['COOKIE_INDEFINED_SESSION']) {
		$nombre_user = $_COOKIE['COOKIE_DATA_INDEFINED_SESSION']['nombre'];
		$password_user = $_COOKIE['COOKIE_DATA_INDEFINED_SESSION']['password'];
		#AQUI HACES LA QUERY PARA BUSCAR EN TU BD UN USUARIO Y SU PASSWORD CON LAS VARIABLES ANTERIORES
		header("Location: home.php"); #se le envia a una pagina dependiendo su
	}
}*/
  $servername="localhost";
  $username="root";
  $password="51423";

  $conn = new mysqli($servername,$username,$password);

  if($conn->connect_error)
  {
    die("La conexion fallo: ". $conn->connect_error);
  }
  //Cambia base de Datos

  $sql = "use base_proyecto";

  if($conn->query($sql) === TRUE)
  {
    //printf("Algo salió mal :(");
      session_start();
      $usuario= $_POST['correo'];
      $contrasenia= $_POST['pass'];

      $_SESSION['user']=$usuario;
      $_SESSION['psw']=$contrasenia;

      if(isset($usuario)){
        //Consultar si los datos son están guardados en la base de datos
        $consulta= "SELECT * FROM vendedor WHERE correo='$usuario' AND password='$contrasenia'";
        $resultado= mysqli_query($conn,$consulta) or die (mysqli_error($conn));
        $fila=mysqli_fetch_array($resultado);
        $consulta2="SELECT `password` FROM vendedor WHERE correo='$usuario' AND password='$contrasenia'";
        $resultado2= mysqli_query($conn,$consulta2) or die (mysqli_error($conn));
        $fila2=mysqli_fetch_array($resultado2);
        $id=$fila["password"];

        if (!$fila['id_usuario']){
          echo "<br>Datos Incorrectos";
        }
        else {
          echo "<br>Bienvenido a tu perfil uwu";
        }
      }
    }
        $conn->close();
?>
<!-- socialsblock ends here -->
<!-- Footer ==================================================
================================================== -->
<div class="footer">
  <div class="container">
    <div class="one_fourth">
      <h3>Miembros del Equipo</h3>
      <p><span class="orange"><strong>Nombre:</strong></span> <br>
        Castillo Flores Magali</p>
      <p><span class="orange"><strong>Email:</strong></span> <br>
        magalicastillof@gmail.com<br>
      </p>
    </div>
    <!-- four columns ends here -->
    <div class="one_fourth">
      <h3>Miembros del Equipo</h3>
      <p><span class="orange"><strong>Nombre:</strong></span> <br>
        Castañeda Beltran Geovanni</p>
      <p><span class="orange"><strong>Email:</strong></span> <br>
        Gio.cas.rb@gmail.com<br>
      </p>
    </div>
    <!-- four columns ends here -->
    <div class="one_fourth">
      <h3>Miembros del Equipo</h3>
      <p><span class="orange"><strong>Nombre:</strong></span> <br>
        Arriaga Anastacio Miguel Antonio</p>
      <p><span class="orange"><strong>Email:</strong></span> <br>
        mickeynbalj6@gmail.com<br>
      </p>
    </div>
    <!-- four columns ends here -->
    <div class="one_fourth lastcolumn">
      <h3>About</h3>
      <p>Pagina de compra y venta de motocicletas</p>
      <h3>Catalogo</h3>
      <ul>
        <li><a href="CatalogoEst.html">Estandar</a></li>
        <li><a href="CatalogoVel.html">De velocidad</a></li>
        <li><a href="CatalogoDep.html">Deportivas</a></li>
        <li><a href="CatalogoSco.html">Scooters</a></li>
        <li><a href="Catalogo4Mt.html">Cuatrimotos</a></li>
        <li><a href="CatalogoTT.html">Todo terreno</a></li>
      </ul>
    </div>
    <!-- four columns ends here -->
  </div>
  <!-- container ends here -->
</div>
<!-- footer ends here -->
<!-- Copyright -->
<div id="copyright">
  <div class="container">
    <p class="copyright">&copy; Copyright 2019. by <a href="" rel="nofollow">Equipo X</a>. All rights reserved.</p>
  </div>
  <!-- container ends here -->
</div>
<!-- copyright ends here -->
<!-- End Document-->
<!-- Scripts -->
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
<!-- Main js files -->
<script src="js/screen.js" type="text/javascript"></script>
<!-- Tabs -->
<script src="js/tabs.js" type="text/javascript"></script>
<!-- Include prettyPhoto -->
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<!-- Include Superfish -->
<script src="js/superfish.js" type="text/javascript"></script>
<script src="js/hoverIntent.js" type="text/javascript"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<!-- Modernizr -->
<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>
</body>
</html>
