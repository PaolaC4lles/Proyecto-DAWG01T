<?php
        session_start();

//Conexión a la base de datos mediante esto
include 'conexion_be.php';

//Guardamos los datos en variables
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    //Validacion de usuario y contraseña
        $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE
         correo ='$correo' and contrasena = '$contrasena'");

if(mysqli_num_rows($validar_login) > 0 ){
    $_SESSION['usuario'] = $correo;
    header("location: ../Inicio.php");
    exit;
}else{
    echo '
    <script>
            alert("Este usuario no existe, por favor verifique los datos introducidos");
            window.location = "../index.php";
    </script>
    ';
    exit;
}
?>