<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>

</head>

<body>
    <h1>Tabla de una fila (Resultado)</h1>

    <?php
    if (isset($_GET['accion']) && $_GET['accion'] == 'enviar' && isset($_GET['columnas'])) {
        $columnas = (int)$_GET['columnas'];

        if ($columnas > 0 && $columnas <= 200) {
            echo "<table><tr>";
            for ($i = 1; $i <= $columnas; $i++) {
                echo "<td>$i</td>";
            }
            echo "</tr></table>";
        } else {
            echo "<p style='color:red;'>El número de columnas debe estar entre 1 y 200.</p>";
        }
    }
    ?>

    <form action="" method="POST">

    <a href="teman_t04-ej03-form.html">Volver al formulario.</a>
    </form>


</body>

</html>