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
        <td>4 rebanadas de pan integral con mermelada. Revuelto de 1 huevo más 4 claras. 100 gr queso 0%.</td>
        <td>Batido de proteinas en agua. 80 gr de cereales con 1 vaso de leche. 1 plátano. </td>
        <td>Revuelto de huevos mas 4 claras. 1 rebana de pan integral con mermelada. 1 vaso de zumo de naranja</td>
        <td>80 gr de cereales con leche. 1 vaso de zumo de naranja. 100 gr de queso</td>
        <td>Batido de proteinas en agua. 60 gr de cereales con 250 ml de  leche.</td>
        <td>2 huevos revueltos. 60 gr de queso. 1 rebanada de pan integral con mermelada. 1 vaso de zumo de naranja</td>
        <td>2 huevos revueltos y 4 claras. 60 gr de avena. 1 platano. 1 vaso de zumo de naranja</td>
    </tr>
   </table>
   <div class="comidasA">
    <img class="imDes" src="IMG/almuerzo.png" alt="Imagen desayuno">
    <p class="com">Almuerzo</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>110 gr de pollo. 2 cucharadas de mayonesa light. Ensalada</td>
        <td>1 lata de atun. 1 rebanada de pan integral. 20 gr de frutos secos.</td>
        <td>Medio vaso de queso. 2 cucharadas de miel. Macedonia.</td>
        <td>Carne picada entre pan integral. Ensalada</td>
        <td>40 gr de frutos secos. Batido de proteinas.</td>
        <td>2 porciones de pizza con queso</td>
        <td>5 cortadas de pechuga de pavo. 2 rebanadas de pan integral. 1 manzana</td>
    </tr>
   </table>
   <div class="comidasR">
    <img class="imDes" src="IMG/refrigerio.png" alt="Imagen desayuno">
    <p class="com">Refrigerio</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>150 gr de pasta. 110 de carne magra. 80 gr de guisantes</td>
        <td>2 trozos pequeños de pizza de queso. Ensalada</td>
        <td>Batido de proteinas en 500ml de leche desnatada. 1 platano.</td>
        <td>110 gr de muslos de pollo. 150 gr de arroz blanco. 80 gr de guisantes</td>
        <td>100 gr de de salmon. 1 patata grande. 80 gr de maiz.</td>
        <td>100 gr de queso con miel. 1 platano. 1 taza de macedonia</td>
        <td>170 gr de salmon. 300 gr de arroz hervido.</td>
    </tr>
   </table>
   <div class="comidasC">
    <img class="imDes" src="IMG/cena.png" alt="Imagen desayuno">
    <p class="com">Cena</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>100 gr de queso. 2 rodajas de piña</td>
        <td>1 rebanada de pan integral. 2 lonchas de queso light. 60 gr de carne magra. Ensalada de lechuga y tomate</td>
        <td>110 gr de pescado. 2 patatas medianas. 80 gr vegetales mezclados</td>
        <td>1 huevos mas 4 claras revueltos. 1 tostada con integral de mermelada. 1 manzana</td>
        <td>Batido de proteinas de 500ml de leche desnatada. 50 gr de fresas </td>
        <td>Hamburguesa con pan integral. 1 vaso de leche desgrasada.</td>
        <td>110 de carne magra. 1 patata y zanahoria. 1 vaso de uva</td>
    </tr>
   </table>
   <div class="tabla-celular">
    <div class="fila">
        <div class="columna">
            <div class="contenido">4 rebanadas de pan integral con mermelada. Revuelto de 1 huevo más 4 claras. 100 gr queso 0%.</div>
            <div class="contenido">110 gr de pollo. 2 cucharadas de mayonesa light. Ensalada</div>
            <div class="contenido">150 gr de pasta. 110 de carne magra. 80 gr de guisantes</div>
            <div class="contenido">100 gr de queso. 2 rodajas de piña</div>
        </div>
        <div class="columna">
            <div class="contenido">Batido de proteinas en agua. 80 gr de cereales con 1 vaso de leche. 1 plátano.</div>
            <div class="contenido">1 lata de atun. 1 rebanada de pan integral. 20 gr de frutos secos.</div>
            <div class="contenido">2 trozos pequeños de pizza de queso. Ensalada</div>
            <div class="contenido">110 gr de pescado. 2 patatas medianas. 80 gr vegetales mezclados</div>
        </div>
        <div class="columna">
            <div class="contenido">4 rebanadas de pan integral con mermelada. Revuelto de 1 huevo más 4 claras. 100 gr queso 0%.</div>
            <div class="contenido">110 gr de pollo. 2 cucharadas de mayonesa light. Ensalada</div>
            <div class="contenido">150 gr de pasta. 110 de carne magra. 80 gr de guisantes</div>
            <div class="contenido">100 gr de queso. 2 rodajas de piña</div>
        </div>
        <div class="columna">
            <div class="contenido">Batido de proteinas en agua. 80 gr de cereales con 1 vaso de leche. 1 plátano.</div>
            <div class="contenido">1 lata de atun. 1 rebanada de pan integral. 20 gr de frutos secos.</div>
            <div class="contenido">2 trozos pequeños de pizza de queso. Ensalada</div>
            <div class="contenido">110 gr de pescado. 2 patatas medianas. 80 gr vegetales mezclados</div>
        </div>
    </div>
    <div class="fila">
        <div class="columna">
            <div class="contenido">4 rebanadas de pan integral con mermelada. Revuelto de 1 huevo más 4 claras. 100 gr queso 0%.</div>
            <div class="contenido">110 gr de pollo. 2 cucharadas de mayonesa light. Ensalada</div>
            <div class="contenido">150 gr de pasta. 110 de carne magra. 80 gr de guisantes</div>
            <div class="contenido">100 gr de queso. 2 rodajas de piña</div>
        </div>
        <div class="columna">
            <div class="contenido">Batido de proteinas en agua. 80 gr de cereales con 1 vaso de leche. 1 plátano.</div>
            <div class="contenido">1 lata de atun. 1 rebanada de pan integral. 20 gr de frutos secos.</div>
            <div class="contenido">2 trozos pequeños de pizza de queso. Ensalada</div>
            <div class="contenido">110 gr de pescado. 2 patatas medianas. 80 gr vegetales mezclados</div>
        </div>
        <div class="columna">
            <div class="contenido">Batido de proteinas en agua. 80 gr de cereales con 1 vaso de leche. 1 plátano.</div>
            <div class="contenido">1 lata de atun. 1 rebanada de pan integral. 20 gr de frutos secos.</div>
            <div class="contenido">2 trozos pequeños de pizza de queso. Ensalada</div>
            <div class="contenido">110 gr de pescado. 2 patatas medianas. 80 gr vegetales mezclados</div>
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