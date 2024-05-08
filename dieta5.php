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
        <td>Leche desnatada con cereales de desayuno no azucarados y una pieza de fruta</td>
        <td>Café o infusión con leche desnatada Pan con tomate y una pieza de fruta</td>
        <td>Café o infusión con leche desnatada 3 biscotes integrales y una pieza de fruta</td>
        <td>Café o infusión con leche desnatada Tostada con queso desnatado y una pieza de fruta</td>
        <td>Leche desnatada con cereales de desayuno no azucarados y una pieza de fruta</td>
        <td>Café o infusión con leche desnatada 3 biscotes integrales 1 pìeza de fruta</td>
        <td>Café o infusión con leche desnatada Pan con queso desnatado 1 pieza de fruta</td>
    </tr>
   </table>
   <div class="comidasA">
    <img class="imDes" src="IMG/almuerzo.png" alt="Imagen desayuno">
    <p class="com">Almuerzo</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>Alcachofas al vapor Merluza rellena Pan (30 g) Brocheta de frutas variadas</td>
        <td>Judías verdes con tomate Pollo a la pimienta Pan (30 g) Fruta de temporada</td>
        <td>Berenjenas rellenas Sardina al horno con patatas Pan (30 g) Fruta de temporada</td>
        <td>Ensalada de espinacas, zanahorias y nueces Conejo con champiñones Pan (30 g) Fruta de temporada</td>
        <td>Menestra de verduras Filete de ternera Pan (30 g) Brocheta de naranja</td>
        <td>Acelgas rehogadas Pechuga de pollo con ensalada mixta Pan (30 g) Piña rellena</td>
        <td>Brocheta vegetal Fideuá con gambas Pan (30 g) Fruta de temporada</td>
    </tr>
   </table>
   <div class="comidasR">
    <img class="imDes" src="IMG/refrigerio.png" alt="Imagen desayuno">
    <p class="com">Refrigerio</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>2 biscotes integrales con queso desnatado</td>
        <td>Café o infusión con leche desnatada 3 galletas tipo María</td>
        <td>Yogur desnatado 3 galletas tipo María</td>
        <td>Café o infusión con leche desnatada 2 biscotes</td>
        <td>Yogur desnatado 3 galletas tipo María</td>
        <td>Yogur desnatado 2 biscotes con queso desnatado</td>
        <td>Yogur desnatado de frutas 3 galletas tipo María</td>
    </tr>
   </table>
   <div class="comidasC">
    <img class="imDes" src="IMG/cena.png" alt="Imagen desayuno">
    <p class="com">Cena</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>Ensalada de garbanzos Revuelto de acelgas Pan ( 30 g) Fruta de temporada</td>
        <td>Pisto de calabacín Filete de panga con ensalada mixta Pan (30 g) Fruta de temporada</td>
        <td>Ensalada de remolacha y huevo duro Lentejas con verduras Pan (30 g) Fruta de temporada</td>
        <td>Brócoli al vapor Merluza a la cazuela Pan (30 g) Fruta de temporada</td>
        <td>Lombarda con manzana y queso fresco Lubina con verduras Pan (30 g) Fruta de temporada</td>
        <td>Ensalada de la huerta Sepia con patatas Pan (30 g) Fruta de temporada</td>
        <td>Ensalada de tomate, cebolla y zanahoria Cinta de lomo de cerdo con arroz Pan (30 g) Fruta de temporada</td>
    </tr>
   </table>
   <div class="tabla-celular">
    <div class="fila">
        <div class="columna">
            <div class="contenido">Leche desnatada con cereales de desayuno no azucarados y una pieza de fruta</div>
            <div class="contenido">Alcachofas al vapor Merluza rellena Pan (30 g) Brocheta de frutas variadas</div>
            <div class="contenido">2 biscotes integrales con queso desnatado</div>
            <div class="contenido">Ensalada de garbanzos Revuelto de acelgas Pan ( 30 g) Fruta de temporada</div>
        </div>
        <div class="columna">
            <div class="contenido">Leche desnatada con cereales de desayuno no azucarados y una pieza de fruta</div>
            <div class="contenido">Alcachofas al vapor Merluza rellena Pan (30 g) Brocheta de frutas variadas</div>
            <div class="contenido">2 biscotes integrales con queso desnatado</div>
            <div class="contenido">Ensalada de garbanzos Revuelto de acelgas Pan ( 30 g) Fruta de temporada</div>
        </div>
        <div class="columna">
            <div class="contenido">Leche desnatada con cereales de desayuno no azucarados y una pieza de fruta</div>
            <div class="contenido">Alcachofas al vapor Merluza rellena Pan (30 g) Brocheta de frutas variadas</div>
            <div class="contenido">2 biscotes integrales con queso desnatado</div>
            <div class="contenido">Ensalada de garbanzos Revuelto de acelgas Pan ( 30 g) Fruta de temporada</div>
        </div>
        <div class="columna">
            <div class="contenido">Leche desnatada con cereales de desayuno no azucarados y una pieza de fruta</div>
            <div class="contenido">Alcachofas al vapor Merluza rellena Pan (30 g) Brocheta de frutas variadas</div>
            <div class="contenido">2 biscotes integrales con queso desnatado</div>
            <div class="contenido">Ensalada de garbanzos Revuelto de acelgas Pan ( 30 g) Fruta de temporada</div>
        </div>
    </div>
    <div class="fila">
        <div class="columna">
            <div class="contenido">Leche desnatada con cereales de desayuno no azucarados y una pieza de fruta</div>
            <div class="contenido">Alcachofas al vapor Merluza rellena Pan (30 g) Brocheta de frutas variadas</div>
            <div class="contenido">2 biscotes integrales con queso desnatado</div>
            <div class="contenido">Ensalada de garbanzos Revuelto de acelgas Pan ( 30 g) Fruta de temporada</div>
        </div>
        <div class="columna">
            <div class="contenido">Leche desnatada con cereales de desayuno no azucarados y una pieza de fruta</div>
            <div class="contenido">Alcachofas al vapor Merluza rellena Pan (30 g) Brocheta de frutas variadas</div>
            <div class="contenido">2 biscotes integrales con queso desnatado</div>
            <div class="contenido">Ensalada de garbanzos Revuelto de acelgas Pan ( 30 g) Fruta de temporada</div>
        </div>
        <div class="columna">
            <div class="contenido">Leche desnatada con cereales de desayuno no azucarados y una pieza de fruta</div>
            <div class="contenido">Alcachofas al vapor Merluza rellena Pan (30 g) Brocheta de frutas variadas</div>
            <div class="contenido">2 biscotes integrales con queso desnatado</div>
            <div class="contenido">Ensalada de garbanzos Revuelto de acelgas Pan ( 30 g) Fruta de temporada</div>
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