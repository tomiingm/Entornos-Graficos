<!DOCTYPE html>
<html>

<head>
    <title>Contacto</title>
</head>

<body>
    <h1>Contacto</h1>
    <?php
    if (isset($_POST['enviar'])) {
        // Procesar el formulario aquí
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
        echo "<p>¡Gracias por tu consulta, $nombre!</p>";
        echo "<p>Nos pondremos en contacto contigo a la brevedad.</p>";
    } else {
        // Mostrar el formulario
        ?>
    <form method="POST" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="5" required></textarea><br>

        <input type="submit" name="enviar" value="Enviar consulta">
    </form>
    <?php
    }
    ?>
</body>

</html>