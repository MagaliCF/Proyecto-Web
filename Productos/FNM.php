<?php
  $servername="localhost";
  $username="root";
  $password="51423";
  $conn=new mysqli($servername,$username,$password);
  $vendedor=1;
  $name=$_POST["nombre"];
  if($conn->connect_error){
    die("La conexion fallo: ".$conn->connect_error);
  }
  $sql="use Base_Proyecto";
  if(($conn->query($sql))===TRUE)
  {
    #checar si ya hay esta marca para no agregarla
    #$idR=rand();
    $sql="INSERT INTO Marca(Nombre) VALUES('".$_POST["Marca"]."')";
    if (($conn->query($sql))===TRUE) {
      echo "se agrego marca";
    }
    else{
      echo "Error: ". $sql . "<br>" . $conn->error;
    }
    #checar este codigo de arriba
    $query ="SELECT idMarca FROM Marca WHERE Nombre='".$_POST["Marca"]."'";
    $aux1=mysqli_query($conn,$query);
    $aux3=mysqli_fetch_array($aux1, MYSQLI_BOTH);
    mysqli_free_result($aux1);
    $sql="INSERT INTO Modelo(Nombre,Precio,Color,Descripcion,Marca_idMarca) VALUES('".$_POST["modelo"]."','".$_POST["precio"]."','".$_POST["color"]."','".$_POST["desc"]."','".$aux3."')";
    if(($conn->query($sql)) === TRUE){
      echo "<br>"."se agrego a modelo";
    }
    else{
      echo "Error: ". $sql . "<br>" . $conn->error;
    }
    #$vendedor=$_COOKIE['COOKIE_DATA_INDEFINED_SESSION']['idVendedor'];
    $query = "SELECT idModelo FROM Modelo WHERE Nombre='".$_POST["modelo"]."'";
    $aux2==mysqli_query($conn,$query);
    $aux4=mysqli_fetch_array($aux2, MYSQLI_BOTH);
    mysqli_free_result($aux2);

    $sql="INSERT INTO Producto(Nombre,Vendedor_idVendedor) VALUES('".$_POST["nombre"]."',$vendedor)";
    if(($conn->query($sql)) === TRUE){
      echo "El producto fue agregado";
    }
    else{
      echo "Error: ". $sql . "<br>" . $conn->error;
    }

  }
#aqui empieza el codigo para automaticamente crear paginas de productos
$nombre_archivo="$name.html";
if(file_exists($nombre_archivo)){
  $mensaje = '<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <head>
        <meta charset="utf-8">
        <meta name="author" content="">
        <meta name="Keyword" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <link rel="stylesheet" href="../css/base.css">
        <link rel="stylesheet" href="../css/skeleton.css">
        <link rel="stylesheet" href="../css/screen.css">
        <link rel="stylesheet" href="../css/prettyPhoto.css" type="text/css" media="screen"/>
        <!-- Favicons-->
        <link rel="shortcut icon" href="../images/favicon.png">
        <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
        <!--Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
        <title>$_POST["nombre"]</title>
    </head>
    <body>
      <div id="header">
        <div class="container">
          <!-- Header | Logo, Menu-->
          <div class="logo">
            <a href="../Principal.html">
              <img src="../images/logo.png" alt="" height="72" width="156"/>
            </a>
          </div>
          <div class="mainmenu">
            <div id="mainmenu">
              <ul class="sf-menu">
                <li><a href="../Principal.html" >Inicio</a></li>
                <li><a href="../Catalogo.html">Catalogo</a>
                  <ul>
                    <li><a href="../CatalogoEst.html">Estandar</a></li>
                    <li><a href="../CatalogoDep.html">Deportivas</a></li>
                    <li><a href="../CatalogoVel.html">Megascooters</a></li>
                    <li><a href="../CatalogoSco.html">Scooters</a></li>
                    <li><a href="../Catalogo4Mt.html">Cuatrimotos</a></li>
                    <li><a href="../CatalogoTT.html">Todo terreno</a></li>
                  </ul>
                </li>
                <li><a href="../contacto.html">Contacto</a></li>
                <li><a href="../cuenta.html">Inicia sesión</a></li>
                <li><a href="#">Regístrate</a>
                  <ul>
                    <li><a href="../vendedor.html">Vendedor</a></li>
                    <li><a href="../cliente.html">Cliente</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
            <!-- mainmenu ends here -->

            <!-- Responsive Menu -->
            <form id="responsive-menu" action="#" method="post">
              <select>
                <option value="">Navegacion</option>
                <option value="../Principal.html">Inicio</option>
                <option value="../Catalogo.html">Catalogo</option>
                <option value="../contact.html">Contact</option>
                <option value="../cuenta.html">Registrate</option>
              </select>
            </form>
          </div>
          <!-- mainmenu ends here -->
        </div>
        <!-- container ends here -->
      <!-- header ends here -->
      <!-- About us ==================================================
      ================================================== -->
      <hr class="separator2">
      <div class="container">
        <div class="one_third">
          <form class="" action="compra.php" method="post">
          <section class="aboutoneleft">
            <h3>$_POST["nombre"]</h3>
            <p> $_POST["color"]</p>
            <p>Precio:$ $_POST["precio"]</p>
            <p class="quote">$_POST["Desc"]</p>
          </section>
        </div>
        <!-- end one-third column ends here -->
        <div class="one_third">
          <section class="aboutonecenter">
            <h3>Marca y modelo</h3>
            <p>Marca: $_POST["Marca"]</p>
            <p class="quote">Modelo: $_POST["modelo"] </p>
            <button type="submit" name="button">Comprar</button>
          </section>
        </div>
        <!-- end one-third column ends here -->
        <div class="one_third lastcolumn">
          <section class="aboutoneright">
            <h3>imagen</h3>
            <img src="../images/catalogo/$_POST["nombre"].jpg" alt=""/>
          </section>
        </div>
        <!-- end one-third column ends here -->
      </div>
    </form>
      <!-- container ends here -->
      <!-- Footer ==================================================
      ================================================== -->
      <!-- Socialize ==================================================
      ================================================== -->
      <hr class="separator2">
      <div class="socialsblock">
        <div class="container socialize">
          <section class="socials">
            <ul class="socials">
              <li><a href="#"><img src="images/socials/twitter.png" alt="" /></a></li>
              <li><a href="#"><img src="images/socials/facebook.png" alt="" /></a></li>
              <li><a href="#"><img src="images/socials/dribbble.png" alt="" /></a></li>
              <li><a href="#"><img src="images/socials/google+.png" alt="" /></a></li>
              <li><a href="#"><img src="images/socials/linkedin.png" alt="" /></a></li>
              <li><a href="#"><img src="images/socials/youtube.png" alt="" /></a></li>
            </ul>
          </section>
        </div>
        <!-- container ends here -->
      </div>
    </div>
  </div>
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
              <li><a href="../CatalogoEst.html">Estandar</a></li>
              <li><a href="../CatalogoDep.html">Deportivas</a></li>
              <li><a href="../CatalogoVel.html">Megascooters</a></li>
              <li><a href="../CatalogoSco.html">Scooters</a></li>
              <li><a href="../Catalogo4Mt.html">Cuatrimotos</a></li>
              <li><a href="../CatalogoTT.html">Todo terreno</a></li>
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
  </html>';
}
else
{
  $mensaje = '<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <head>
        <meta charset="utf-8">
        <meta name="author" content="">
        <meta name="Keyword" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <link rel="stylesheet" href="../css/base.css">
        <link rel="stylesheet" href="../css/skeleton.css">
        <link rel="stylesheet" href="../css/screen.css">
        <link rel="stylesheet" href="../css/prettyPhoto.css" type="text/css" media="screen"/>
        <!-- Favicons-->
        <link rel="shortcut icon" href="../images/favicon.png">
        <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
        <!--Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
        <title>$_POST["nombre"]</title>
    </head>
    <body>
      <div id="header">
        <div class="container">
          <!-- Header | Logo, Menu-->
          <div class="logo">
            <a href="../Principal.html">
              <img src="../images/logo.png" alt="" height="72" width="156"/>
            </a>
          </div>
          <div class="mainmenu">
            <div id="mainmenu">
              <ul class="sf-menu">
                <li><a href="../Principal.html" >Inicio</a></li>
                <li><a href="../Catalogo.html">Catalogo</a>
                  <ul>
                    <li><a href="../CatalogoEst.html">Estandar</a></li>
                    <li><a href="../CatalogoDep.html">Deportivas</a></li>
                    <li><a href="../CatalogoVel.html">Megascooters</a></li>
                    <li><a href="../CatalogoSco.html">Scooters</a></li>
                    <li><a href="../Catalogo4Mt.html">Cuatrimotos</a></li>
                    <li><a href="../CatalogoTT.html">Todo terreno</a></li>
                  </ul>
                </li>
                <li><a href="../contacto.html">Contacto</a></li>
                <li><a href="../cuenta.html">Inicia sesión</a></li>
                <li><a href="#">Regístrate</a>
                  <ul>
                    <li><a href="../vendedor.html">Vendedor</a></li>
                    <li><a href="../cliente.html">Cliente</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
            <!-- mainmenu ends here -->

            <!-- Responsive Menu -->
            <form id="responsive-menu" action="#" method="post">
              <select>
                <option value="">Navegacion</option>
                <option value="../Principal.html">Inicio</option>
                <option value="../Catalogo.html">Catalogo</option>
                <option value="../contact.html">Contact</option>
                <option value="../cuenta.html">Registrate</option>
              </select>
            </form>
          </div>
          <!-- mainmenu ends here -->
        </div>
        <!-- container ends here -->
      <!-- header ends here -->
      <!-- About us ==================================================
      ================================================== -->
      <hr class="separator2">
      <div class="container">
        <div class="one_third">
          <form class="" action="compra.php" method="post">
          <section class="aboutoneleft">
            <h3>$_POST["nombre"]</h3>
            <p> $_POST["color"]</p>
            <p>Precio:$ $_POST["precio"]</p>
            <p class="quote">$_POST["Desc"]</p>
          </section>
        </div>
        <!-- end one-third column ends here -->
        <div class="one_third">
          <section class="aboutonecenter">
            <h3>Marca y modelo</h3>
            <p>Marca: $_POST["Marca"]</p>
            <p class="quote">Modelo: $_POST["modelo"] </p>
            <button type="submit" name="button">Comprar</button>
          </section>
        </div>
        <!-- end one-third column ends here -->
        <div class="one_third lastcolumn">
          <section class="aboutoneright">
            <h3>imagen</h3>
            <img src="../images/catalogo/$_POST["nombre"].jpg" alt=""/>
          </section>
        </div>
        <!-- end one-third column ends here -->
      </div>
    </form>
      <!-- container ends here -->
      <!-- Footer ==================================================
      ================================================== -->
      <!-- Socialize ==================================================
      ================================================== -->
      <hr class="separator2">
      <div class="socialsblock">
        <div class="container socialize">
          <section class="socials">
            <ul class="socials">
              <li><a href="#"><img src="images/socials/twitter.png" alt="" /></a></li>
              <li><a href="#"><img src="images/socials/facebook.png" alt="" /></a></li>
              <li><a href="#"><img src="images/socials/dribbble.png" alt="" /></a></li>
              <li><a href="#"><img src="images/socials/google+.png" alt="" /></a></li>
              <li><a href="#"><img src="images/socials/linkedin.png" alt="" /></a></li>
              <li><a href="#"><img src="images/socials/youtube.png" alt="" /></a></li>
            </ul>
          </section>
        </div>
        <!-- container ends here -->
      </div>
    </div>
  </div>
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
              <li><a href="../CatalogoEst.html">Estandar</a></li>
              <li><a href="../CatalogoDep.html">Deportivas</a></li>
              <li><a href="../CatalogoVel.html">Megascooters</a></li>
              <li><a href="../CatalogoSco.html">Scooters</a></li>
              <li><a href="../Catalogo4Mt.html">Cuatrimotos</a></li>
              <li><a href="../CatalogoTT.html">Todo terreno</a></li>
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
  </html>';
}

if($archivo = fopen($nombre_archivo, "a"))
{
  if(
    fwrite($archivo,$mensaje. "\n"))
  {
    echo "Se ha ejecutado correctamente";
  }
  else
  {
    echo "Ha habido un problema al crear el archivo";
  }

  fclose($archivo);
}
#aqui termina el creador de paginas
  $conn->close();
?>
