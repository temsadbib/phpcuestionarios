<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>

</head>

<body>
    <h1>Tabla de Multiplicar sin cabezera (Resultado)</h1>
    <?php
    if (isset($_GET['accion']) && $_GET['accion'] == 'mostrar' && isset($_GET['numero'])) {
        $numero = (int)$_GET['numero'];

        if ($numero > 0) {
            echo "<table>";
            for ($i = 1; $i <= $numero; $i++) {
   
                
                $par = ($i % 2 == 0) ? 'class="fila-par"' : '';
                echo "<tr $par>";
                for ($j = 1; $j <= $numero; $j++) {
                    if ($i == 1) {
                        echo "<td>$j</td>"; 
                    } else {
                        echo "<td>" . ($i * $j) . "</td>"; 
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p style='color:red;'>Por favor, ingrese un número mayor que 0.</p>";
        }
    }
    ?>
    <form action="" method="POST">

        <a href="./ej04-form.html">Volver al formulario.</a>
    </form>
</body>

</html>