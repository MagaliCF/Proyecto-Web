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
      <title>Crea_cliente</title>
  </head>
  <body>
    <div id="header">
      <div class="container">
        <!-- Header | Logo, Menu-->
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
                  <li><a href="CatalogoVel.html">Megascooters</a></li>
                  <li><a href="CatalogoDep.html">Deportivas</a></li>
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
              <option value="Principal.html">Inicio</option>
              <option value="Catalogo.html">Catalogo</option>
              <option value="contact.html">Contact</option>
              <option value="cuenta.html">Registrate</option>
            </select>
          </form>
        </div>
        <!-- mainmenu ends here -->
      </div>
      <!-- container ends here -->
    </div>
    <!-- header ends here -->
    <br>
    <hr class="separator1">
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
                    <tr>
                        <td>Contraseña:</td>
                        <td>&nbsp; </td>
                        <td>&nbsp; </td>
                        <td><input type="password" name="pass"></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <input type="submit" name="enviar" id="boton">
        </form>
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
