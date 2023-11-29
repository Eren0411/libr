<?php
include('conexion.php')
?>

<html>
    <head>
        <title>FORMATO SOLICITUD</title>
        <link rel="shortcut icon" href="imagenes\libro.png">
        <title>LIBRERIA IEU</title>
        <link rel="stylesheet" href="css.css" title="Color">
    </head>
    <body background="imagenes\1722.jpg">
        <div class="contenedor1">
        <h1 class="titulo"><b>SOLICITUDES</b></h1>
        </div>
<div class="contenedor">
<?php

$registros=$mysqli->query("SELECT nombrelibro, codigolibro FROM solicitudes");
while ($reg = mysqli_fetch_array($registros)){
    echo '<link rel="stylesheet" href="css.css" title="Color">';
    echo "<div class='datos'><p class='dato'>Nombre del libro solicitado:" . $reg['nombrelibro'] . "<br>";
    echo "Código del libro solicitado:" . $reg['codigolibro'] . "<br> </div>";
    }

?>
    <div class="btn-rentar">
                <a class="btn btn-7" href="botones.php"><b>Regresar</b></a>
    </div>
</div>