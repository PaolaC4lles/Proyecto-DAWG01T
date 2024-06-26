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
        <td>Un café con leche desnatada. 60 gramos de pan integral con aguacate y tomate.</td>
        <td> Un vaso de leche con cereales sin azúcar añadido.</td>
        <td>Un vaso de leche con copos de avena.</td>
        <td>Un café con leche desnatada. 60 gramos de pan integral con aguacate y tomate.</td>
        <td>Un vaso de leche con cereales sin azúcar añadido.</td>
        <td>Un vaso de leche con copos de avena.</td>
        <td>Un vaso de leche con cereales sin azúcar añadido.</td>
    </tr>
   </table>
   <div class="comidasA">
    <img class="imDes" src="IMG/almuerzo.png" alt="Imagen desayuno">
    <p class="com">Almuerzo</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>Brócoli al vapor. Salmón al horno con patata y cebolla. Dos rodajas de piña.</td>
        <td>Ensalada con lechuga, pimiento, cebolla, pepino, zanahoria y lentejas. Un yogur.</td>
        <td>Acelgas con patata. Lenguado a la plancha con champiñones salteados.</td>
        <td>Ensalada verde. Macarrones con tomate triturado, cebolla y carne magra picada. Un yogur. Una naranja.</td>
        <td>Judías verdes con patata. Pechuga de pollo a la plancha especiada con cúrcuma. Una pera.</td>
        <td>Ensalada de tomate y cebolla. Sepia estofada con patata y verduras. Un yogur.</td>
        <td>Espinacas con garbanzos y un huevo duro. Una ensalada. Un yogur con fresas.</td>
    </tr>
   </table>
   <div class="comidasR">
    <img class="imDes" src="IMG/refrigerio.png" alt="Imagen desayuno">
    <p class="com">Refrigerio</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>Media manzana o pera con 12 almendras</td>
        <td>Media taza (120 mililitros, ml) de bayas con 6 onzas (oz), o 170 grams (g), de yogur natural o queso cottage bajo en calorías</td>
        <td>Una banana pequeña con 1 cucharada (15 ml) de mantequilla de maní o almendra sin sal</td>
        <td>Un cuarto de taza (62 ml) con frutos secos surtidos (trail mix) y nueces (sin azúcar o sal agregados)</td>
        <td>Una taza (240 ml) de sopa de tomate con cinco galletas integrales</td>
        <td>Un huevo duro y 12 almendras</td>
        <td>Un batido de frutas con 1 taza (240 ml) de leche sin grasa, media banana pequeña y media taza (120 g) de bayas</td>
    </tr>
   </table>
   <div class="comidasC">
    <img class="imDes" src="IMG/cena.png" alt="Imagen desayuno">
    <p class="com">Cena</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>Ensalada de tomate y espinacas. Tortilla francesa con pan. Un yogur.</td>
        <td>Puré de calabacín y cebolla. Merluza al horno con boniato. Dos rodajas de sandía.</td>
        <td>Sopa con fideos. Tortilla de alcachofas. Un yogur.</td>
        <td>Ensalada de tomate, cebolla, maíz, queso fresco 0 % y garbanzos. Un yogur.</td>
        <td>Puré de calabacín y cebolla. Rape guisado con caldo de pescado y cuscús. Fresas.</td>
        <td>Judías verdes con zanahoria al vapor. Revuelto de huevo con espárragos. Pan integral. Dos rodajas de piña.</td>
        <td>Ensalada verde. Pechuga de pollo a la plancha con pimienta, tomate triturado y arroz integral. Un yogur.</td>
    </tr>
   </table>
   <div class="tabla-celular">
    <div class="fila">
        <div class="columna">
            <div class="contenido">Un café con leche desnatada. 60 gramos de pan integral con aguacate y tomate.</div>
            <div class="contenido">Brócoli al vapor. Salmón al horno con patata y cebolla. Dos rodajas de piña.</div>
            <div class="contenido">Media manzana o pera con 12 almendras</div>
            <div class="contenido">Ensalada de tomate y espinacas. Tortilla francesa con pan. Un yogur.</div>
        </div>
        <div class="columna">
            <div class="contenido">Un vaso de leche con cereales sin azúcar añadido.</div>
            <div class="contenido">Ensalada con lechuga, pimiento, cebolla, pepino, zanahoria y lentejas. Un yogur.</div>
            <div class="contenido">Media taza (120 mililitros, ml) de bayas con 6 onzas (oz), o 170 grams (g), de yogur natural o queso cottage bajo en calorías</div>
            <div class="contenido">Puré de calabacín y cebolla. Merluza al horno con boniato. Dos rodajas de sandía.</div>
        </div>
        <div class="columna">
            <div class="contenido">Un café con leche desnatada. 60 gramos de pan integral con aguacate y tomate.</div>
            <div class="contenido">Brócoli al vapor. Salmón al horno con patata y cebolla. Dos rodajas de piña.</div>
            <div class="contenido">Media manzana o pera con 12 almendras</div>
            <div class="contenido">Ensalada de tomate y espinacas. Tortilla francesa con pan. Un yogur.</div>
        </div>
        <div class="columna">
            <div class="contenido">Un vaso de leche con cereales sin azúcar añadido.</div>
            <div class="contenido">Ensalada con lechuga, pimiento, cebolla, pepino, zanahoria y lentejas. Un yogur.</div>
            <div class="contenido">Media taza (120 mililitros, ml) de bayas con 6 onzas (oz), o 170 grams (g), de yogur natural o queso cottage bajo en calorías</div>
            <div class="contenido">Puré de calabacín y cebolla. Merluza al horno con boniato. Dos rodajas de sandía.</div>
        </div>
    </div>
    <div class="fila">
        <div class="columna">
            <div class="contenido">Un café con leche desnatada. 60 gramos de pan integral con aguacate y tomate.</div>
            <div class="contenido">Brócoli al vapor. Salmón al horno con patata y cebolla. Dos rodajas de piña.</div>
            <div class="contenido">Media manzana o pera con 12 almendras</div>
            <div class="contenido">Ensalada de tomate y espinacas. Tortilla francesa con pan. Un yogur.</div>
        </div>
        <div class="columna">
            <div class="contenido">Un vaso de leche con cereales sin azúcar añadido.</div>
            <div class="contenido">Ensalada con lechuga, pimiento, cebolla, pepino, zanahoria y lentejas. Un yogur.</div>
            <div class="contenido">Media taza (120 mililitros, ml) de bayas con 6 onzas (oz), o 170 grams (g), de yogur natural o queso cottage bajo en calorías</div>
            <div class="contenido">Puré de calabacín y cebolla. Merluza al horno con boniato. Dos rodajas de sandía.</div>
        </div>
        <div class="columna">
            <div class="contenido">Un café con leche desnatada. 60 gramos de pan integral con aguacate y tomate.</div>
            <div class="contenido">Brócoli al vapor. Salmón al horno con patata y cebolla. Dos rodajas de piña.</div>
            <div class="contenido">Media manzana o pera con 12 almendras</div>
            <div class="contenido">Ensalada de tomate y espinacas. Tortilla francesa con pan. Un yogur.</div>
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