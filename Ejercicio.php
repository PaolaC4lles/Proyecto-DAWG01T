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
                <p id="TextoFood">La actividad física regular conlleva una serie de beneficios para la salud. Ayuda a fortalecer el corazón y a mejorar la circulación sanguínea, lo que reduce el riesgo de enfermedades cardiovasculares como la hipertensión arterial, las enfermedades cardíacas y los accidentes cerebrovasculares.</p>
            </div>
        </div>

        <div class="Comida">
            <div class="ContComida">
                <p id="TextoFood">Además, el ejercicio es fundamental para controlar el peso corporal. Al quemar calorías y aumentar el metabolismo, contribuye a mantener un peso saludable y prevenir la obesidad, la diabetes tipo 2 y otras enfermedades relacionadas con el sobrepeso.</p>
            </div>
        </div>

        <div class="Comida">
            <div class="ContComida">
                <p id="TextoFood">El ejercicio físico también tiene un impacto positivo en la salud mental y emocional. La liberación de endorfinas durante el ejercicio mejora el estado de ánimo y reduce el estrés, la ansiedad y la depresión. Además, puede mejorar la función cognitiva y la memoria, promoviendo así una mente más saludable..</p>
            </div>
        </div>

        <div class="Comida">
            <div class="ContComida">           
                <p id="TextoFood">A nivel físico, el ejercicio fortalece los huesos y los músculos, previniendo lesiones y enfermedades como la osteoporosis. También mejora la flexibilidad, la coordinación y la calidad del sueño, lo que contribuye a un mayor bienestar general.</p>
            </div>
        </div>

        <div class="Comida">
            <div class="ContComida">
                <p id="TextoFood">5. Finalmente, el ejercicio físico fomenta la interacción social y proporciona una forma saludable de aliviar el estrés y la tensión acumulada. Participar en actividades físicas regulares puede brindar oportunidades para socializar y conectarse con otras personas, mejorando así la calidad de vida en general.</p>
            </div>
        </div>
    </section>


    <footer class="FootFit">

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