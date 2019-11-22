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
    <div id="header">
      <div class="container">
        <div class="logo">
          <a href="Principal.html">
            <img src="images/logo.png" alt="" height="72" width="156"/>
          </a>
        </div>
        <div class="mainmenu">
          <div id="mainmenu">
            <ul class="sf-menu">
              <li><a href="Principal.html" id="visited">Inicio</a></li>
              <li><a href="Catalogo.html">Catalogo</a>
                <ul>
                  <li><a href="CatalogoEst.html">Estandar</a></li>
                  <li><a href="CatalogoDep.html">Deportivas</a></li>
                  <li><a href="CatalogoVel.html">Megascooters</a></li>
                  <li><a href="CatalogoSco.html">Scooters</a></li>
                  <li><a href="Catalogo4Mt.html">Cuatrimotos</a></li>
                  <li><a href="CatalogoTT.html">Todo terreno</a></li>
                </ul>
              </li>
              <li><a href="contacto.html">Contacto</a></li>
              <li><a href="#">Inicia sesión</a>
                <ul>
                  <li><a href="logv.php">Vendedor</a></li>
                  <li><a href="logc.php">Cliente</a></li>
                </ul>
              </li>
              <li><a href="#">Regístrate</a>
                <ul>
                  <li><a href="vendedor.php">Vendedor</a></li>
                  <li><a href="cliente.php">Cliente</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
          <!-- mainmenu ends here -->
          <!-- Responsive Menu -->
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
    //printf("Algo salió mal :(");
      session_start();
      $usuario= $_POST['correo'];
      $contrasenia= $_POST['pass'];

      $_SESSION['user']=$usuario;
      $_SESSION['psw']=$contrasenia;

      if(isset($usuario)){
        //Consultar si los datos son están guardados en la base de datos
        $consulta= "SELECT * FROM cliente WHERE correo='$usuario' AND password='$contrasenia'";
        $resultado= mysqli_query($conn,$consulta) or die (mysqli_error($conn));
        $fila=mysqli_fetch_array($resultado);
        $consulta2="SELECT `password` FROM cliente WHERE correo='$usuario' AND password='$contrasenia'";
        $resultado2= mysqli_query($conn,$consulta2) or die (mysqli_error($conn));
        $fila2=mysqli_fetch_array($resultado2);
        $id=$fila["password"];

        if (!$fila['password']){
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
