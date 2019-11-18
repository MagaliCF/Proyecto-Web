<?php  $nombre = $_POST["username"];
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
}
?>
