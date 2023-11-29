<?php
    if (!empty($_POST['login'])){
        $usuario=$_POST['usuario'];
        $clave=$_POST['password'];
        $sql = $mysqli->query("SELECT FROM usuarios where usuario='$usuario' and clave='$clave'");
        if ($datos=$mysqli->fetch_object()){
            header("location:index.php");
        }else{
            echo '<div>LAS CREDENCIALES NO COINCIDEN</div>';
        }
    }
?>

<?php
session_start();

    // Obtengo los datos cargados en el formulario de login.
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];


     

    // Crear conexión con la base de datos.
    $mysqli = new mysqli('localhost', 'root', '', 'libreriaieu');

    // Validar la conexión de base de datos.
    if ($mysqli ->connect_error) {
        die("Connection failed: " . $mysqli ->connect_error);
    }

    // Consulta segura para evitar inyecciones SQL.
    $sql = sprintf("SELECT * FROM usuarios WHERE usuario='$usuario' AND clave = '$password'");
    $resultado = $mysqli->query($sql);

     // Verificando si el usuario existe en la base de datos.
    if($resultado){
    // Guardo en la sesión el usuario del usuario.
    $_SESSION['usuario'] = $usuario;

     // Redirecciono al usuario a la página principal del sitio.
     header("HTTP/1.1 302 Moved Temporarily"); 
     header("Location: index.php"); 
    }else{
     echo 'El usuario o contraseña es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
    }