<?php
            session_start();

        if(!isset($_SESSION['usuario'])){
            echo'
            
            <script>
            alert("Por favor debes iniciar sesión");
            window.location ="Index.php"
            </script> 
            ';
            session_destroy();
            die();
        
        };

      // session_destroy();

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="CSS/Style.css">
  <link rel="stylesheet" href="CSS/responsive_nvar.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500;600&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="IMG/icon.png" type="image/x-icon">
</head>
<body>

  <header>
    <img class="logo" src="img/icon.png" alt="¡Cuida tu salud!">

    <ul class="navbar">
      <li><a href="calculadora.php">Calculadora IMC</a></li>
  </ul>
  <ul class="navbar">
     <li><a href="php/cerrar_sesion.php">Cerrar Sesión</a></li>
     </ul>
    <div class="main">
        <div class="bx bx-menu" id="menu-icon"></div><br>
    </div>
</header>
<div class="headerAbajo"></div>
<br>

<!--js link--->
<script type="text/javascript" src="js/responsive_nvar.js"></script>  

    <div class="Contenedor">
        <img src="IMG/img-1.jpeg" class="img">
        <div class="Texto">
            <p>Conoce los alimento que te ayudaran a mantener tu salud.</p>
            <a href="Alimentos.php">Entra y mira un par de opciones de como combinarlos</a>
        </div>
      </div>

      <br>
      <br>
      <br>

      <div class="Contenedor">
        <img src="IMG/img-2.jpg" alt="Imagen 1" class="img">
        <div class="Texto">
            <p>Aprende a ejercitarte con estas rutinas
                ¡Porque verse bien nunca pasa de moda!.</p>
                <a href="Ejercicio.php">¿Por que es importante el ejercicio? Entra aqui</a>
        </div>
      </div>
      <footer>
        
        <div class="F-texto"><p>Copyright© 2024</p></div>
    
        <div class="Redes">
          <a href=""><img src="IMG/facebook.png" alt="Facebook"></a>
          <a href=""><img src="IMG/twitter.png" alt="Twitter"></a>
        <a href=""><img src="IMG/instagram.png" alt="Instagram"></a>
        </div>
      </footer>
</body>
</html>
