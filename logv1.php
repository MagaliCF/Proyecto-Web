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
        $consulta= "SELECT * FROM vendedor WHERE correo='$usuario' AND password='$contrasenia'";
        $resultado= mysqli_query($conn,$consulta) or die (mysqli_error($conexion));
        $fila=mysqli_fetch_array($resultado);
        $consulta2="SELECT `password` FROM vendedor WHERE correo='$usuario' AND password='$contrasenia'";
        $resultado2= mysqli_query($conn,$consulta2) or die (mysqli_error($conn));
        $fila2=mysqli_fetch_array($resultado2);
        $id=$fila["password"];
        if (!$fila['id_usuario']){
          echo "<br>Datos Incorrectos";
        }

      }
  }

        $conn->close();
?>
