<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['accion'] == 'enviar') {
        // Guardar colores en la sesión
        $_SESSION['colorTexto'] = $_POST['colorTexto'];
        $_SESSION['colorFondo'] = $_POST['colorFondo'];
    } elseif ($_POST['accion'] == 'eliminar') {
        // Restaurar colores predeterminados
        session_unset();
        session_destroy();
    }
}

// Colores actuales
$colorTexto = isset($_SESSION['colorTexto']) ? $_SESSION['colorTexto'] : '#000000';
$colorFondo = isset($_SESSION['colorFondo']) ? $_SESSION['colorFondo'] : '#ffffff';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Colores</title>
    <style>
        body {
            background-color: <?php echo $colorFondo; ?>;
            color: <?php echo $colorTexto; ?>;
            transition: background-color 0.3s, color 0.3s;
        }
    </style>
</head>
<body>
    <h1>Colores 2 (Resultado)</h1>
    <p>Se han cambiado los colores elegidos.</p>
    <form action="" method="POST">

        <a href="teman_t04-ej01-form.html">Volver al formulario.</a>
    </form>
</body>
</html>

