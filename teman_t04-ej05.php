<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla numerada</title>

</head>

<body>
    <h1>Tabla numerada (Resultado)</h1>

    <?php
    if (isset($_GET['accion']) && $_GET['accion'] == 'mostrar' && isset($_GET['numero']) && isset($_GET['numero2'])) {
        $numero = (int)$_GET['numero'];     
        $numero2 = (int)$_GET['numero2'];   

        if ($numero > 0 && $numero2 > 0) {
            
            $filas = ceil($numero2 / $numero);  

            
            echo "<table>";

            
            $celda = 1;  
            for ($i = 1; $i <= $filas; $i++) {
                echo "<tr>";  
                for ($j = 1; $j <= $numero; $j++) {
                    if ($celda <= $numero2) {
                        echo "<td>$celda</td>"; 
                        $celda++;  
                    } else {
                        echo "<td></td>"; 
                    }
                }
                echo "</tr>";  
            }

            echo "</table>";
        } else {
            echo "<p>Los valores de columnas y celdas deben ser mayores que 0.</p>";
        }
    }
    ?>

    <a href="teman_t04-ej05-form.html">Volver al formulario.</a>

</body>

</html>
