<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$msj = $_POST['msj']

$cuerpo = <<<mail
Haz recibido un correo de $nombre <br />
Su correo electronico es: $correo <br />
Ha dejado el siguiente mensaje: <br />
$msj

mail;

$informacion_adicional = 'MIME-Version: 1.0'. "\r\n";
$informacion_adicional .= 'content-type: text/html; charset=utf8'. "\r\n";
$informacion_adicional .= 'from:'.$nombre.'<'.$correo.'>'. "\r\n";

header("location:gracias.html");

MAIL('hernanveyret@hotmail.com','Mensaje dede la pagina de Roxette',$correo, $informacion_adicional);
?>