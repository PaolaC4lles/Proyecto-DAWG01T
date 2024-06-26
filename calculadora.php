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
    <title>Calculadora de IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="css/responsive_nvar.css">
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

    <!--js link--->
    <script type="text/javascript" src="js/responsive_nvar.js"></script>    
    <div class="titulo">
        <h1>Calculadora de IMC: Índice de masa corporal</h1>
    </div>
    <div class="datosPadre1">
        <div class="datos">
            <h2>Ingrese el peso</h2>
        </div>
        <div class="ingresaDato">
            <input type="number" id="kg" placeholder="Peso (KG)">
        </div>
    </div>
    <div class="datosPadre2">
        <div class="datos">
            <h2>Ingrese su Altura</h2>
        </div>
        <div class="ingresaDato">
            <input type="text" id="m" placeholder="Altura (Metros)">
        </div>
    </div>
        
    <button class="boton" id="calc">Calcular</button>
    
    <div class="resultado1">
        <h3>IMC: <span id="imc"></span></h3>
    </div>
    <div class="resultado2">
        <h3>Usted tiene: <span id="lectura"></span></h3>
    </div>
    <div class="particion">
        <table id="tableP" class="tabla" >
            <tr id="Inicio">
                <th>Índice de masa corporal</th>
                <th>Rango</th>
            </tr>
            <tr id="15oM">
                <td>15 ó Menos</td>
                <td>Delgadez muy Severa</td>
                </tr>
            <tr id="DelgadezS">
                <td>15 - 15, 9</td>
                <td>Delgadez Severa</td>

                <tr id="Delgadez">
                    <td>16 - 18, 4</td>
                    <td>Delgadez</td>
                </tr>
            </tr>   
                <tr id="pesoS">
                <td>18, 5 - 24,9</td>
                <td>Peso Saludable</td>
            </tr>
            <tr id="Sobrepeso">
                <td>25 - 29, 9</td>
                <td>Sobrepeso</td>
            </tr>
            <tr id="ObesidadS">
                <td>30 - 39, 9</td>
                <td>Obesidad Severa</td>
            </tr>
            <tr id="ObesidadM">
                <td>40 - ó más</td>
                <td>Obesidad Morbida</td>
            </tr>
        </table>

        <table class="tabla2">
            <td>    
                <button class="boton1">Enlaces de interés:</button>
            </td>
            <tr>
                <td><a href="dieta.php"><button class="boton2">Conocer mi dieta personalizada</button></a></td>
            </tr>
            <tr>
                <td><a href="rutina.php"><button class="boton2">Conocer mi rutina de ejercicios personalizada</button></a></td>
            </tr>
        </table>

    </div>
    
    <script src="js/Calculado.js"></script>
        <!--Pie de página-->
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