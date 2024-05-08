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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutina</title>
    <link rel="stylesheet" href="CSS/estilosRutina.css">
    <link rel="stylesheet" href="CSS/responsive_nvar.css">
    <script src="js/dieta.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="IMG/icon.png" type="image/x-icon">
</head>

<header>
    <img class="logo" src="img/icon.png" alt="¡Cuida tu salud!">

    <ul class="navbar">
    <li><a href="Inicio.php">Inicio</a></li>
    </ul>
    <ul class="navbar">
        <li><a href="calculadora.php">Regresar</a></li>
    </ul>

    <div class="main">
        <div class="bx bx-menu" id="menu-icon"></div><br>
    </div>
</header>
<div class="headerAbajo"></div>
<br>

<!--js link--->
<script type="text/javascript" src="js/responsive_nvar.js"></script>  


<body>
    <br>
    <br>
   <div class="contenedor1">
    <img class="imagenDieta" src="IMG/dieta.png" alt="">
    <div class="planDieta">Plan rutina:</div>
    <div class="desplegable">
    <button class="boton">ESCOGE TU RUTINA</button>
    <div class="dietas">
    <a href="rutina.php">Delgadez muy severa</a>
    <a href="rutina.php">Delgadez severa</a>
    <a href="rutina.php">Delgadez</a>
    <a href="rutina2.php">Peso saludable</a>
    <a href="rutina3.php">Sobrepeso</a>
    <a href="rutina3.php">Obesidad severa</a>
    <a href="rutina3.php">Obesidad morbida</a>
</div>
</div>
   </div>
   <div class="barraDias">
    <h1 class="Rutinas">Rutina 1</h1>
   </div>
   <div class="comidas">
    <p class="com">Día 1</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td><h3>Pecho:</h3>Fly plano con mancuernas <br> (3x12)</td>
        <td><h3>Pecho:</h3>Press inclinado con mancuernas <br> (3x12)</td>
        <td><h3>Pecho:</h3>Press inclinado con barra <br> (3x12)</td>
        <td><h3>Espalda:</h3>Jalones al frente abierto <br> (4x15, 12, 10, 8)</td>
        <td><h3>Espalda:</h3>Jalones al frente cerrado invertido <br> (3x15, 12, 10)</td>
        <td><h3>Espalda:</h3>Serrucho con polea <br> (3x15, 12, 10)</td>
        <td><h3>Espalda:</h3>Buenos días con barra <br> (3x20, 18, 15)</td>
    </tr>
    <tr>
        <td><h3>Hombros:</h3>Remo parado con barra <br> (3x15, 12, 10)</td>
        <td><h3>Hombros:</h3>Laterales con polea <br> (4x15, 12, 10, 8)</td>
        <td><h3>Hombros:</h3>Arnold press <br> (4x15, 12, 10, 8)</td>
        <td><h3>Cintura:</h3>Giro con barra <br> (1x200)</td>
        <td><h3>Cintura:</h3>Doblada con mancuernas <br> (1x200)</td>
        <td><h3>Cintura:</h3>Doblada con barra <br> (1x200)</td>
        <td><h3>Cintura:</h3>Elevación de piernas <br> (2x50)</td>
    </tr>
   </table><br><br>
   <div class="comidas">
    <p class="com">Día 2</p>
   </div>
   <table style="width: 100%;">
   <tr>
        <td><h3>Brazos:</h3>Curl con barra <br> (4x12, 10, 8, 6)</td>
        <td><h3>Brazos:</h3>Curl con mancuerna inclinada <br> (3x12, 10, 8)</td>
        <td><h3>Brazos:</h3>Curl con polea <br> (3x12, 10, 8)</td>
        <td><h3>Brazos:</h3>Triceps con polea triangular <br> (4x12, 10, 8, 6)</td>
        <td><h3>Brazos:</h3>Copa a dos manos <br> (4x12, 10, 8, 8)</td>
        <td><h3>Brazos:</h3>Kick back con mancuernas <br> (3x12, 10, 8)</td>
        <td><h3>Brazos:</h3>Curl de muñeca con barra <br> (3x15)</td>
    </tr>
    <tr>
        <td><h3>Caderas:</h3>Abducciones con peso <br> (3x20)</td>
        <td><h3>Abdomen:</h3>Jackknife <br> (3x50)</td>
        <td><h3>Abdomen:</h3>Encogimientos en polea <br> (3x50)</td>
        <td><h3>Abdomen:</h3>Levantamiento de piernas en aparato <br> (3x20)</td>
        <td><h3>Abdomen:</h3>Burpee <br> (3x20)</td>
        <td><h3>Abdomen:</h3>Tijeras <br> (3x20)</td>
        <td><h3>Abdomen:</h3>Sit-up <br> (3x15)</td>
    </tr>
   </table><br><br>
   <div class="comidas">
    <p class="com">Día 3</p>
   </div>
   <table style="width: 100%;">
   <tr>
        <td><h3>Piernas:</h3>Extensiones <br> (4x15)</td>
        <td><h3>Piernas:</h3>Leg curl <br> (4x15)</td>
        <td><h3>Piernas:</h3>Press <br> (6x12, 12, 10, 10, 8, 8)</td>
        <td><h3>Piernas:</h3>Hack squat <br> (4x15, 12, 10, 8)</td>
        <td><h3>Piernas:</h3>Hiptrust<br> (3x18)</td>
        <td><h3>Piernas:</h3>Desplantes con barra <br> (4x15, 12, 10, 8)</td>
        <td><h3>Pantorrillas:</h3>Sentado <br> (1x100)</td>
    </tr>
    <tr>
        <td><h3>Pantorrillas:</h3>Parado <br> (5x20)</td>
        <td><h3>Pantorrillas:</h3>Levantamiento de talón en máquina hack <br> (4x20)</td>
        <td><h3>Abdomen:</h3>Crunches con peso <br> (3x20)</td>
        <td><h3>Abdomen:</h3>Levantamiento de piernas con peso <br> (3x20)</td>
        <td><h3>Abdomen:</h3>Encogimiento de rodilla con peso <br> (3x20)</td>
        <td><h3>Abdomen:</h3>Tijeras <br> (3x20)</td>
        <td><h3>Cardio 20 minutos al final de los entrenos</h3></td>
    </tr>
   </table>
    </div>
</body>
<br><br><br>
<footer>
    <div class="F-texto"><p>Copyright© 2024</p></div>
    <div class="Redes">
      <a href=""><img src="IMG/facebook.png" alt="Facebook"></a>
      <a href=""><img src="IMG/twitter.png" alt="Twitter"></a>
    <a href=""><img src="IMG/instagram.png" alt="Instagram"></a>
    </div>
   </footer>
</html>