<?php
for ($x=0; $x < 5 ; $x++) {
  $nombre_archivo="Productos/$x.html";
  if(file_exists($nombre_archivo)){
    $mensaje = '<!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
      <h1>El archivo se modifico</h1>
      </body>
    </html>';
  }
  else
  {
    $mensaje = '<!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
        <h1>el archivo se creo</h1>
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
}
 ?>
