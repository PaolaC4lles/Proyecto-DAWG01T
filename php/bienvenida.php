<?php
            session_start();

        if(!isset($_SESSION['usuario'])){
            echo'
            
            <script>
            alert("Por favor debes iniciar sesión");
            window.location ="../index.php"
            </script> 
            ';
            session_destroy();
            die();
        
        };

     //   session_destroy();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso despues del login</title>
</head>
<body>
    <H1>Felicidades estas agregado en nuestra base de datos</H1>
    <a href="cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>
<script></script>