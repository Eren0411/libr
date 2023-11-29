<?php
include('conexion.php');
?>

<html>
    <head>
        <title>ADMINISTRADOR</title>
        <link rel="shortcut icon" href="imagenes\libro.png">
        <title>LIBRERIA IEU</title>
        <link rel="stylesheet" href="css.css" title="Color">
    </head>
    <body background="imagenes\1722.jpg">
        <div class="contenedor">
            <form action="" class="form" method="post" target="">
            <img class="logo" src="imagenes\ieulogo.png">
                    <img class="rino" src="imagenes\0.gif">
                <div class="contenedor-titulo">
                    <h1 class="form-titulo">INGRESE SUS CREDENCIALES DE ADMINISTRADOR</span></h1>
                </div>
                
                <label for="Nombre" class="form-label">USUARIO</label>
                <input type="text" class="form-input" name="usuario" placeholder="INGRESE SU USARIO" required="required">
                <label for="Apellidos" class="form-label">CONTRASEÑA</label>
                <input type="text" class="form-input" name="password" placeholder="INGRESE SU CONTRASEÑA" required="required">
                <input class="btn-submit" type="submit" value="ENTRAR" name="login">
                <input class="btn-borrar" type="reset" value="BORRAR">
            </form>
        </div>
    <body>
    <?php
    
        // Obtengo los datos cargados en el formulario de login.

    
        // Crear conexión con la base de datos.
        
    
        error_reporting(E_ERROR);
        $login=$_POST['login'];
        if ($login==TRUE){
            $usuario=$_POST['usuario'];
            $clave=$_POST['password'];
            $sql = $mysqli->query("SELECT * FROM usuarios where usuario='$usuario' and clave='$clave'");
            if ($datos=$sql->fetch_object()){
                header("location:botones.php");
            }
        }
    ?>
