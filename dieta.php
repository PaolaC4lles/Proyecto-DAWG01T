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
        <td>Lácteo (leche entera, bebida vegetal enriquecida en calcio y Vitamina D sin azúcares añadidos, yogur, kéfir o queso batido…)</td>
        <td>cereales (copos de maíz, de quinoa, de avena, de arroz….)</td>
        <td>fruta (1 manzana o plátano, bol de fresas o arándanos, 2 kiwis, 2 cortes de piña…).</td>
        <td>Lácteo (leche entera, bebida vegetal enriquecida en calcio y Vitamina D sin azúcares añadidos, yogur, kéfir o queso batido…)</td>
        <td>Bocadillo o tostadas de pan integral con queso fresco, aguacate, huevo, jamón de pollo o pavo, atún o caballa al natural o en aceite de oliva</td>
        <td>fruta (1 manzana o plátano o naranja, bol de fresas o arándanos, 2 kiwis o mandarinas, 2 cortes de piña…).</td>
        <td>cereales (copos de maíz, de quinoa, de avena, de arroz….)</td>
    </tr>
   </table>
   <div class="comidasA">
    <img class="imDes" src="IMG/almuerzo.png" alt="Imagen desayuno">
    <p class="com">Almuerzo</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>Arroz con pisto de verduras en salsa de tomate al natural con atún   y pipas de calabaza</td>
        <td>Espirales de pasta integral con lechuga, zanahoria y calabaza hervida en dados y semillas de sésamo por encima.</td>
        <td>Puré de calabaza con patata</td>
        <td>Guiso de garbanzos con verduras y pan integral</td>
        <td>Parrillada de verduras (tomate, cebolla y pimiento rojo) y patata o boniato al horno</td>
        <td>Berenjenas rellenas de pollo con acompañamiento de patatas panaderas con orégano.</td>
        <td>Muslo de pollo y boniato al horno con  especias    Pan integral</td>
    </tr>
   </table>
   <div class="comidasR">
    <img class="imDes" src="IMG/refrigerio.png" alt="Imagen desayuno">
    <p class="com">Refrigerio</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>Yogur natural con 1 ración de fruta troceada (1 manzana o plátano o granada, bol de fresas o arándanos, 2 kiwis, 2 cortes de piña…).</td>
        <td>Yogur natural ó queso batido con cereales  sin azúcar ó 1 puñado de frutos secos.</td>
        <td>Polenta o tapioca con canela, vainilla o cacao puro</td>
        <td>1 fruta entera con 1 puñado de frutos secos.</td>
        <td>Bocadillo o tostada de pan integral con crema de frutos secos y fruta troceada (plátano o manzana, por ejemplo).</td>
        <td>Bocadillo o tostada de pan integral con jamón dulce o pavo, queso fresco, aguacate o aceite de oliva con tomate.</td>
        <td>Yogur natural con 1 ración de fruta troceada (1 manzana o plátano o granada, bol de fresas o arándanos, 2 kiwis, 2 cortes de piña…).</td>
    </tr>
   </table>
   <div class="comidasC">
    <img class="imDes" src="IMG/cena.png" alt="Imagen desayuno">
    <p class="com">Cena</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>Ensalada de patata hervida, tomate, pepino, huevo duro y queso fresco aliñada con albahaca fresca y frutos secos</td>
        <td>Wok (salteado) de verduras al curry con tiras de pollo y cuscús hervido  </td>
        <td>Berenjena y calabacín asado con pimentón dulce</td>
        <td>Ensalada variada (arroz integral, nueces,  tomate, lechuga, rábanos y brócoli hervido)</td>
        <td>Puré de zanahoria</td>
        <td>Puré de calabaza con patata</td>
        <td>Menestra de verduras (alcachofas brócoli, zanahoria, cebolla y guisantes) con patata en dados hervida.</td>
    </tr>
   </table>
   <div class="tabla-celular">
    <div class="fila">
        <div class="columna">
            <div class="contenido">Lácteo (leche entera, bebida vegetal enriquecida en calcio y Vitamina D sin azúcares añadidos, yogur, kéfir o queso batido…)</div>
            <div class="contenido">Arroz con pisto de verduras en salsa de tomate al natural con atún   y pipas de calabaza</div>
            <div class="contenido">Yogur natural con 1 ración de fruta troceada (1 manzana o plátano o granada, bol de fresas o arándanos, 2 kiwis, 2 cortes de piña…).</div>
            <div class="contenido">Ensalada de patata hervida, tomate, pepino, huevo duro y queso fresco aliñada con albahaca fresca y frutos secos</div>
        </div>
        <div class="columna">
            <div class="contenido">cereales (copos de maíz, de quinoa, de avena, de arroz….)</div>
            <div class="contenido">Espirales de pasta integral con lechuga, zanahoria y calabaza hervida en dados y semillas de sésamo por encima.</div>
            <div class="contenido">Yogur natural ó queso batido con cereales  sin azúcar ó 1 puñado de frutos secos.</div>
            <div class="contenido">Wok (salteado) de verduras al curry con tiras de pollo y cuscús hervido</div>
        </div>
        <div class="columna">
            <div class="contenido">fruta (1 manzana o plátano, bol de fresas o arándanos, 2 kiwis, 2 cortes de piña…).</div>
            <div class="contenido">Puré de calabaza con patata</div>
            <div class="contenido">Polenta o tapioca con canela, vainilla o cacao puro</div>
            <div class="contenido">Berenjena y calabacín asado con pimentón dulce</div>
        </div>
        <div class="columna">
            <div class="contenido">Lácteo (leche entera, bebida vegetal enriquecida en calcio y Vitamina D sin azúcares añadidos, yogur, kéfir o queso batido…)</div>
            <div class="contenido">Guiso de garbanzos con verduras y pan integral</div>
            <div class="contenido">1 fruta entera con 1 puñado de frutos secos.</div>
            <div class="contenido">Ensalada variada (arroz integral, nueces,  tomate, lechuga, rábanos y brócoli hervido)</div>
        </div>
    </div>
    <div class="fila">
        <div class="columna">
            <div class="contenido">Bocadillo o tostadas de pan integral con queso fresco, aguacate, huevo, jamón de pollo o pavo, atún o caballa al natural o en aceite de oliva</div>
            <div class="contenido">Parrillada de verduras (tomate, cebolla y pimiento rojo) y patata o boniato al horno</div>
            <div class="contenido">Bocadillo o tostada de pan integral con crema de frutos secos y fruta troceada (plátano o manzana, por ejemplo).</div>
            <div class="contenido">Puré de zanahoria</div>
        </div>
        <div class="columna">
            <div class="contenido">fruta (1 manzana o plátano o naranja, bol de fresas o arándanos, 2 kiwis o mandarinas, 2 cortes de piña…).</div>
            <div class="contenido">Berenjenas rellenas de pollo con acompañamiento de patatas panaderas con orégano.</div>
            <div class="contenido">Bocadillo o tostada de pan integral con jamón dulce o pavo, queso fresco, aguacate o aceite de oliva con tomate.</div>
            <div class="contenido">Puré de calabaza con patata</div>
        </div>
        <div class="columna">
            <div class="contenido">cereales (copos de maíz, de quinoa, de avena, de arroz….)</div>
            <div class="contenido">Muslo de pollo y boniato al horno con  especias Pan integral</div>
            <div class="contenido">Yogur natural con 1 ración de fruta troceada (1 manzana o plátano o granada, bol de fresas o arándanos, 2 kiwis, 2 cortes de piña…).</div>
            <div class="contenido">Menestra de verduras (alcachofas brócoli, zanahoria, cebolla y guisantes) con patata en dados hervida.</div>
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