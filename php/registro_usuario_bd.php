<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$contraseña = hash('sha512', $contraseña); // Asegúrate de usar sha512 para la encriptación

// Asignar rol_id de usuario por defecto (id_rol 1)
$rol_id = 1;  // Por defecto, asignar rol de usuario

// Verificar si el correo ya existe
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
if (!$verificar_correo) {
    die('Error en la consulta de verificación de correo: ' . mysqli_error($conexion));
}

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
      alert("Este correo ya está registrado, intenta con otro correo");
      window.location = "../login.php";
    </script>
    ';
    exit();
}

// Inserción del nuevo usuario
$query = "INSERT INTO usuarios(nombre, email, contraseña, rol_id) VALUES('$nombre', '$email', '$contraseña', '$rol_id')";
$ejecutar = mysqli_query($conexion, $query);
if (!$ejecutar) {
    die('Error en la inserción del usuario: ' . mysqli_error($conexion));
}

if ($ejecutar) {
    echo '
    <script>
      alert("Usuario registrado correctamente");
      window.location = "../login.php";
    </script>
    ';
} else {
    echo '
    <script>
      alert("Ocurrió un error, inténtelo de nuevo");
      window.location = "../login.php";
    </script>
    ';
}

mysqli_close($conexion);
?>
