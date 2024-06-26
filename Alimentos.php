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
            <li><a href="Inicio.php">Inicio</a></li>
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


    <section class="Food">

        <div class="Comida">
            <div class="ContComida">
                <img src="IMG/Alimento1.jpg" alt="Imagen 1" class="ImgComida">
                <p id="TextoFood">1. Ensalada de pollo: Una mezcla de hojas verdes, pollo a la parrilla, tomate cherry,
                    pepino y aderezo ligero.</p>
            </div>
        </div>

        <div class="Comida">
            <div class="ContComida">
                <img src="IMG/Alimento2.jpeg" alt="Imagen 1" class="ImgComida">
                <p id="TextoFood">2. Brochetas de carne y vegetales: Trozos de carne magra (como pollo, ternera o pavo)
                    intercalados con verduras como pimientos, cebolla y champiñones, todo a la parrilla.</p>
            </div>
        </div>

        <div class="Comida">
            <div class="ContComida">
                <img src="IMG/Alimento3.jpeg" alt="Imagen 1" class="ImgComida">
                <p id="TextoFood">3. Salmón con espárragos: Salmón a la parrilla con espárragos al vapor o asados,
                    sazonados con limón y hierbas frescas.</p>
            </div>
        </div>

        <div class="Comida">
            <div class="ContComida">
                <img src="IMG/Alimento4.jpeg" alt="Imagen 1" class="ImgComida">
                <p id="TextoFood">4. Ensalada de atún: Atún enlatado sobre una cama de espinacas o lechuga, con tomate,
                    aguacate y vinagreta balsámica.</p>
            </div>
        </div>

        <div class="Comida">
            <div class="ContComida">
                <img src="IMG/Alimento5.jpeg" alt="Imagen 1" class="ImgComida">
                <p id="TextoFood">5. Pollo al horno con vegetales asados: Pechuga de pollo al horno acompañada de
                    zanahorias, calabacines, berenjenas y cebollas asadas.</p>
            </div>
        </div>

        <div class="Comida">
            <div class="ContComida">
                <img src="IMG/Alimento6.jpeg" alt="Imagen 1" class="ImgComida">
                <p id="TextoFood">6. Tacos de pescado: Pescado blanco (como el bacalao o la tilapia) cocido con especias
                    y servido en tortillas de maíz con repollo rallado, tomate y salsa de yogur.</p>
            </div>
        </div>

        <div class="Comida">
            <div class="ContComida">
                <img src="IMG/Alimento7.jpeg" alt="Imagen 1" class="ImgComida">
                <p id="TextoFood">7. Pollo al curry con verduras: Trozos de pollo cocidos en una salsa de curry suave
                    con calabacín, pimientos y espinacas, servidos sobre arroz integral.</p>
            </div>
        </div>

        <div class="Comida">
            <div class="ContComida">
                <img src="IMG/Alimento8.jpeg" alt="Imagen 1" class="ImgComida">
                <p id="TextoFood">8. Brochetas de camarones y vegetales: Camarones grandes y verduras (como pimientos,
                    cebolla y calabacín) marinados y asados en brochetas</p>
            </div>
        </div>
    </section>

    <footer class="FootComida">

        <div class="F-texto2">
            <p>Copyright© 2024</p>
        </div>

        <div class="Redes2">
            <a href=""><img src="IMG/facebook.png" alt="Facebook"></a>
            <a href=""><img src="IMG/twitter.png" alt="Twitter"></a>
            <a href=""><img src="IMG/instagram.png" alt="Instagram"></a>
        </div>
    </footer>
</body>

</html>