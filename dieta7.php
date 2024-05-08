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
        <td>Yogur natural con avena y arándanos</td>
        <td>Tostadas integrales con aguacate y queso fresco</td>
        <td>Yogur con cereales y fruta</td>
        <td>Tortitas de avena</td>
        <td>Tortilla con avena y espinacas</td>
        <td>Yogur con copos de avena</td>
        <td>Sándwich de pan integral con pavo, manzana y queso</td>
    </tr>
   </table>
   <div class="comidasA">
    <img class="imDes" src="IMG/almuerzo.png" alt="Imagen desayuno">
    <p class="com">Almuerzo</p>
   </div>
   <table style="width: 100%;">
    <tr>
        <td>Judías verdes con zanahoria y calabacín y filetes de pollo a la plancha</td>
        <td>Carne roja magra. Vegetales crudos y/o cocidos al vapor. 1 papa hervida y fría en la ensalada.</td>
        <td>Carré. Vegetales crudos y/o cocidos al vapor. 1 choclo.</td>
        <td>Pescado sobre cebolla y tomate, o atún o caballa al natural. Vegetales crudos y/o cocidos al vapor. Trigo burgol o papa hervida y fría en la ensalada.</td>
        <td>Carne roja magra. Vegetales crudos y/o cocidos al vapor. Arroz integral.</td>
        <td>Cerdo: pata trasera o carré. Vegetales crudos y/o cocidos al vapor. 1 batata fría en la ensalada.</td>
        <td>Pollo sin piel (quitarla antes de cocinarlo). Vegetales crudos y/o cocidos al vapor. 1 choclo o 1 papa hervida.</td>
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
        <td>Dorada al horno con cama de pimientos rojos y patatas</td>
        <td>Vegetales crudos y/o cocidos al vapor. 1 batata hervida y fría en la ensalada.</td>
        <td>Pollo sin piel o pescado. Vegetales crudos y/o cocidos al vapor. Quinoa o 1 choclo.</td>
        <td>Carne roja o blanca. Vegetales crudos y/o cocidos al vapor. Legumbres.</td>
        <td>Carne roja o blanca. Fideos gruesos —pueden ser cintas—, frescos o secos, cocidos al dente al dente. Mezclados con vegetales crudos y/o cocidos al vapor.</td>
        <td>Carré o pescado. Vegetales crudos y/o cocidos al vapor. 1 batata o trigo burgol.</td>
        <td>Pescado. Vegetales crudos y/o cocidos al vapor. Arroz integral o parboil.</td>
    </tr>
   </table>
   <div class="tabla-celular">
    <div class="fila">
        <div class="columna">
            <div class="contenido">Yogur natural con avena y arándanos</div>
            <div class="contenido">Judías verdes con zanahoria y calabacín y filetes de pollo a la plancha</div>
            <div class="contenido">-----</div>
            <div class="contenido">Dorada al horno con cama de pimientos rojos y patatas</div>
        </div>
        <div class="columna">
            <div class="contenido">Yogur natural con avena y arándanos</div>
            <div class="contenido">Judías verdes con zanahoria y calabacín y filetes de pollo a la plancha</div>
            <div class="contenido">-----</div>
            <div class="contenido">Dorada al horno con cama de pimientos rojos y patatas</div>
        </div>
        <div class="columna">
            <div class="contenido">Yogur natural con avena y arándanos</div>
            <div class="contenido">Judías verdes con zanahoria y calabacín y filetes de pollo a la plancha</div>
            <div class="contenido">-----</div>
            <div class="contenido">Dorada al horno con cama de pimientos rojos y patatas</div>
        </div>
        <div class="columna">
            <div class="contenido">Yogur natural con avena y arándanos</div>
            <div class="contenido">Judías verdes con zanahoria y calabacín y filetes de pollo a la plancha</div>
            <div class="contenido">-----</div>
            <div class="contenido">Dorada al horno con cama de pimientos rojos y patatas</div>
        </div>
    </div>
    <div class="fila">
        <div class="columna">
            <div class="contenido">Yogur natural con avena y arándanos</div>
            <div class="contenido">Judías verdes con zanahoria y calabacín y filetes de pollo a la plancha</div>
            <div class="contenido">-----</div>
            <div class="contenido">Dorada al horno con cama de pimientos rojos y patatas</div>
        </div>
        <div class="columna">
            <div class="contenido">Yogur natural con avena y arándanos</div>
            <div class="contenido">Judías verdes con zanahoria y calabacín y filetes de pollo a la plancha</div>
            <div class="contenido">-----</div>
            <div class="contenido">Dorada al horno con cama de pimientos rojos y patatas</div>
        </div>
        <div class="columna">
            <div class="contenido">Yogur natural con avena y arándanos</div>
            <div class="contenido">Judías verdes con zanahoria y calabacín y filetes de pollo a la plancha</div>
            <div class="contenido">-----</div>
            <div class="contenido">Dorada al horno con cama de pimientos rojos y patatas</div>
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