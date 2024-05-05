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
        <td>1 naranja (puede ser pomelo, durazno, piña u otras frutas, menos el plátano), 2 galletas (trigo entero o con cereales), café o té sin azúcar.</td>
        <td>1 naranja (puede ser pomelo, durazno, piña u otras frutas, menos el plátano), 2 galletas (trigo entero o con cereales), café o té sin azúcar.</td>
        <td>1 naranja (puede ser pomelo, durazno, piña u otras frutas, menos el plátano), 2 galletas (trigo entero o con cereales), café o té sin azúcar.</td>
        <td>1 naranja (puede ser pomelo, durazno, piña u otras frutas, menos el plátano), 2 galletas (trigo entero o con cereales), café o té sin azúcar.</td>
        <td>1 naranja (puede ser pomelo, durazno, piña u otras frutas, menos el plátano), 2 galletas (trigo entero o con cereales), café o té sin azúcar.</td>
        <td>1 naranja (puede ser pomelo, durazno, piña u otras frutas, menos el plátano), 2 galletas (trigo entero o con cereales), café o té sin azúcar.</td>
        <td>1 naranja (puede ser pomelo, durazno, piña u otras frutas, menos el plátano), 2 galletas (trigo entero o con cereales), café o té sin azúcar.</td>
    </tr>
   </table>
   <div class="comidasA">
    <img class="imDes" src="IMG/almuerzo.png" alt="Imagen desayuno">
    <p class="com">Almuerzo</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>1 naranja, 1 huevo cocido, yogur.</td>
        <td>1 naranja, 1 huevo cocido, yogur, 2 galletas.</td>
        <td>1 naranja, 1 huevo cocido, yogur, ensalada de verduras.</td>
        <td>120 gramos de queso bajo en grasa o requesón, 1 tomate, 1 galleta.</td>
        <td>200 gramos de pescado cocinado al vapor, 1 tomate, 1 galleta.</td>
        <td>1 naranja, 1 huevo cocido, yogur.</td>
        <td>1 naranja, 1 huevo cocido, yogur, 2 galletas</td>
    </tr>
   </table>
   <div class="comidasR">
    <img class="imDes" src="IMG/refrigerio.png" alt="Imagen desayuno">
    <p class="com">Refrigerio</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>-----</td>
        <td>-----</td>
        <td>-----</td>
        <td>-----</td>
        <td>-----</td>
        <td>-----</td>
        <td>-----</td>
    </tr>
   </table>
   <div class="comidasC">
    <img class="imDes" src="IMG/cena.png" alt="Imagen desayuno">
    <p class="com">Cena</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>2 huevos cocidos, 2 tomates, 500g de ensalada de verduras (puede ser simplemente a base de pepino), 2 galletas.</td>
        <td>120 gramos de carne (preferiblemente de res), 1 tomate, 1 galleta.</td>
        <td> 120 gramos de carne, 1 naranja, 1 galleta, café o té</td>
        <td>120 gramos de carne, 2 tomates, 1 manzana, 1 galleta.</td>
        <td>500 gramos de verduras hervidas o al vapor (zanahorias, cebollas, col, papas, frijoles), 1 huevo cocido, 1 tomate.</td>
        <td>2 huevos cocidos, 2 tomates, 500g de ensalada de verduras (puede ser simplemente a base de pepino), 2 galletas.</td>
        <td>120 gramos de carne (preferiblemente de res), 1 tomate, 1 galleta.</td>
    </tr>
   </table>
   <div class="tabla-celular">
    <div class="fila">
        <div class="columna">
            <div class="contenido">1 naranja (puede ser pomelo, durazno, piña u otras frutas, menos el plátano), 2 galletas (trigo entero o con cereales), café o té sin azúcar.</div>
            <div class="contenido">1 naranja, 1 huevo cocido, yogur.</div>
            <div class="contenido">-----</div>
            <div class="contenido">2 huevos cocidos, 2 tomates, 500g de ensalada de verduras (puede ser simplemente a base de pepino), 2 galletas.</div>
        </div>
        <div class="columna">
            <div class="contenido">1 naranja (puede ser pomelo, durazno, piña u otras frutas, menos el plátano), 2 galletas (trigo entero o con cereales), café o té sin azúcar.</div>
            <div class="contenido">1 naranja, 1 huevo cocido, yogur.</div>
            <div class="contenido">-----</div>
            <div class="contenido">2 huevos cocidos, 2 tomates, 500g de ensalada de verduras (puede ser simplemente a base de pepino), 2 galletas.</div>
        </div>
        <div class="columna">
            <div class="contenido">1 naranja (puede ser pomelo, durazno, piña u otras frutas, menos el plátano), 2 galletas (trigo entero o con cereales), café o té sin azúcar.</div>
            <div class="contenido">1 naranja, 1 huevo cocido, yogur.</div>
            <div class="contenido">-----</div>
            <div class="contenido">2 huevos cocidos, 2 tomates, 500g de ensalada de verduras (puede ser simplemente a base de pepino), 2 galletas.</div>
        </div>
        <div class="columna">
            <div class="contenido">1 naranja (puede ser pomelo, durazno, piña u otras frutas, menos el plátano), 2 galletas (trigo entero o con cereales), café o té sin azúcar.</div>
            <div class="contenido">1 naranja, 1 huevo cocido, yogur.</div>
            <div class="contenido">-----</div>
            <div class="contenido">2 huevos cocidos, 2 tomates, 500g de ensalada de verduras (puede ser simplemente a base de pepino), 2 galletas.</div>
        </div>
    </div>
    <div class="fila">
        <div class="columna">
            <div class="contenido">1 naranja (puede ser pomelo, durazno, piña u otras frutas, menos el plátano), 2 galletas (trigo entero o con cereales), café o té sin azúcar.</div>
            <div class="contenido">1 naranja, 1 huevo cocido, yogur.</div>
            <div class="contenido">-----</div>
            <div class="contenido">2 huevos cocidos, 2 tomates, 500g de ensalada de verduras (puede ser simplemente a base de pepino), 2 galletas.</div>
        </div>
        <div class="columna">
            <div class="contenido">1 naranja (puede ser pomelo, durazno, piña u otras frutas, menos el plátano), 2 galletas (trigo entero o con cereales), café o té sin azúcar.</div>
            <div class="contenido">1 naranja, 1 huevo cocido, yogur.</div>
            <div class="contenido">-----</div>
            <div class="contenido">2 huevos cocidos, 2 tomates, 500g de ensalada de verduras (puede ser simplemente a base de pepino), 2 galletas.</div>
        </div>
        <div class="columna">
            <div class="contenido">1 naranja (puede ser pomelo, durazno, piña u otras frutas, menos el plátano), 2 galletas (trigo entero o con cereales), café o té sin azúcar.</div>
            <div class="contenido">1 naranja, 1 huevo cocido, yogur.</div>
            <div class="contenido">-----</div>
            <div class="contenido">2 huevos cocidos, 2 tomates, 500g de ensalada de verduras (puede ser simplemente a base de pepino), 2 galletas.</div>
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