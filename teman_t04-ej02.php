<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

</head>

<body>
    <h1>Datos personales 4 (Resultado)</h1>

    <?php

    $correoBueno1 = $_REQUEST["correo"];
    $correoBueno2 = $_REQUEST["correo2"];

    if ($correoBueno1 == $correoBueno2) {

        print "<p>Su dirección de correo es <span class='recibir'> $correoBueno2 </span></p>\n";
    } else {
        print "<p><span class='fallo'> Introduce un correo valido</span> </p>\n";
    }

    $opcion = $_REQUEST["opcion"];

    if ($opcion == "si") {

        print "<p><span class='recibir'>Sí</span>, recibirá correos nuestros.</p>\n";
    } else {

        print "<p><span class='recibir'>NO</span> recibirá correos nuestros.</p>\n";
    }

    ?>
     <form action="" method="POST">

    <a href="teman_t04-ej02-form.html">Volver al formulario.</a>
    </form>


</body>

</html>