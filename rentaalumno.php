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
        <div class="contenedor">
            <form action="" class="form" method="post">
            <img class="logo" src="imagenes\ieulogo.png">
                    <img class="rino" src="imagenes\0.gif">
                <div class="contenedor-titulo">
                    <h1 class="form-titulo">RELLENE LOS SIGUIENTES DATOS</span></h1>
                </div>
                <label for="nombrelibro" class="form-label">LIBRO</label>
                <input type="text" class="form-input" name="nombrelibro" placeholder="NOMBRE DEL LIBRO" required="required">
                <label for="codigolibro" class="form-label">CÓDIGO</label>
                <input type="text" class="form-input" name="codigolibro" placeholder="CÓDIGO DEL LIBRO" required="required">
                <input class="btn-submit" type="submit" value="SOLICITAR" name="solicitar">
                <input class="btn-borrar" type="reset" value="BORRAR">
            </form>
        </div>
        <?php
        
        error_reporting(E_ERROR);
        $solicitar=$_POST['solicitar'];
        if($solicitar==TRUE){
            $nombrelibro=$_POST['nombrelibro'];
            $codigolibro=$_POST['codigolibro'];
            $res = $mysqli->query("INSERT INTO solicitudes set nombrelibro='$nombrelibro', codigolibro='$codigolibro'");
        }
        ?>


    </body>