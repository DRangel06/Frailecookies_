<?php

//Llamando a los campos
$nombre = $_POST['fullname'];
$correo = $_POST['email'];
$telefono = $_POST['phone'];
$mensaje = $_POST['mensaje'];

//Datos para el correo
$destinatario = "frailecookies@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

//Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje.html')

?>