<?php

session_start();

if (isset($_SESSION['usuario'])) {
  header("location: /Ejercicios/LoginRegister/login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>login y Register</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="assets/css/estilos.css" />
</head>

<style></style>

<body>
  <main>
    <div class="contenedor__todo">
      <div class="caja__trasera">
        <div class="caja__trasera-login">
          <h3>¿Ya tienes una cuenta?</h3>
          <p>Inicia sesión para continuar</p>
          <button id="btn__iniciar-sesion">Iniciar Sesión</button>
        </div>
        <div class="caja__trasera-register">
          <h3>¿Aún no tienes una cuenta?</h3>
          <p>Crear Cuenta</p>
          <button id="btn__registrarse">Registrarse</button>
        </div>
      </div>

      <!--Formulario de Login y de Registro-->

      <div class="contenedor__login-register">

        <!--Login-->

        <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
          <h2>Iniciar Sesión</h2>
          <input required type="text" placeholder="Correo Electrónico" name="email" />
          <input required type="password" placeholder="Ingrese Contraseña" name="contraseña" />
          <button>Entrar</button>
        </form>

        <!--Resgistro-->

        <form action="php/registro_usuario_bd.php" method="POST" class="formulario__register">
          <h2>Registrarse</h2>
          <input required type="text" placeholder="Nombre" name="nombre" />
          <input required type="text" placeholder="Correo Electronico" name="email" />
          <input required type="password" placeholder="Contraseña" name="contraseña" />
          <button>Regístrarse</button>
        </form>
      </div>
    </div>
  </main>
  <script src="assets/js/script.js"></script>
</body>

</html>

<!--direccion a sql express: Server=localhost\SQLEXPRESS;Database=master;Trusted_Connection=True; -->