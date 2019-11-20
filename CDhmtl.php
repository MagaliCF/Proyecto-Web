<?php
  $nombre_archivo="$_POST[nombre].html";
  if(file_exists($nombre_archivo)){
    $mensaje = '<!DOCTYPE html>
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
          <link href="http://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
          <title>Inicio</title>
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
                      <li><a href="CatalogoDep.html">Deportivas</a></li>
                      <li><a href="CatalogoVel.html">Megascooters</a></li>
                      <li><a href="CatalogoSco.html">Scooters</a></li>
                      <li><a href="Catalogo4Mt.html">Cuatrimotos</a></li>
                      <li><a href="CatalogoTT.html">Todo terreno</a></li>
                    </ul>
                  </li>
                  <li><a href="contacto.html">Contacto</a></li>
                  <li><a href="login1.php">Inicia sesión</a></li>
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

        <!-- Slider ==================================================
        ================================================== -->
        <section class="slider">
          <div class="flexslider">
            <ul class="slides">
              <li> <a href="#"><img src="images/catalogo/sc4.jpg" height="675" width="1590" alt=""/></a>
                <section class="caption">
                  <h2 class="shadow3">Lambretta G325</h2>
                  <a class="button" href="#">ver Motocicleta</a></section>
              </li>
              <li> <img src="images/catalogo/tt4.jpg"   height="675" width="1590" alt="" />
                <section class="caption">
                  <h2 class="shadow3">Kawasaki KX250F</h2>
                  <a class="button" href="#">ver Motocicleta</a></section>
              </li>
              <li> <a href="#"><img src="images/catalogo/vel4.jpg"   height="675" width="1590" alt="" /></a>
                <section class="caption">
                  <h2 class="shadow3">Aprilia RS 660</h2>
                  <a class="button" href="#">ver Motocicleta</a></section>
              </li>
            </ul>
          </div>
          <!-- flexslider ends here -->
        </section>
        <!-- slider ends here -->
        <br><br>
        <hr class="separator2">
        <br><br>
        <!--Latest Photos ==================================================
        ================================================== -->
        <div class="container portfolio">
        <div class="container latest">
          <div class="one_third">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/est4.jpg" alt="alt"/></a>
              <figcaption> <a href="#">
                <h3 class="heading">>Italika AT125 RT</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/4M4.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">Suzuki KingQuad 750AXi</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third lastcolumn">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/est7.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">Yamaha TMAX</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/sc4.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">Lambretta G325</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/tt4.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">Kawasaki KX250F</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third lastcolumn">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/vel4.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">Aprilia RS 660</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/est5.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">Italika 125 FL </h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/est9.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">SYM Fiddle 125</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third lastcolumn">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/est5.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">Husqvarna 701</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
        <!-- end container -->

        <!-- Socialize ==================================================
        ================================================== -->
        <hr class="separator2">
        <div class="socialsblock">
          <div class="container socialize">
            <h3>Socialize with us!</h3>
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
                <li><a href="CatalogoDep.html">Deportivas</a></li>
                <li><a href="CatalogoVel.html">Megascooters</a></li>
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
          <link href="http://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
          <title>Inicio</title>
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
                      <li><a href="CatalogoDep.html">Deportivas</a></li>
                      <li><a href="CatalogoVel.html">Megascooters</a></li>
                      <li><a href="CatalogoSco.html">Scooters</a></li>
                      <li><a href="Catalogo4Mt.html">Cuatrimotos</a></li>
                      <li><a href="CatalogoTT.html">Todo terreno</a></li>
                    </ul>
                  </li>
                  <li><a href="contacto.html">Contacto</a></li>
                  <li><a href="cuenta.html">Inicia sesión</a></li>
                  <li><a href="#">Regístrate</a>
                    <ul>
                      <li><a href="vendedor.html">Vendedor</a></li>
                      <li><a href="cliente.html">Cliente</a></li>
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

        <!-- Slider ==================================================
        ================================================== -->
        <section class="slider">
          <div class="flexslider">
            <ul class="slides">
              <li> <a href="#"><img src="images/catalogo/sc4.jpg" height="675" width="1590" alt=""/></a>
                <section class="caption">
                  <h2 class="shadow3">Lambretta G325</h2>
                  <a class="button" href="#">ver Motocicleta</a></section>
              </li>
              <li> <img src="images/catalogo/tt4.jpg"   height="675" width="1590" alt="" />
                <section class="caption">
                  <h2 class="shadow3">Kawasaki KX250F</h2>
                  <a class="button" href="#">ver Motocicleta</a></section>
              </li>
              <li> <a href="#"><img src="images/catalogo/vel4.jpg"   height="675" width="1590" alt="" /></a>
                <section class="caption">
                  <h2 class="shadow3">Aprilia RS 660</h2>
                  <a class="button" href="#">ver Motocicleta</a></section>
              </li>
            </ul>
          </div>
          <!-- flexslider ends here -->
        </section>
        <!-- slider ends here -->
        <br><br>
        <hr class="separator2">
        <br><br>
        <!--Latest Photos ==================================================
        ================================================== -->
        <div class="container portfolio">
        <div class="container latest">
          <div class="one_third">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/est4.jpg" alt="alt"/></a>
              <figcaption> <a href="#">
                <h3 class="heading">>Italika AT125 RT</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/4M4.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">Suzuki KingQuad 750AXi</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third lastcolumn">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/est7.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">Yamaha TMAX</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/sc4.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">Lambretta G325</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/tt4.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">Kawasaki KX250F</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third lastcolumn">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/vel4.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">Aprilia RS 660</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/est5.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">Italika 125 FL </h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/est9.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">SYM Fiddle 125</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
          <div class="one_third lastcolumn">
            <figure class="shadow"><a href="#" class="thumb"><img src="images/catalogo/est5.jpg" alt="alt" /></a>
              <figcaption> <a href="#">
                <h3 class="heading">Husqvarna 701</h3>
                </a>
                <p class="bioquote">Descripcion  </p>
              </figcaption>
            </figure>
          </div>
          <!-- one_third ends here -->
        <!-- end container -->

        <!-- Socialize ==================================================
        ================================================== -->
        <hr class="separator2">
        <div class="socialsblock">
          <div class="container socialize">
            <h3>Socialize with us!</h3>
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
                <li><a href="CatalogoDep.html">Deportivas</a></li>
                <li><a href="CatalogoVel.html">Megascooters</a></li>
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

 ?>
