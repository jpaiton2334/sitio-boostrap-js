<?php
  
  *	Recopilo los datos vía POST	Con strip_tags suprimo etiquetas HTML y php para evitar una posible inyección.	Como no gestiona base de datos no es necesario limpiar de inyección SQL.*/
  $nombre = strip_tags($_POST['name']);
  $apellidos = strip_tags($_POST['surname']);
  $empresa = strip_tags($_POST['company']);
  $departamento = strip_tags($_POST['department']);
  $telefono = strip_tags($_POST['phone']);
  $correo = strip_tags($_POST['mail']);
  $comentario = strip_tags($_POST['comment']);

  $fecha = time();$fechaFormateada = date("j/n/Y", $fecha);


  /Headers del correo electrónico.
$headers =
	'From: ' . $correoFrom . "\r\n". 
	'Reply-To: ' . $correoDestino. "\r\n" . 
	'X-Mailer: PHP/' . phpversion() .
	'MIME-Version: 1.0\r\n'.
	'Content-type: text/html; charset=UTF-8\r\n';

  //Correo de destino; donde se enviará el correo.
$correoDestino = "jpabloperaltacasanova@gmail.com";

/Formateo el asunto del correo
$asunto = "Contacto WEB_$nombre $apellidos; de $empresa";
//Formateo el cuerpo del correo
$cuerpo = "Enviado por: " . $nombre . ", " . $apellidos . " a las " . $fechaFormateada . "";
$cuerpo .= "Empresa: " . $empresa . ", en el cargo/departamento de " . $departamento . "";
$cuerpo .= "Teléfono de contacto: " . $telefono . "";
$cuerpo .= "E-mail: " . $correo . "";
$cuerpo .= "Comentario: " . $comentario;

// Envío el mensajemail( $correoDestino, $asunto, $cuerpo, $textoEmisor);
?>