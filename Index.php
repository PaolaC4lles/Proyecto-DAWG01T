<?php

session_start();

if(isset($_SESSION['usuario'])){
     header("location: Inicio.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/StyleLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;
                    1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
                    <link rel="shortcut icon" href="IMG/icon.png" type="image/x-icon">
                <title>INICIO DE SESION Y REGISTRO</title>
                    <header>
        <nav>
           <ul>
             <li><a href="#">BIENVENIDO</a></li>
           </ul>
       </nav>
    </header>
</head>
<body>
        <main>
            
                <div class="contenedor__todo">
                    <div class="caja__trasera">
                        <div class="caja__trasera-login">
                            <h3>¿Ya tienes una cuenta?</h3>
                            <p>Inicia sesión para entrar en la página</p>
                            <button id="btn__iniciar-sesion" >Iniciar Sesión</button>
                        </div>
                        <div class="caja__trasera-register">
                            <h3>¿Aún no tienes una cuenta?</h3>
                            <p>Regístrate para que puedas iniciar sesión</p>
                            <button id="btn__registrarse" >Regístrarse</button>
                        </div>
                    </div>
                    <!--Formulario de login y regístro-->
                    <div class="contenedor__login-register">
                        <!--Login-->
                        <form action="php/login_usuario_be.php" method = "POST"
                        class="formulario__login">
                            <h2>Iniciar Sesión</h2>
                            <input type="text" placeholder="Correo Electronico" name ="correo" required>
                            <input type="password" placeholder="Contraseña" name = "contrasena" required>
                            <button>Entrar</button>
                         </form>
                         <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                            <!--Registro-->
                            <h2>Regístrarse</h2>
                            <input type="text" placeholder="Nombre Completo" name="nombre_completo" required>
                            <input type="text" placeholder="Correo Electronico" name = "correo" required>
                            <input type="text" placeholder="Usuario" name = "usuario" required>
                            <input type="password" placeholder="Contraseña" name = "contrasena" required>
                            <button>Regístrarse</button>
                         </form>
                    </div>
                </div>

        </main>
        <footer>
     <div class="F-texto"><p>Copyright© 2024</p></div>
     <div class="Redes">
         <a href=""><img src="IMG/facebook.png" alt="Facebook"></a>
         <a href=""><img src="IMG/twitter.png" alt="Twitter"></a>
         <a href=""><img src="IMG/instagram.png" alt="Instagram"></a>
     </div>
 </footer>
        <script src="js/script.js"></script>
</body>
</html>
