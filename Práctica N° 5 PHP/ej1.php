Escribir un script en PHP para poder enviar un correo electrónico, con formato HTML, a
través del servidor.

<?php
$destinatario = "correo_destino@example.com";
$asunto = "Correo de prueba";
$mensaje = "<h1>Hola,</h1><p>Este es un correo de prueba enviado desde PHP.</p>";
mail($destinatario, $asunto, $mensaje)
?>