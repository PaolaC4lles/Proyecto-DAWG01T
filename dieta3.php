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
    <title>Dieta</title>
    <link rel="stylesheet" href="CSS/estilosDieta.css">
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
    <div class="planDieta">Plan dieta:</div>
    <div class="desplegable">
    <button class="boton">ESCOGE TU DIETA</button>
    <div class="dietas">
        <a href="dieta.php">Delgadez muy severa</a>
        <a href="dieta2.php">Delgadez severa</a>
        <a href="dieta3.php">Delgadez</a>
        <a href="dieta4.php">Peso saludable</a>
        <a href="dieta5.php">Sobrepeso</a>
        <a href="dieta6.php">Obesidad severa</a>
        <a href="dieta7.php">Obesidad morbida</a>
</div>
</div>
   </div>
   <div class="barraDias">
    <p class="lu">Lunes</p><p class="lu">Martes</p><p class="lu">Miercoles</p><p class="lu">Jueves</p><p class="lu">Viernes</p><p class="lu">Sabado</p><p class="lu">Domingo</p>
   </div>
   <div class="comidas">
    <img class="imDes" src="IMG/cafe.png" alt="Imagen desayuno">
    <img class="imAl" src="IMG/almuerzo.png" alt="Imagen almuerzo">
    <img class="imRe" src="IMG/refrigerio.png" alt="Imagen refrigerio">
    <img class="imCe" src="IMG/cena.png" alt="Imagen cena">
    <p class="com">Desayuno</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>Cremas o purés de verduras enriquecidos (queso, aceite de Oliva Virgen Extra, frutos secos, aguacate, patata, legumbre…).</td>
        <td>Preparaciones dulces como tortitas, bizcochos, postres fríos, tartas… Por supuesto, deben estar elaborados con ingredientes de calidad.</td>
        <td>Platos enriquecidos como canelones, lasañas, platos de pasta… </td>
        <td>Preparaciones con salsas. Por ejemplo salsas con frutos secos (cacahuetes o anacardos), quesos, pesto…</td>
        <td>Batidos dulces con fruta, frutos secos, cereales, fruta deshidratada…</td>
        <td>Batido de plátano, leche entera y canela + tostadas con aguacate, queso fresco y nueces.</td>
        <td>Bol de yogur griego natural con copos de avena, uvas pasas, semillas de chía y mandarina.</td>
    </tr>
   </table>
   <div class="comidasA">
    <img class="imDes" src="IMG/almuerzo.png" alt="Imagen desayuno">
    <p class="com">Almuerzo</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>Merluza al horno con champiñones y patata</td>
        <td>Puré de calabaza con patata</td>
        <td>Salmón al horno o a la plancha</td>
        <td>Muslo de pollo y boniato al horno con  especias    Pan integral</td>
        <td>Solomillo o hamburguesa magra de ternera con acompañamiento de alubias blancas salteadas con cebolla</td>
        <td>Guiso de garbanzos con verduras y pan integral</td>
        <td>Arroz con pisto de verduras en salsa de tomate al natural con atún   y pipas de calabaza</td>
    </tr>
   </table>
   <div class="comidasR">
    <img class="imDes" src="IMG/refrigerio.png" alt="Imagen desayuno">
    <p class="com">Refrigerio</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>Fruta con frutos secos o crema de frutos secos (por ejemplo de cacahuete)</td>
        <td>Yogur natural o vegetal enriquecido en calcio con frutos secos.</td>
        <td>Yogur natural o vegetal enriquecido en calcio con fruta fresca / compota / fruta deshidratada (tipo pasas, dátiles…)</td>
        <td>Fruta + yogur + frutos secos</td>
        <td>Bocadillo de queso, pavo, atún con aceite  o aguacate o huevo/tortilla, etc.</td>
        <td>Bocadillo o tostada de pan integral con jamón dulce o pavo, queso fresco, aguacate o aceite de oliva con tomate.</td>
        <td>1 fruta entera con 1 puñado de frutos secos.</td>
    </tr>
   </table>
   <div class="comidasC">
    <img class="imDes" src="IMG/cena.png" alt="Imagen desayuno">
    <p class="com">Cena</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>Gambas salteadas con ajo y perejil </td>
        <td>Puré de calabaza con patata</td>
        <td>Tortilla con queso  Pan integral</td>
        <td>Rape al horno con salsa de tomate, con ajo y perejil</td>
        <td>Revuelto de huevos con espárragos trigueros Pan integral</td>
        <td>Lubina a la plancha con ajo y perejil acompañado de arroz integral al curry</td>
        <td>Menestra de verduras (alcachofas brócoli, zanahoria, cebolla y guisantes) con patata en dados hervida.</td>
    </tr>
   </table>
   <div class="tabla-celular">
    <div class="fila">
        <div class="columna">
            <div class="contenido">Cremas o purés de verduras enriquecidos (queso, aceite de Oliva Virgen Extra, frutos secos, aguacate, patata, legumbre…).</div>
            <div class="contenido">Merluza al horno con champiñones y patata</div>
            <div class="contenido">Fruta con frutos secos o crema de frutos secos (por ejemplo de cacahuete)</div>
            <div class="contenido">Gambas salteadas con ajo y perejil/div>
        </div>
        <div class="columna">
            <div class="contenido">Preparaciones dulces como tortitas, bizcochos, postres fríos, tartas… Por supuesto, deben estar elaborados con ingredientes de calidad.</div>
            <div class="contenido">Puré de calabaza con patata</div>
            <div class="contenido">Yogur natural o vegetal enriquecido en calcio con frutos secos.</div>
            <div class="contenido">Puré de calabaza con patata</div>
        </div>
        <div class="columna">
            <div class="contenido">Platos enriquecidos como canelones, lasañas, platos de pasta…</div>
            <div class="contenido">Salmón al horno o a la plancha</div>
            <div class="contenido">Yogur natural o vegetal enriquecido en calcio con fruta fresca / compota / fruta deshidratada (tipo pasas, dátiles…)</div>
            <div class="contenido">Tortilla con queso  Pan integral</div>
        </div>
        <div class="columna">
            <div class="contenido">Cremas o purés de verduras enriquecidos (queso, aceite de Oliva Virgen Extra, frutos secos, aguacate, patata, legumbre…).</div>
            <div class="contenido">Merluza al horno con champiñones y patata</div>
            <div class="contenido">Fruta con frutos secos o crema de frutos secos (por ejemplo de cacahuete)</div>
            <div class="contenido">Gambas salteadas con ajo y perejil/div>
        </div>
    </div>
    <div class="fila">
        <div class="columna">
            <div class="contenido">Platos enriquecidos como canelones, lasañas, platos de pasta…</div>
            <div class="contenido">Salmón al horno o a la plancha</div>
            <div class="contenido">Yogur natural o vegetal enriquecido en calcio con fruta fresca / compota / fruta deshidratada (tipo pasas, dátiles…)</div>
            <div class="contenido">Tortilla con queso  Pan integral</div>
        </div>
        <div class="columna">
            <div class="contenido">Cremas o purés de verduras enriquecidos (queso, aceite de Oliva Virgen Extra, frutos secos, aguacate, patata, legumbre…).</div>
            <div class="contenido">Merluza al horno con champiñones y patata</div>
            <div class="contenido">Fruta con frutos secos o crema de frutos secos (por ejemplo de cacahuete)</div>
            <div class="contenido">Gambas salteadas con ajo y perejil/div>
        </div>
        <div class="columna">
            <div class="contenido">Cremas o purés de verduras enriquecidos (queso, aceite de Oliva Virgen Extra, frutos secos, aguacate, patata, legumbre…).</div>
            <div class="contenido">Merluza al horno con champiñones y patata</div>
            <div class="contenido">Fruta con frutos secos o crema de frutos secos (por ejemplo de cacahuete)</div>
            <div class="contenido">Gambas salteadas con ajo y perejil/div>
        </div>
    </div>
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