<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrices 2 (Resultado)</title>

</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['accion']) && $_GET['accion'] === 'mostrar') {
        
        $nummin = isset($_GET['nummin']) ? (float)$_GET['nummin'] : 1;
        $nummax = isset($_GET['nummax']) ? (float)$_GET['nummax'] : 1;
        $valmin = isset($_GET['valmin']) ? (float)$_GET['valmin'] : 1;
        $valmax = isset($_GET['valmax']) ? (float)$_GET['valmax'] : 1;

        
        if ($nummin > $nummax) {
            echo "El número mínimo de valores no puede ser mayor que el número máximo.";
            exit;
        }

        if ($valmin > $valmax) {
            echo "El valor mínimo no puede ser mayor que el valor máximo.";
            exit;
        }

        
        $numValores = rand($nummin, $nummax);

        
        $matriz = [];
        for ($i = 0; $i < $numValores; $i++) {

            $randomDecimal = mt_rand($valmin * 100, $valmax * 100) / 100; 
         
            $decimales = rand(1, 2); 

            
            $matriz[] = number_format($randomDecimal, $decimales); 
        }

        
        echo "<h1>Matrices 2 (Resultado)</h1>";
        echo "<h2>Datos iniciales</h2>";
        print "<p>Número de valores en la matriz: $numValores</p>\n";
        print "<p>Valores elegidos al azar entre $valmin y $valmax</p>\n";
        echo "<h2>Matriz de valores</h2>";

        
        echo "<pre>";
        echo "Array \n";
        echo "( \n";
        foreach ($matriz as $key => $value) {
            echo "    [$key] => $value\n";
        }
        echo ")\n";
        echo "</pre>";
    }
    ?>

    <form action="" method="POST">

        <a href="teman_t04-ej06-form.html">Volver al formulario.</a>
    </form>
</body>

</html>
